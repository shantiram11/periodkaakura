@props(['id', 'title'])

<figure>
    <div class="relative aspect-video overflow-hidden rounded-2xl bg-ink">
        <button type="button" data-youtube="{{ $id }}" aria-label="Play video: {{ $title }}" class="group absolute inset-0 h-full w-full">
            <img src="https://i.ytimg.com/vi/{{ $id }}/hqdefault.jpg" alt="" loading="lazy" class="h-full w-full object-cover opacity-90 transition group-hover:opacity-100">
            <span class="absolute inset-0 m-auto flex size-16 items-center justify-center rounded-full bg-blood-700 text-white shadow-xl transition group-hover:scale-110">
                <svg class="ml-1 size-7" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
            </span>
        </button>
    </div>
    <figcaption class="mt-3 font-semibold">{{ $title }}</figcaption>
</figure>
