<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\PressMention;
use App\Models\TeamMember;
use App\Models\Video;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $episodes = Episode::published()->latestFirst();

        return view('pages.home', [
            'latest' => (clone $episodes)->first(),
            'recent' => (clone $episodes)->skip(1)->take(6)->get(),
            'featured' => Episode::published()->where('is_featured', true)->latestFirst()->take(3)->get(),
            'videos' => Video::orderBy('sort')->take(3)->get(),
            'press' => PressMention::orderBy('sort')->get(),
            'team' => TeamMember::orderBy('sort')->get(),
            'episodeCount' => Episode::published()->count(),
        ]);
    }

    public function about(): View
    {
        return view('pages.about', [
            'team' => TeamMember::orderBy('sort')->get(),
            'press' => PressMention::orderBy('sort')->get(),
            'videos' => Video::orderBy('sort')->get(),
        ]);
    }

    public function support(): View
    {
        return view('pages.support');
    }
}
