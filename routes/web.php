<?php

use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {

    if(Auth::check()){
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
})->name('home');

Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('auth/google/callback', [GoogleController::class, 'callback'])->name('google.callback');

Route::get('locale/{locale}',function ($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('games',GameController::class);
    });
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
