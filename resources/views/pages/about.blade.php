<x-layout title="About us" description="Period Kaa Kura is a Nepali podcast by Priyanka Budhathoki and Shristi Kafle, two voices from Nepal who dared to break the silence surrounding menstruation.">
    <section class="mx-auto max-w-4xl px-4 pb-16 pt-20 text-center sm:px-6">
        <p class="font-semibold uppercase tracking-widest text-blood-700">About us</p>
        <h1 class="mt-4 font-display text-5xl font-extrabold leading-tight text-blood-900 sm:text-6xl">Two voices from Nepal who dared to break the silence</h1>
        <p class="mx-auto mt-6 max-w-2xl text-xl leading-relaxed text-ink/80">
            Welcome to Period Kaa Kura, a Nepali podcast by Priyanka Budhathoki and Shristi Kafle, building a Nepal where menstruation is discussed with dignity and respect.
        </p>
    </section>

    {{-- Hosts --}}
    <section class="mx-auto max-w-6xl px-4 pb-20 sm:px-6">
        <div class="grid gap-8 md:grid-cols-2">
            @foreach ($team as $member)
                <div class="rounded-[2rem] bg-white p-8 ring-1 ring-blood-900/5">
                    <div class="flex items-center gap-5">
                        @if ($member->photo)
                            <img src="{{ Storage::disk('public')->url($member->photo) }}" alt="{{ $member->name }}" width="96" height="96" class="size-24 shrink-0 rounded-full object-cover ring-4 ring-blood-100">
                        @else
                            <div class="flex size-24 shrink-0 items-center justify-center rounded-full bg-blood-100 font-display text-4xl font-bold text-blood-700" aria-hidden="true">{{ Str::substr($member->name, 0, 1) }}</div>
                        @endif
                        <div>
                            <h2 class="font-display text-2xl font-bold">{{ $member->name }}</h2>
                            @if ($member->role)
                                <p class="font-semibold text-blood-700">{{ $member->role }}</p>
                            @endif
                        </div>
                    </div>
                    <p class="mt-5 leading-relaxed text-ink/80">{{ $member->bio }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Story --}}
    <section class="bg-white">
        <div class="mx-auto grid max-w-6xl gap-x-16 gap-y-14 px-4 py-20 sm:px-6 lg:grid-cols-2">
            <div>
                <h2 class="font-display text-3xl font-bold text-blood-900">Our story</h2>
                <div class="mt-4 space-y-4 text-lg leading-relaxed text-ink/80">
                    <p>Our story is rooted in a shared experience: the isolation and confusion we felt as young girls when society labelled us "impure" just because we had our periods.</p>
                    <p>With just a small microphone, a laptop and our mobile phones, we took our first steps towards making this vision a reality. We are not just co-hosts but friends and sisters with a shared passion and vision for dignified menstruation.</p>
                </div>
            </div>
            <div>
                <h2 class="font-display text-3xl font-bold text-blood-900">Why Period Kaa Kura?</h2>
                <div class="mt-4 space-y-4 text-lg leading-relaxed text-ink/80">
                    <p>We understand the pain and shame that often accompany menstruation in our society, and we're here to change that narrative. We believe in the power of stories. We started this podcast to create a safe space for these voices to be heard, for taboos to be shattered, and for stigma to be replaced with understanding.</p>
                    <p>What began as a small idea has grown into a vibrant community of people dedicated to promoting menstrual health, breaking taboos and advocating for dignified menstruation.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Goal --}}
    <section class="bg-blood-900 text-white">
        <div class="mx-auto max-w-4xl px-4 py-20 text-center sm:px-6">
            <h2 class="font-semibold uppercase tracking-widest text-marigold">Our goal</h2>
            <p class="mt-6 font-display text-3xl font-bold leading-snug sm:text-4xl">
                A Nepal where menstruation is no longer a source of shame or secrecy, but a topic discussed with dignity and respect.
            </p>
            <p class="mx-auto mt-6 max-w-2xl text-lg text-blood-100/80">We provide accurate information, support and empowerment to all menstruators, regardless of their gender or background.</p>
        </div>
    </section>

    {{-- What we do --}}
    <section class="mx-auto max-w-6xl px-4 py-20 sm:px-6">
        <h2 class="font-display text-4xl font-bold text-blood-900">What we do</h2>
        <p class="mt-3 max-w-3xl text-lg text-ink/75">Period Kaa Kura isn't just a podcast; it's a movement.</p>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
            <div class="rounded-2xl bg-white p-7 ring-1 ring-blood-900/5">
                <h3 class="text-xl font-bold">Candid conversations</h3>
                <p class="mt-3 leading-relaxed text-ink/75">Regular episodes where menstruators, including women, girls, non-binary, queer and trans people, share their stories and experiences.</p>
            </div>
            <div class="rounded-2xl bg-white p-7 ring-1 ring-blood-900/5">
                <h3 class="text-xl font-bold">Beyond the myths</h3>
                <p class="mt-3 leading-relaxed text-ink/75">From debunking myths to the intersectionality of menstruation with caste, class, religion and sexuality.</p>
            </div>
            <div class="rounded-2xl bg-white p-7 ring-1 ring-blood-900/5">
                <h3 class="text-xl font-bold">Working together</h3>
                <p class="mt-3 leading-relaxed text-ink/75">We collaborate with local activists, organisations and movements to create a united front against menstrual discrimination.</p>
            </div>
        </div>
    </section>

    @if ($videos->isNotEmpty())
        <section class="bg-sand">
            <div class="mx-auto max-w-6xl px-4 py-20 sm:px-6">
                <h2 class="font-display text-4xl font-bold text-blood-900">Watch Period Kaa Kura</h2>
                <div class="mt-10 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($videos as $video)
                        <x-youtube :id="$video->youtube_id" :title="$video->title" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($press->isNotEmpty())
        <section id="press" class="mx-auto max-w-6xl scroll-mt-20 px-4 py-20 sm:px-6">
            <h2 class="font-display text-4xl font-bold text-blood-900">In the news</h2>
            <ul class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($press as $mention)
                    <li>
                        <a href="{{ $mention->url }}" class="group flex h-full flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-blood-900/5 transition hover:-translate-y-0.5 hover:shadow-lg">
                            @if ($mention->image)
                                <img src="{{ Storage::disk('public')->url($mention->image) }}" alt="" loading="lazy" class="aspect-[3/2] w-full bg-sand object-cover object-top">
                            @endif
                            <div class="flex flex-1 flex-col p-6">
                                <p class="text-sm font-bold uppercase tracking-wider text-blood-700">{{ $mention->outlet }}</p>
                                <p class="mt-2 text-lg font-semibold leading-snug">{{ $mention->title }}</p>
                                <p class="mt-auto pt-4 text-sm font-semibold text-ink/50 group-hover:text-blood-700">Read the story →</p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif

    {{-- Support --}}
    <section class="mx-auto max-w-6xl px-4 pb-20 sm:px-6">
        <div class="rounded-[2rem] bg-blood-700 p-10 text-white md:p-14">
            <h2 class="font-display text-3xl font-bold sm:text-4xl">Powered by our own funds</h2>
            <p class="mt-4 max-w-3xl text-lg leading-relaxed text-blood-50/90">The podcast equipment, recording sessions and production have all been funded by us personally. To keep Period Kaa Kura sustainable and growing, we need your support to reach more people, produce better content and further our advocacy for menstrual health rights.</p>
            <a href="{{ route('support') }}" class="mt-8 inline-block rounded-full bg-marigold px-8 py-3.5 text-lg font-bold text-blood-900 transition hover:bg-white">Donate to keep the podcast running</a>
        </div>
    </section>
</x-layout>
