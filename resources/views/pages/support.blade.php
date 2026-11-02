<x-layout title="Support us" description="Period Kaa Kura is an independent, listener-supported initiative. Help us keep the conversation about menstruation going across Nepal.">
    <section class="bg-blood-900 text-white">
        <div class="mx-auto max-w-4xl px-4 py-20 text-center sm:px-6">
            <h1 class="font-display text-5xl font-extrabold sm:text-6xl">Keep the conversation going</h1>
            <p class="mx-auto mt-6 max-w-2xl text-xl text-blood-100/85">
                Period Kaa Kura is a personal initiative of its creators. Every contribution helps us travel to new communities, record more stories and keep the podcast free for everyone.
            </p>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 pt-20 sm:px-6">
        <h2 class="font-display text-4xl font-bold text-blood-900">Donate</h2>
        <div class="mt-8 grid gap-6 md:grid-cols-2">
            <div class="flex flex-col rounded-2xl bg-white p-8 ring-1 ring-blood-900/10">
                <p class="text-sm font-bold uppercase tracking-wider text-blood-700">In Nepal</p>
                <h3 class="mt-2 font-display text-2xl font-bold">Scan with eSewa</h3>
                <p class="mt-3 text-ink/75">Open the eSewa app, tap Scan, and point your camera at the code.</p>
                <img src="{{ asset('images/esewa-qr.png') }}" alt="eSewa QR code for donating to Period Kaa Kura" width="240" height="240" class="mt-6 size-60 self-center">
                <a href="{{ asset('images/esewa-qr.png') }}" download="period-kaa-kura-esewa-qr.png" class="mt-4 self-center text-sm font-semibold text-blood-700 hover:underline">Download QR code</a>
            </div>
            <div class="flex flex-col rounded-2xl bg-white p-8 ring-1 ring-blood-900/10">
                <p class="text-sm font-bold uppercase tracking-wider text-blood-700">From anywhere</p>
                <h3 class="mt-2 font-display text-2xl font-bold">Become a patron</h3>
                <p class="mt-3 text-ink/75">Support us monthly on Patreon with an international card and be part of the journey.</p>
                <div class="mt-auto pt-8">
                    <a href="{{ config('podcast.links.patreon') }}" class="inline-block rounded-full bg-blood-700 px-7 py-3 font-semibold text-white hover:bg-blood-800">Support us on Patreon</a>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto grid max-w-6xl gap-6 px-4 py-20 sm:px-6 md:grid-cols-2">
        <div class="rounded-2xl bg-white p-8 ring-1 ring-blood-900/10">
            <h2 class="font-display text-2xl font-bold text-blood-900">Collaborate</h2>
            <p class="mt-3 text-ink/75">Organisations, schools and brands working on menstrual health: let's make something together.</p>
            <a href="{{ route('contact') }}" class="mt-6 inline-block rounded-full bg-blood-700 px-6 py-2.5 font-semibold text-white hover:bg-blood-800">Get in touch</a>
        </div>
        <div class="rounded-2xl bg-white p-8 ring-1 ring-blood-900/10">
            <h2 class="font-display text-2xl font-bold text-blood-900">Spread the word</h2>
            <p class="mt-3 text-ink/75">Follow, rate and share an episode with someone who needs to hear it. It costs nothing and helps the most.</p>
            <x-listen-links class="mt-6 text-blood-700" />
        </div>
    </section>
</x-layout>
