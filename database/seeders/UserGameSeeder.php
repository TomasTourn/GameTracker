<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $user1 = User::find(1);
         $user2 = User::find(2);

         $game1 = Game::find(1);
         $game2 = Game::find(2);

        $user1->games()->attach($game1->id, [
            'status' => 'playing',
            'hours_played' => 10,
            'progress' => 50,
        ]);

        $user1->games()->attach($game2->id, [
            'status' => 'completed',
            'hours_played' => 40,
            'progress' => 100,
        ]);

        $user2->games()->attach($game1->id, [
            'status' => 'abandoned',
            'hours_played' => 5,
            'progress' => 10,
        ]);
    }
}
