<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EpisodeController extends Controller
{
    public function index(Request $request): View
    {
        $episodes = Episode::published()
            ->latestFirst()
            ->when($request->string('q')->trim()->value(), fn ($query, $search) => $query->where(
                fn ($query) => $query->where('title', 'like', "%{$search}%")->orWhere('description', 'like', "%{$search}%")
            ))
            ->when($request->string('topic')->value(), fn ($query, $topic) => $query->whereJsonContains('topics', $topic))
            ->paginate(12)
            ->withQueryString();

        return view('episodes.index', [
            'episodes' => $episodes,
            'topics' => Episode::TOPICS,
        ]);
    }

    public function show(Episode $episode): View
    {
        abort_unless($episode->published_at?->isPast(), 404);

        return view('episodes.show', [
            'episode' => $episode,
            'previous' => Episode::published()->where('published_at', '<', $episode->published_at)->latestFirst()->first(),
            'next' => Episode::published()->where('published_at', '>', $episode->published_at)->oldest('published_at')->first(),
            'related' => Episode::published()
                ->whereKeyNot($episode->getKey())
                ->when($episode->topics, fn ($query, $topics) => $query->whereJsonContains('topics', $topics[0]))
                ->inRandomOrder()
                ->take(3)
                ->get(),
        ]);
    }
}
