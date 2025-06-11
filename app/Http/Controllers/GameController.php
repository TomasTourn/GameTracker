<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::with('genres')->latest()->get();

        return Inertia::render('admin/games/Index',[
            'games' => $games
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

        return Inertia::render('admin/games/Show', [
            'game' => $game
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
