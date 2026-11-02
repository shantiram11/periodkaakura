<x-layout title="Contact us" description="Get in touch with Period Kaa Kura for collaborations, interviews, partnerships, or to share your story.">
    <section class="mx-auto grid max-w-6xl gap-12 px-4 py-20 sm:px-6 lg:grid-cols-[1fr_1.2fr]">
        <div>
            <p class="font-semibold uppercase tracking-widest text-blood-700">Contact us</p>
            <h1 class="mt-4 font-display text-5xl font-extrabold leading-tight text-blood-900">Let's talk</h1>
            <p class="mt-6 text-xl leading-relaxed text-ink/80">Period Kaa Kura is a personal initiative of its creators. For collaborations, interviews, partnerships, or to share your own story, write to us.</p>
            <p class="mt-8 text-ink/70">Prefer email?</p>
            <a href="mailto:{{ config('podcast.email') }}" class="text-lg font-semibold text-blood-700 hover:underline">{{ config('podcast.email') }}</a>

            <p class="mt-8 text-ink/70">Or find us on</p>
            <ul class="mt-2 flex flex-wrap gap-x-5 gap-y-2 font-semibold text-blood-700">
                <li><a class="hover:underline" href="{{ config('podcast.links.instagram') }}">Instagram</a></li>
                <li><a class="hover:underline" href="{{ config('podcast.links.facebook') }}">Facebook</a></li>
                <li><a class="hover:underline" href="{{ config('podcast.links.twitter') }}">X / Twitter</a></li>
                <li><a class="hover:underline" href="{{ config('podcast.links.youtube') }}">YouTube</a></li>
            </ul>
        </div>

        <div class="rounded-[2rem] bg-white p-8 shadow-sm ring-1 ring-blood-900/10 sm:p-10">
            @if (session('sent'))
                <div role="status" class="py-10 text-center">
                    <p class="font-display text-3xl font-bold text-blood-900">Thank you!</p>
                    <p class="mt-3 text-lg text-ink/75">Your message has reached us. We'll get back to you soon.</p>
                    <a href="{{ route('episodes.index') }}" class="mt-8 inline-block rounded-full bg-blood-700 px-6 py-3 font-semibold text-white hover:bg-blood-800">Listen while you wait</a>
                </div>
            @else
                <form method="POST" action="{{ route('contact.store') }}" class="space-y-6" novalidate>
                    @csrf
                    <div class="hidden" aria-hidden="true">
                        <label for="website">Leave this empty</label>
                        <input id="website" type="text" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="grid gap-6 sm:grid-cols-2">
                        @foreach (['name' => ['Your name', 'text', 'name'], 'email' => ['Your email', 'email', 'email']] as $field => [$label, $type, $autocomplete])
                            <div>
                                <label for="{{ $field }}" class="block font-semibold">{{ $label }}</label>
                                <input id="{{ $field }}" type="{{ $type }}" name="{{ $field }}" value="{{ old($field) }}" autocomplete="{{ $autocomplete }}" required
                                    @error($field) aria-invalid="true" aria-describedby="{{ $field }}-error" @enderror
                                    @class(['mt-2 w-full rounded-xl border-0 bg-cream px-4 py-3 focus:ring-2 focus:ring-blood-700', 'ring-2 ring-blood-600' => $errors->has($field), 'ring-1 ring-blood-900/15' => ! $errors->has($field)])>
                                @error($field)
                                    <p id="{{ $field }}-error" class="mt-2 text-sm font-semibold text-blood-600">{{ $message }}</p>
                                @enderror
                            </div>
                        @endforeach
                    </div>

                    <div>
                        <label for="message" class="block font-semibold">Your message</label>
                        <textarea id="message" name="message" rows="6" required
                            @error('message') aria-invalid="true" aria-describedby="message-error" @enderror
                            @class(['mt-2 w-full rounded-xl border-0 bg-cream px-4 py-3 focus:ring-2 focus:ring-blood-700', 'ring-2 ring-blood-600' => $errors->has('message'), 'ring-1 ring-blood-900/15' => ! $errors->has('message')])>{{ old('message') }}</textarea>
                        @error('message')
                            <p id="message-error" class="mt-2 text-sm font-semibold text-blood-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button class="w-full rounded-full bg-blood-700 px-8 py-4 text-lg font-semibold text-white transition hover:bg-blood-800 sm:w-auto">Send message</button>
                </form>
            @endif
        </div>
    </section>
</x-layout>
