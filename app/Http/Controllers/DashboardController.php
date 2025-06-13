<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Review;
use App\Models\User;
use App\Models\UserGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
        public function index(){

        $user = Auth::user();
        $favoriteGameId = $user->favorite_game_id;    

        $ratingsDistribution = Review::where('user_id', Auth::id())
            ->selectRaw('rating, COUNT(*) as count')
            ->whereNotNull('rating')
            ->groupBy('rating')
            ->orderBy('rating')
            ->pluck('count', 'rating')
            ->toArray();

        $ratings = [];
            for ($i = 0; $i <= 10; $i++) {
                $ratings[$i] = $ratingsDistribution[$i] ?? 0;
            }

        $userGames = UserGame::where('user_id',Auth::id())->get()->keyBy('game_id');

        $reviewController = new ReviewController();
        $reviews = $reviewController->index(
        request()->merge(['filter' => 'popular']), 
        true);


        $stats = [
            'totalHours'=> UserGame::where('user_id',Auth::id())->sum('hours_played'),
            'totalGames'=> UserGame::where('user_id',Auth::id())->withoutWishlist()->count(),
            'totalWishlist'=> UserGame::where('user_id',Auth::id())->where('status','Wishlist')->count(),
            'progressAvg'=> UserGame::where('user_id',Auth::id())->whereIn('status',['completed','playing'])->avg('progress'),
            'totalPlayed'=> UserGame::where('user_id',Auth::id())->where('status','completed')->count(),
            'totalPlaying'=> UserGame::where('user_id',Auth::id())->where('status','playing')->count(),
            'totalReviews'=> Review::where('user_id',Auth::id())->count(),
            'favoriteGame' => Game::find($favoriteGameId),
            'ratingsDistribution' => array_values($ratings),
        ];

        $recentGames = Game::orderBy('release_date', 'desc')->take(10)->get();
        $topRatedGames = Game::whereNotNull('rating')->orderByDesc('rating')->take(10)->get();
        
        logger()->info('Dashboard stats', $stats);


        return Inertia::render('dashboard',[
            'userStats' => $stats,
            'recentGames' => $recentGames,
            'topRatedGames' => $topRatedGames,
            'userGames' => $userGames,
            'reviews' => $reviews,
        ]);
    }
}
