<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Episode extends Model
{
    public const TOPICS = [
        'Health', 'Myths & taboos', 'Chhaupadi', 'Policy', 'Menopause',
        'Products', 'Men & periods', 'Stories', 'Climate', 'Disaster',
    ];

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'topics' => 'array',
            'is_featured' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopePublished(Builder $query): void
    {
        $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }

    public function scopeLatestFirst(Builder $query): void
    {
        $query->orderByDesc('published_at');
    }

    public function artworkUrl(): ?string
    {
        return $this->artwork ? Storage::disk('public')->url($this->artwork) : $this->image_url;
    }

    public function formattedDuration(): ?string
    {
        if (! $this->duration) {
            return null;
        }

        $hours = intdiv($this->duration, 3600);
        $minutes = intdiv($this->duration % 3600, 60);

        return $hours ? "{$hours} hr {$minutes} min" : "{$minutes} min";
    }

    /**
     * Show notes reduced to basic formatting, with every attribute except safe link targets removed.
     */
    public function safeDescription(): string
    {
        $html = strip_tags((string) $this->description, '<p><br><strong><b><em><i><ul><ol><li><a><h3><h4><blockquote>');

        return preg_replace_callback('/<(\w+)\b[^>]*>/', function (array $tag) {
            if (strtolower($tag[1]) === 'a' && preg_match('/href\s*=\s*["\'](https?:\/\/[^"\']+)["\']/i', $tag[0], $href)) {
                return '<a href="'.e($href[1], false).'" rel="nofollow noopener" target="_blank">';
            }

            return '<'.$tag[1].'>';
        }, $html);
    }

    public function excerpt(int $limit = 160): string
    {
        $text = strip_tags(preg_replace('/<\/(p|li|h\d)>|<br\s*\/?>/i', ' ', (string) ($this->summary ?: $this->description)));

        return Str::limit(Str::squish(html_entity_decode($text)), $limit);
    }
}
