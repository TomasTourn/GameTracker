<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Request $request){
        
        $filter = $request->query('filter', 'popular');

        $query = Review::with('user', 'game');

        if ($filter === 'popular'){
            $query->withCount('likedByUsers')->orderBy('liked_by_users_count', 'desc');
        } elseif ($filter === 'recent') {
            $query->latest();
        } elseif ($filter === 'oldest') {
            $query->oldest();
        }

        $reviews = $query->paginate(10);

        return response()->json($reviews);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'game_id' => 'required|exists:games,id',
            'rating' => 'required|numeric|min:0|max:10',
            'comment' => 'nullable|string|max:1000',
        ]);

        $review = new Review($validated);
        $review->user_id = auth()->id();
        $review->save();

        return response()->json($review, 201);
    }

    public function update(Request $request, $id){
        $review = Review::findOrFail($id);
        //testear si es con parentesis o sin parentesis id()
        if ($review->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $validated = $request->validate([
            'rating' => 'required|numeric|min:0|max:10',
            'comment' => 'nullable|string|max:1000',
        ]);

        $review->update($validated);

        return response()->json($review);
    }

    public function destroy($id){
        $review = Review::findOrFail($id);

        if ($review->user_id !== auth()->id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $review->delete();

        return response()->json(['message' => 'Review deleted successfully']);
    }

}
