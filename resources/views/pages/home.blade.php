<x-layout>
    {{-- Hero --}}
    <section class="relative overflow-hidden">
        <div class="mx-auto grid max-w-6xl items-center gap-12 px-4 py-16 sm:px-6 md:py-24 lg:grid-cols-2">
            <div>
                <p class="font-semibold uppercase tracking-widest text-blood-700">A Nepali podcast · Since 2020</p>
                <h1 class="mt-4 font-display text-5xl font-extrabold leading-[1.05] text-blood-900 sm:text-6xl">
                    Let's talk about periods. <span class="text-blood-600">Out loud.</span>
                </h1>
                <p class="mt-6 max-w-xl text-xl leading-relaxed text-ink/80">
                    Breaking the rooted silence on menstruation in Nepal, debunking myths, taboos and stigma, one honest conversation at a time.
                </p>
                <div class="mt-8 flex flex-wrap items-center gap-4">
                    <a href="{{ $latest ? route('episodes.show', $latest) : route('episodes.index') }}" class="inline-flex items-center gap-2 rounded-full bg-blood-700 px-7 py-3.5 text-lg font-semibold text-white shadow-lg shadow-blood-700/25 transition hover:bg-blood-800">
                        <svg class="size-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
                        Play latest episode
                    </a>
                    <a href="{{ route('episodes.index') }}" class="font-semibold text-blood-800 underline-offset-4 hover:underline">Browse all {{ $episodeCount }} episodes →</a>
                </div>
            </div>

            @if ($latest)
                <div class="relative">
                    <div class="absolute -inset-4 -rotate-3 rounded-[2rem] bg-blood-700" aria-hidden="true"></div>
                    <div class="relative rounded-[2rem] bg-white p-6 shadow-2xl">
                        <div class="flex gap-5">
                            <img src="{{ $latest->artworkUrl() }}" alt="" width="128" height="128" class="size-28 shrink-0 rounded-xl object-cover sm:size-32">
                            <div class="min-w-0">
                                <p class="text-sm font-bold uppercase tracking-wider text-blood-700">New episode</p>
                                <h2 class="mt-1 text-xl font-bold leading-snug">
                                    <a href="{{ route('episodes.show', $latest) }}" class="hover:text-blood-700">{{ $latest->title }}</a>
                                </h2>
                                <p class="mt-1 text-sm text-ink/60">{{ $latest->published_at->format('M j, Y') }} · {{ $latest->formattedDuration() }}</p>
                            </div>
                        </div>
                        <p class="mt-4 line-clamp-3 text-ink/75">{{ $latest->excerpt(220) }}</p>
                        @if ($latest->audio_url)
                            <audio controls preload="none" src="{{ $latest->audio_url }}" class="mt-5 w-full">
                                <a href="{{ $latest->audio_url }}">Download the episode</a>
                            </audio>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </section>

    {{-- Listen strip --}}
    <section class="bg-blood-700 text-white">
        <div class="mx-auto flex max-w-6xl flex-col items-start justify-between gap-4 px-4 py-6 sm:px-6 md:flex-row md:items-center">
            <p class="text-lg font-semibold">Subscribe wherever you listen</p>
            <x-listen-links />
        </div>
    </section>

    {{-- Recent episodes --}}
    <section class="mx-auto max-w-6xl px-4 py-20 sm:px-6">
        <div class="flex items-end justify-between gap-4">
            <h2 class="font-display text-4xl font-bold text-blood-900">Recent episodes</h2>
            <a href="{{ route('episodes.index') }}" class="shrink-0 font-semibold text-blood-700 hover:underline">View all →</a>
        </div>
        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($recent as $episode)
                <x-episode-card :episode="$episode" />
            @endforeach
        </div>
    </section>

    {{-- Hosts --}}
    @if ($team->isNotEmpty())
        <section class="mx-auto max-w-6xl px-4 pb-20 sm:px-6">
            <div class="grid items-center gap-10 rounded-[2rem] bg-white p-8 ring-1 ring-blood-900/5 sm:p-12 lg:grid-cols-[auto_1fr]">
                <div class="flex -space-x-6">
                    @foreach ($team as $member)
                        @if ($member->photo)
                            <img src="{{ Storage::disk('public')->url($member->photo) }}" alt="{{ $member->name }}" width="128" height="128" loading="lazy" class="size-28 rounded-full object-cover ring-4 ring-white sm:size-32">
                        @endif
                    @endforeach
                </div>
                <div>
                    <h2 class="font-display text-3xl font-bold text-blood-900">Meet your hosts</h2>
                    <p class="mt-3 text-lg leading-relaxed text-ink/75">
                        {{ $team->pluck('name')->join(', ', ' and ') }}: friends, sisters and storytellers who started Period Kaa Kura in 2020 with a small microphone, a laptop and a shared vision for dignified menstruation.
                    </p>
                    <a href="{{ route('about') }}" class="mt-5 inline-block font-semibold text-blood-700 hover:underline">Read our story →</a>
                </div>
            </div>
        </section>
    @endif

    {{-- Topics --}}
    <section class="bg-sand">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
            <h2 class="font-display text-3xl font-bold text-blood-900">What we talk about</h2>
            <p class="mt-2 text-lg text-ink/70">Health, rights, culture and lived experience, in Nepali, from every corner of the country.</p>
            <ul class="mt-8 flex flex-wrap gap-3">
                @foreach (App\Models\Episode::TOPICS as $topic)
                    <li>
                        <a href="{{ route('episodes.index', ['topic' => $topic]) }}" class="inline-block rounded-full bg-white px-5 py-2.5 font-semibold text-blood-800 shadow-sm ring-1 ring-blood-900/10 transition hover:bg-blood-700 hover:text-white">{{ $topic }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Videos --}}
    @if ($videos->isNotEmpty())
        <section class="mx-auto max-w-6xl px-4 py-20 sm:px-6">
            <div class="flex items-end justify-between gap-4">
                <h2 class="font-display text-4xl font-bold text-blood-900">Watch</h2>
                <a href="{{ config('podcast.links.youtube') }}" class="shrink-0 font-semibold text-blood-700 hover:underline">YouTube channel →</a>
            </div>
            <div class="mt-10 grid gap-8 md:grid-cols-3">
                @foreach ($videos as $video)
                    <x-youtube :id="$video->youtube_id" :title="$video->title" />
                @endforeach
            </div>
        </section>
    @endif

    {{-- Press --}}
    @if ($press->isNotEmpty())
        <section class="border-y border-blood-900/10 bg-white">
            <div class="mx-auto max-w-6xl px-4 py-14 sm:px-6">
                <h2 class="text-center font-semibold uppercase tracking-widest text-ink/50">As featured in</h2>
                <ul class="mt-8 flex flex-wrap items-center justify-center gap-x-10 gap-y-5">
                    @foreach ($press->unique('outlet') as $mention)
                        <li>
                            <a href="{{ route('about') }}#press" class="font-display text-xl font-bold text-ink/60 transition hover:text-blood-700">{{ $mention->outlet }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    @endif

    {{-- Support CTA --}}
    <section class="mx-auto max-w-6xl px-4 py-20 sm:px-6">
        <div class="grid items-center gap-8 rounded-[2rem] bg-blood-900 p-10 text-white md:grid-cols-[1fr_auto] md:p-14">
            <div>
                <h2 class="font-display text-4xl font-bold">Keep the conversation going</h2>
                <p class="mt-3 max-w-2xl text-lg text-blood-100/80">Period Kaa Kura is an independent, listener-supported initiative. Your support helps us travel, record and reach more menstruators across Nepal.</p>
            </div>
            <a href="{{ route('support') }}" class="justify-self-start rounded-full bg-marigold px-8 py-4 text-lg font-bold text-blood-900 transition hover:bg-white">Support us</a>
        </div>
    </section>
</x-layout>
