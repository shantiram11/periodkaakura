<x-layout title="All episodes" description="Every episode of Period Kaa Kura, the Nepali podcast on menstruation, menstrual health and dignity. Search by topic or keyword.">
    <section class="bg-blood-900 text-white">
        <div class="mx-auto max-w-6xl px-4 py-14 sm:px-6">
            <h1 class="font-display text-5xl font-bold">Episodes</h1>
            <p class="mt-3 text-lg text-blood-100/80">Conversations with doctors, activists, survivors and everyday menstruators.</p>

            <form method="GET" action="{{ route('episodes.index') }}" class="mt-8 flex max-w-xl gap-2" role="search">
                @if (request('topic'))
                    <input type="hidden" name="topic" value="{{ request('topic') }}">
                @endif
                <label for="q" class="sr-only">Search episodes</label>
                <input id="q" type="search" name="q" value="{{ request('q') }}" placeholder="Search episodes…" class="w-full rounded-full border-0 bg-white px-5 py-3 text-ink placeholder:text-ink/40">
                <button class="rounded-full bg-marigold px-6 font-bold text-blood-900 hover:bg-white">Search</button>
            </form>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-12 sm:px-6">
        <nav aria-label="Filter by topic" class="-mx-4 overflow-x-auto px-4">
            <ul class="flex gap-2 pb-2">
                <li>
                    <a href="{{ route('episodes.index', array_filter(['q' => request('q')])) }}" @class([
                        'inline-block whitespace-nowrap rounded-full px-4 py-2 text-sm font-semibold ring-1 ring-blood-900/15',
                        'bg-blood-700 text-white ring-blood-700' => ! request('topic'),
                        'bg-white hover:bg-blood-50' => request('topic'),
                    ])>All</a>
                </li>
                @foreach ($topics as $topic)
                    <li>
                        <a href="{{ route('episodes.index', array_filter(['topic' => $topic, 'q' => request('q')])) }}" @class([
                            'inline-block whitespace-nowrap rounded-full px-4 py-2 text-sm font-semibold ring-1 ring-blood-900/15',
                            'bg-blood-700 text-white ring-blood-700' => request('topic') === $topic,
                            'bg-white hover:bg-blood-50' => request('topic') !== $topic,
                        ])>{{ $topic }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>

        @if ($episodes->isEmpty())
            <div class="py-24 text-center">
                <p class="text-xl font-semibold">No episodes match that yet.</p>
                <a href="{{ route('episodes.index') }}" class="mt-3 inline-block font-semibold text-blood-700 hover:underline">Clear filters</a>
            </div>
        @else
            <p class="mt-6 text-ink/60">{{ $episodes->total() }} {{ Str::plural('episode', $episodes->total()) }}</p>
            <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($episodes as $episode)
                    <x-episode-card :episode="$episode" />
                @endforeach
            </div>
            <div class="mt-12">{{ $episodes->links() }}</div>
        @endif
    </section>
</x-layout>
