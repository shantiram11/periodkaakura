<div {{ $attributes->merge(['class' => 'flex flex-wrap gap-3']) }}>
    @foreach (['spotify' => 'Spotify', 'apple' => 'Apple Podcasts', 'youtube' => 'YouTube'] as $key => $label)
        <a href="{{ config("podcast.links.{$key}") }}" class="rounded-full border-2 border-current px-4 py-1.5 text-sm font-semibold transition hover:bg-white/10">{{ $label }}</a>
    @endforeach
</div>
