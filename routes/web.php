<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/support', [PageController::class, 'support'])->name('support');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->middleware('throttle:5,10')->name('contact.store');

Route::get('/episodes', [EpisodeController::class, 'index'])->name('episodes.index');
Route::get('/episodes/{episode}', [EpisodeController::class, 'show'])->name('episodes.show');

// Old WordPress URLs.
Route::redirect('/feed', config('podcast.feed_url'), 301);
Route::redirect('/sections/episodes', '/episodes', 301);
Route::redirect('/sections/{section}', '/', 301);
