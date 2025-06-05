<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    
    public function redirect(){
        
        return Socialite::driver('google')->with(['prompt' => 'select_account'])
            ->redirect();
    }

    public function callback(){

        $googleUser = Socialite::driver('google')->user();

        $user = User::firstOrCreate(
            ['email' => $googleUser->getEmail()],
            ['name' => $googleUser->getName(),
            'password' => bcrypt(str()->random(16)),
            'email_verified_at' => now(),
            ]
        );

        Auth::login($user);
        return redirect()->route('dashboard');
    }
}
