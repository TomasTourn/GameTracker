<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Request $request, $isDashboard = false){
        $filter = $request->query('filter', 'popular');
        
        $query = Review::with([
            'user:id,name',
            'game:id,title,image'
        ]);

        if ($filter === 'popular'){
            $query->withCount('likedByUsers')->orderBy('liked_by_users_count', 'desc');
        } elseif ($filter === 'recent') {
            $query->latest();
        } elseif ($filter === 'oldest') {
            $query->oldest();
        }

        if ($isDashboard) {
            $reviews = $query->take(4)->get();
            return $reviews;
        }

        $reviews = $query->paginate(10);
        return inertia('Reviews/Index',[
            'reviews' => $reviews,
            'filter' => $filter,
        ]);
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

        return redirect()->back()->with('success', 'Review created successfully');
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

        return redirect()->back()->with('success', 'Review updated successfully');
    }

    public function destroy($id){
        $review = Review::findOrFail($id);

        if ($review->user_id !== auth()->id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $review->delete();

        
        return redirect()->back()->with('success', 'Review deleted successfully');
    }

}
