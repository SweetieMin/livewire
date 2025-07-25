<?php

use App\Livewire\Notes;

use App\Livewire\Back\Management\Location\Locations;
use App\Livewire\Back\Management\Season\Seasons;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'preventBackHistory'])
    ->name('dashboard');

Route::middleware(['auth', 'preventBackHistory'])->group(function () {

    Route::get('notes', Notes::class)->name('notes');

    Route::get('locations', Locations::class)->name('locations');

    Route::get('seasons', Seasons::class)->name('seasons');

    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';
