<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
     public function index()
    {
        return response()->json(Genre::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:genres,name',
            'description' => 'nullable|string',
        ]);

        $genre = Genre::create($data);

        return response()->json($genre, 201);
    }

    public function show(Genre $genre)
    {
        return response()->json($genre);
    }

    public function update(Request $request, Genre $genre)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:genres,name,' . $genre->id,
            'description' => 'nullable|string',
        ]);

        $genre->update($data);

        return response()->json($genre);
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();

        return response()->json(null, 204);
    }
}
