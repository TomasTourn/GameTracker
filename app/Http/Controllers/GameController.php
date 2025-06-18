<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Genre;
use App\Models\UserGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $query = Game::with(['genres']);

        if ($request->filled('search')){
            $query->where('title','like',"%{$request->search}%");
        }

        if ($request->filled('genre')){
            $query->whereHas('genres',function($q) use ($request){
                $q->where('genres.id',$request->genre);
            });
        }

        if ($request->filled('rating')){
            $query->where('rating','=',$request->rating);
        }

        if ($request->filled('year')){
            $query->whereYear('release_date', $request->year);
        }
   
         $games = $query->get();

        $genres = Genre::all();

        $userGames = UserGame::where('user_id', Auth::id())->get();
        return Inertia::render('games/catalog',[
            'games' => $games,
            'filters' => $request->only(['search', 'genre', 'year', 'rating']),
            'userGames' => $userGames->toArray(),
            'genres'=> $genres->toArray(),
        ]);
    }

    public function create()
    {
        return Inertia::render('admin/games/Create', [
            'genres' => \App\Models\Genre::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'release_date' => 'nullable|date',
            'developer' => 'nullable|string|max:255',
            'publisher' => 'nullable|string|max:255',
            'rating' => 'required|numeric|min:0|max:10',
            'image' => 'required|url',
            'genres' => 'array',
            'genres.*' => 'exists:genres,id',//valida q los id existan
        ]);

        $game = Game::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'release_date' => $validated['release_date'] ?? null,
            'developer' => $validated['developer'] ?? null,
            'publisher' => $validated['publisher'] ?? null,
            'rating' => $validated['rating'],
            'image' => $validated['image'],
        ]);

        $game->genres()->sync($validated['genres'] ?? []);

        return redirect()->route('admin.games.index')->with('success', 'Game created successfully.');

    }

    public function show(string $id)
    {
        $game = Game::with('genres')->findOrFail($id);
        $userGame = UserGame::where('game_id', $id)
           ->where('user_id', Auth::id())
           ->get();
        return Inertia::render('games/show', [
            'game' => $game,
            'userGame' => $userGame
        ]);
    }

    public function edit(string $id)
    {
        $game = Game::with('genres')->findOrFail($id);

        return Inertia::render('admin/games/Edit', [
            'game' => $game,
            'genres' => \App\Models\Genre::all()
        ]);
    }


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'release_date' => 'nullable|date',
            'developer' => 'nullable|date',
            'publisher' => 'nullable|string|max:255',
            'rating' => 'required|numeric|min:0|max:10',
            'image' => 'required|url',
            'genres' => 'array',
            'genres.*' => 'exists:genres,id',
        ]);

        $game = Game::findOrFail($id);

        $game->update([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'release_date' => $validated['release_date'] ?? null,
            'developer' => $validated['developer'] ?? null,
            'publisher' => $validated['publisher'] ?? null,
            'rating' => $validated['rating'],
            'image' => $validated['image'],
        ]);

        $game->genres()->sync($validated['genres'] ?? []);

        return redirect()->route('admin.games.index')->with('success', 'Game updated successfully.');

    }

    public function destroy(string $id)
    {
        $game = Game::findOrFail($id);
        $game->genres()->detach();
        $game->delete();

        return redirect()->route('admin.games.index')->with('success', 'Game deleted successfully.');
    }
}
