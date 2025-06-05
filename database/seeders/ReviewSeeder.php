<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 1,
            'rating' => 10,
            'comment' => 'Incredible game! The open world is breathtaking and the story is captivating.',
        ]);
        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 2,
            'rating' => 9,
            'comment' => 'Great RPG with a rich story and engaging characters. A must-play for fans of the genre.',
        ]);
        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 3,
            'rating' => 5,
            'comment' => 'A masterpiece of storytelling and world-building. The graphics are stunning!',
        ]);
        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 4,
            'rating' => 8,
            'comment' => 'Interesting concept but the gameplay feels a bit repetitive after a while.',
        ]);
        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 5,
            'rating' => 10,
            'comment' => 'Best video game I have ever played! The world is so immersive and the characters are well-developed.',
        ]);
    }
}
