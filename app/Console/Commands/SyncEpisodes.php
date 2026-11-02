<?php

namespace App\Console\Commands;

use App\Models\Episode;
use Carbon\Carbon;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use SimpleXMLElement;

#[Signature('episodes:sync')]
#[Description('Import new and updated episodes from the podcast RSS feed')]
class SyncEpisodes extends Command
{
    private const ITUNES = 'http://www.itunes.com/dtds/podcast-1.0.dtd';

    public function handle(): int
    {
        $response = Http::timeout(30)->get(config('podcast.feed_url'));

        if ($response->failed()) {
            $this->error("Feed request failed with status {$response->status()}.");

            return self::FAILURE;
        }

        $feed = new SimpleXMLElement($response->body(), LIBXML_NOCDATA);
        $created = 0;

        foreach ($feed->channel->item as $item) {
            $itunes = $item->children(self::ITUNES);
            $title = trim((string) $item->title);

            $episode = Episode::firstOrNew(['guid' => (string) $item->guid]);
            $number = $this->episodeNumber($title, (string) $itunes->episode);

            $episode->fill([
                'number' => $number,
                'title' => $title,
                'description' => trim((string) $item->description),
                'audio_url' => (string) $item->enclosure['url'] ?: null,
                'duration' => $this->durationInSeconds((string) $itunes->duration),
                'image_url' => (string) $itunes->image->attributes()?->href ?: null,
                'spotify_url' => (string) $item->link ?: null,
                'published_at' => Carbon::parse((string) $item->pubDate),
            ]);

            if (! $episode->exists) {
                $episode->slug = $this->uniqueSlug($title, $number, $episode->guid);
                $created++;
            }

            $this->cacheArtwork($episode);
            $episode->save();
        }

        $this->info("Synced {$feed->channel->item->count()} episodes ({$created} new).");

        return self::SUCCESS;
    }

    /**
     * Feed covers are multi-megabyte originals, so keep a small WebP copy to serve on the site.
     */
    private function cacheArtwork(Episode $episode): void
    {
        if (! $episode->image_url || $episode->artwork_source === $episode->image_url) {
            return;
        }

        $response = Http::timeout(30)->get($episode->image_url);
        $image = $response->successful() ? @imagecreatefromstring($response->body()) : false;

        if (! $image) {
            $this->warn("Could not fetch artwork for \"{$episode->title}\".");

            return;
        }

        $resized = imagescale($image, 600);
        ob_start();
        imagewebp($resized, null, 80);
        $path = "episodes/{$episode->slug}.webp";
        Storage::disk('public')->put($path, ob_get_clean());

        $episode->artwork = $path;
        $episode->artwork_source = $episode->image_url;
    }

    private function episodeNumber(string $title, string $itunesEpisode): ?int
    {
        // Titles are the source of truth; the feed's itunes:episode drifts from them.
        if (preg_match('/episode\s*(\d+)/i', $title, $matches)) {
            return (int) $matches[1];
        }

        return $itunesEpisode !== '' ? (int) $itunesEpisode : null;
    }

    private function durationInSeconds(string $duration): ?int
    {
        if ($duration === '') {
            return null;
        }

        return collect(array_reverse(explode(':', $duration)))
            ->reduce(fn (int $total, string $part, int $i) => $total + (int) $part * (60 ** $i), 0);
    }

    private function uniqueSlug(string $title, ?int $number, string $guid): string
    {
        $words = Str::slug(preg_replace('/^episode\s*\d+\s*[-:–]?\s*/i', '', $title));
        $base = collect([$number ? "episode-{$number}" : null, Str::limit($words, 60, '')])
            ->filter()
            ->implode('-') ?: Str::substr($guid, 0, 8);

        $slug = trim($base, '-');
        $suffix = 2;

        while (Episode::where('slug', $slug)->exists()) {
            $slug = "{$base}-{$suffix}";
            $suffix++;
        }

        return $slug;
    }
}
