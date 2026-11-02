<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Notifications\ContactMessageReceived;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('pages.contact');
    }

    public function store(Request $request): RedirectResponse
    {
        // Bots fill every field, people never see this one.
        if ($request->filled('website')) {
            return to_route('contact')->with('sent', true);
        }

        $message = ContactMessage::create($request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
        ]));

        Notification::route('mail', config('podcast.email'))->notify(new ContactMessageReceived($message));

        return to_route('contact')->with('sent', true);
    }
}
