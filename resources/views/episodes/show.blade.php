<x-layout :title="$episode->title" :description="$episode->excerpt(155)" :image="$episode->artworkUrl()" type="article">
    <x-slot:head>
        <script type="application/ld+json">
            {!! json_encode(array_filter([
                '@context' => 'https://schema.org',
                '@type' => 'PodcastEpisode',
                'url' => route('episodes.show', $episode),
                'name' => $episode->title,
                'episodeNumber' => $episode->number,
                'datePublished' => $episode->published_at->toDateString(),
                'description' => $episode->excerpt(300),
                'image' => $episode->artworkUrl(),
                'timeRequired' => $episode->duration ? 'PT'.intdiv($episode->duration, 60).'M' : null,
                'associatedMedia' => $episode->audio_url ? ['@type' => 'MediaObject', 'contentUrl' => $episode->audio_url] : null,
                'partOfSeries' => ['@type' => 'PodcastSeries', 'name' => 'Period Kaa Kura', 'url' => route('home')],
            ]), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>
    </x-slot:head>

    <article>
        <header class="bg-blood-900 text-white">
            <div class="mx-auto grid max-w-6xl gap-10 px-4 py-14 sm:px-6 md:grid-cols-[280px_1fr] md:items-center">
                <img src="{{ $episode->artworkUrl() }}" alt="Cover art for {{ $episode->title }}" width="280" height="280" class="aspect-square w-48 rounded-2xl object-cover shadow-2xl md:w-full">
                <div>
                    <a href="{{ route('episodes.index') }}" class="text-sm font-semibold text-marigold hover:underline">← All episodes</a>
                    <p class="mt-4 font-semibold text-blood-100/80">
                        @if ($episode->number) Episode {{ $episode->number }} · @endif
                        {{ $episode->published_at->format('F j, Y') }}
                        @if ($episode->formattedDuration()) · {{ $episode->formattedDuration() }} @endif
                    </p>
                    <h1 class="mt-2 font-display text-4xl font-bold leading-tight sm:text-5xl">{{ $episode->title }}</h1>

                    @if ($episode->topics)
                        <ul class="mt-5 flex flex-wrap gap-2">
                            @foreach ($episode->topics as $topic)
                                <li><a href="{{ route('episodes.index', ['topic' => $topic]) }}" class="rounded-full bg-white/10 px-3 py-1 text-sm font-semibold hover:bg-white/20">{{ $topic }}</a></li>
                            @endforeach
                        </ul>
                    @endif

                    @if ($episode->audio_url)
                        <audio controls preload="metadata" src="{{ $episode->audio_url }}" class="mt-8 w-full">
                            <a href="{{ $episode->audio_url }}">Download the episode</a>
                        </audio>
                    @endif
                    <x-listen-links class="mt-6" />
                </div>
            </div>
        </header>

        <div class="mx-auto grid max-w-6xl gap-12 px-4 py-14 sm:px-6 lg:grid-cols-[1fr_300px]">
            <div class="min-w-0">
                @if ($episode->youtube_id)
                    <div class="mb-10"><x-youtube :id="$episode->youtube_id" :title="$episode->title" /></div>
                @endif

                <h2 class="font-display text-2xl font-bold text-blood-900">Show notes</h2>
                <div class="prose-notes mt-4 text-lg text-ink/85">{!! $episode->safeDescription() !!}</div>

                @if ($episode->transcript)
                    <details class="mt-10 rounded-2xl bg-white p-6 ring-1 ring-blood-900/10">
                        <summary class="cursor-pointer font-display text-xl font-bold text-blood-900">Read the transcript</summary>
                        <div class="mt-4 whitespace-pre-line leading-relaxed text-ink/85">{{ $episode->transcript }}</div>
                    </details>
                @endif
            </div>

            <aside class="space-y-6">
                <div class="rounded-2xl bg-white p-6 ring-1 ring-blood-900/10">
                    <h2 class="font-bold">Share this episode</h2>
                    @php $shareUrl = urlencode(route('episodes.show', $episode)); @endphp
                    <ul class="mt-3 space-y-2 font-semibold text-blood-700">
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" class="hover:underline">Facebook</a></li>
                        <li><a href="https://wa.me/?text={{ $shareUrl }}" class="hover:underline">WhatsApp</a></li>
                        <li><a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ urlencode($episode->title) }}" class="hover:underline">X / Twitter</a></li>
                    </ul>
                </div>
                <div class="rounded-2xl bg-blood-700 p-6 text-white">
                    <h2 class="font-bold">Enjoyed this episode?</h2>
                    <p class="mt-2 text-blood-100/90">Help us keep the conversation going.</p>
                    <a href="{{ route('support') }}" class="mt-4 inline-block rounded-full bg-marigold px-5 py-2 font-bold text-blood-900 hover:bg-white">Support us</a>
                </div>
            </aside>
        </div>

        <nav class="mx-auto flex max-w-6xl justify-between gap-6 border-t border-blood-900/10 px-4 py-8 sm:px-6" aria-label="More episodes">
            @if ($previous)
                <a href="{{ route('episodes.show', $previous) }}" class="max-w-sm"><span class="text-sm text-ink/60">← Previous</span><span class="block font-semibold hover:text-blood-700">{{ $previous->title }}</span></a>
            @else <span></span> @endif
            @if ($next)
                <a href="{{ route('episodes.show', $next) }}" class="max-w-sm text-right"><span class="text-sm text-ink/60">Next →</span><span class="block font-semibold hover:text-blood-700">{{ $next->title }}</span></a>
            @endif
        </nav>
    </article>

    @if ($related->isNotEmpty())
        <section class="bg-sand">
            <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
                <h2 class="font-display text-3xl font-bold text-blood-900">Keep listening</h2>
                <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($related as $item)
                        <x-episode-card :episode="$item" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</x-layout>
