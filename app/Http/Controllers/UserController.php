<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{

    public function show(User $user){
        $user->load('favoriteGame');

        return Inertia::render('Users/show',[
            'user' => $user,
        ]);
    }

    public function update(Request $request,User $user){


       if (auth()->id() !== $user->id && !auth()->user()->hasRole('admin')) {
            abort(403, 'Unauthorized action.');
        }



        $data = $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|string',
            'description' => 'nullable|string',
            'favorite_game_id' => 'nullable|exists:games,id',
        ]);

        $user->update($data);

        return redirect()->back()->with('success', 'User updated successfully.');
    }
    

    //admin
    public function index(){
        $users = User::all();
        return Inertia::render('Users/index',[
            'users' => $users,
        ]);
    }
    public function destroy(User $user){

        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

}
