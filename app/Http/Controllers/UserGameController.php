<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserGameController extends Controller
{
    
    public function index()
    {
        $userGames = UserGame::where('user_id',Auth::id())
        ->withoutWishlist()
        ->with('game')->get();

        return response()->json($userGames);
    }

    public function full()
    {
        $userGames = UserGame::where('user_id', Auth::id())
            ->with('game')
            ->get();

        return response()->json($userGames);
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'game_id' => 'required|exists:games,id',
            'status' => 'required|string',
            'hours_played' => 'nullable|integer|min:0',
            'progress' => 'nullable|integer|min:0|max:100',
        ]);

        $data['user_id'] = Auth::id();

        $userGame = UserGame::updateOrCreate(
            ['user_id' => $data['user_id'], 'game_id' => $data['game_id']],
            $data
        );
        return response()->json($userGame, 201);
    }

    public function update(Request $request, $id)
    {
        $userGame = UserGame::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $data = $request->validate([
            'status' => 'sometimes|string',
            'hours_played' => 'sometimes|integer|min:0',
            'progress' => 'sometimes|numeric|min:0|max:100',
        ]);

        $userGame->update($data);

        return response()->json($userGame);
    }


    public function destroy($id)
    {
        $userGame = UserGame::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $userGame->delete();

        return response()->json(null, 204);
    }
}
