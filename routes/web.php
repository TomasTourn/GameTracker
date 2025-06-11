<?php


use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserGameController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//default
Route::get('/', function () {

    if(Auth::check()){
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
})->name('dashboard');

//google auth
Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('auth/google/callback', [GoogleController::class, 'callback'])->name('google.callback');

//translation
Route::get('locale/{locale}',function ($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
});

//all verified routes
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard',[DashboardController::class, 'index'])
    ->name('dashboard');

    //admin routes
    Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('games',GameController::class);

        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

        Route::post('/genres', [GenreController::class, 'store'])->name('genres.store');
        Route::put('/genres/{genre}', [GenreController::class, 'update'])->name('genres.update');
        Route::delete('/genres/{genre}', [GenreController::class, 'destroy'])->name('genres.delete');

        Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
        Route::delete('/events/{event}', [EventController::class, 'delete'])->name('events.delete');
        Route::post('/events', [EventController::class, 'Store'])->name('events.store');
        
        Route::post('/reviews',[ReviewController::class, 'store'])->name('reviews.store');
        Route::put('/reviews/{id}',[ReviewController::class, 'update'])->name('reviews.update');
        Route::delete('/reviews/{id}',[ReviewController::class, 'destroy'])->name('reviews.destroy');
    });

    //game 
    Route::resource('games', GameController::class)
        ->only(['index', 'show']);
    //user game 
    Route::get('/user-games',[UserGameController::class, 'index']);
    Route::get('/user-games/full',[UserGameController::class, 'full']);
    Route::post('/user-games', [UserGameController::class, 'store']);
    Route::put('/user-games/{id}',[UserGameController::class, 'update']);
    Route::delete('/user-games/{id}',[UserGameController::class, 'destroy']);

    //genres
    Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');

    //users
    Route::get('/users/{user}',[UserController::class, 'show'])->name('users.show');
    Route::put('/users/{user}',[UserController::class, 'update'])->name('users.update');

    //Events
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/show-all', [EventController::class, 'showAll'])->name('events.showAll');

    //reviews
    Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
