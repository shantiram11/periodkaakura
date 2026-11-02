@props(['episode'])

<article class="group relative flex flex-col overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-blood-900/5 transition hover:-translate-y-1 hover:shadow-lg">
    <img src="{{ $episode->artworkUrl() }}" alt="" loading="lazy" width="400" height="400" class="aspect-square w-full bg-sand object-cover">
    <div class="flex flex-1 flex-col p-5">
        <p class="text-sm font-semibold text-blood-700">
            @if ($episode->number) Episode {{ $episode->number }} · @endif
            {{ $episode->published_at->format('M j, Y') }}
        </p>
        <h3 class="mt-2 text-lg font-bold leading-snug">
            <a href="{{ route('episodes.show', $episode) }}" class="after:absolute after:inset-0">
                {{ preg_replace('/^episode\s*\d+\s*[-:–]?\s*/i', '', $episode->title) ?: $episode->title }}
            </a>
        </h3>
        <p class="mt-2 line-clamp-3 text-ink/70">{{ $episode->excerpt() }}</p>
        @if ($episode->formattedDuration())
            <p class="mt-auto pt-4 text-sm font-medium text-ink/60">▶ {{ $episode->formattedDuration() }}</p>
        @endif
    </div>
</article>
