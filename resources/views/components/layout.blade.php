@props([
    'title' => null,
    'description' => 'A Nepali podcast breaking the rooted silence on menstruation and debunking myths, taboos and stigma. Hosted by Shristi Kafle and Priyanka Budhathoki.',
    'image' => null,
    'type' => 'website',
])

@php
    $fullTitle = $title ? "{$title} · Period Kaa Kura" : 'Period Kaa Kura · Nepali podcast on menstruation';
    $image ??= asset('images/logo.png');
    $nav = [
        'episodes.index' => 'Episodes',
        'about' => 'About',
        'support' => 'Support us',
        'contact' => 'Contact',
    ];
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $fullTitle }}</title>
    <meta name="description" content="{{ $description }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Period Kaa Kura">
    <meta property="og:type" content="{{ $type }}">
    <meta property="og:title" content="{{ $fullTitle }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $image }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@PeriodKaaKura">

    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <link rel="alternate" type="application/rss+xml" title="Period Kaa Kura" href="{{ config('podcast.feed_url') }}">

    @fonts

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{ $head ?? '' }}
</head>
<body class="flex min-h-screen flex-col">
    <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-50 focus:rounded focus:bg-white focus:px-4 focus:py-2">Skip to content</a>

    <header class="sticky top-0 z-40 border-b border-blood-900/10 bg-cream/90 backdrop-blur">
        <nav class="mx-auto flex max-w-6xl items-center justify-between gap-6 px-4 py-3 sm:px-6" aria-label="Main">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="" width="44" height="35" class="h-9 w-auto">
                <span class="font-display text-xl font-bold text-blood-800">Period Kaa Kura</span>
            </a>

            <div class="hidden items-center gap-8 md:flex">
                @foreach ($nav as $route => $label)
                    <a href="{{ route($route) }}" @class([
                        'font-medium transition hover:text-blood-700',
                        'text-blood-700' => request()->routeIs($route.'*'),
                    ]) @if (request()->routeIs($route.'*')) aria-current="page" @endif>{{ $label }}</a>
                @endforeach
                <a href="{{ route('episodes.index') }}" class="rounded-full bg-blood-700 px-5 py-2 font-semibold text-white transition hover:bg-blood-800">Listen now</a>
            </div>

            <button type="button" class="rounded p-2 md:hidden" data-menu-toggle aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/></svg>
            </button>
        </nav>
        <div id="mobile-menu" class="hidden border-t border-blood-900/10 px-4 pb-4 md:hidden">
            @foreach ($nav as $route => $label)
                <a href="{{ route($route) }}" class="block py-3 text-lg font-medium">{{ $label }}</a>
            @endforeach
        </div>
    </header>

    <main id="main" class="flex-1">
        {{ $slot }}
    </main>

    <footer class="bg-blood-900 text-blood-50">
        <div class="mx-auto grid max-w-6xl gap-10 px-4 py-14 sm:px-6 md:grid-cols-3">
            <div>
                <p class="font-display text-2xl font-bold">Period Kaa Kura</p>
                <p class="mt-3 max-w-xs text-blood-100/80">A space for menstruators to speak on the silenced subject: period. Since 2020.</p>
            </div>
            <div>
                <p class="font-semibold uppercase tracking-wider text-marigold">Listen on</p>
                <ul class="mt-3 space-y-2">
                    <li><a class="hover:underline" href="{{ config('podcast.links.spotify') }}">Spotify</a></li>
                    <li><a class="hover:underline" href="{{ config('podcast.links.apple') }}">Apple Podcasts</a></li>
                    <li><a class="hover:underline" href="{{ config('podcast.links.youtube') }}">YouTube</a></li>
                    <li><a class="hover:underline" href="{{ config('podcast.links.soundcloud') }}">SoundCloud</a></li>
                </ul>
                <a class="mt-5 inline-block rounded-full bg-marigold px-5 py-2 font-bold text-blood-900 hover:bg-white" href="{{ route('support') }}">Support us</a>
            </div>
            <div>
                <p class="font-semibold uppercase tracking-wider text-marigold">Get in touch</p>
                <p class="mt-3 text-blood-100/80">For collaborations, interviews and partnerships:</p>
                <a class="mt-1 inline-block font-semibold hover:underline" href="{{ route('contact') }}">Send us a message</a>
                <a class="block text-blood-100/80 hover:underline" href="mailto:{{ config('podcast.email') }}">{{ config('podcast.email') }}</a>
                <ul class="mt-4 flex gap-4">
                    <li><a class="hover:underline" href="{{ config('podcast.links.instagram') }}">Instagram</a></li>
                    <li><a class="hover:underline" href="{{ config('podcast.links.facebook') }}">Facebook</a></li>
                    <li><a class="hover:underline" href="{{ config('podcast.links.twitter') }}">X</a></li>
                </ul>
            </div>
        </div>
        <p class="border-t border-white/10 py-5 text-center text-sm text-blood-100/60">© {{ now()->year }} Period Kaa Kura. All rights reserved.</p>
    </footer>
</body>
</html>
