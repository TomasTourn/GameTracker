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

        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 6,
            'rating' => 9,
            'comment' => 'Excellent remake that improves the original in every way. Tight gameplay and intense atmosphere.',
        ]);

        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 7,
            'rating' => 8,
            'comment' => 'Classic survival horror experience with modern visuals. Still holds up after all these years.',
        ]);

        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 8,
            'rating' => 7,
            'comment' => 'Good action but feels a bit short and less impactful than the other Resident Evil titles.',
        ]);

        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 9,
            'rating' => 9,
            'comment' => 'Creepy atmosphere and solid gameplay. A fresh take on the franchise.',
        ]);

        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 10,
            'rating' => 6,
            'comment' => 'Interesting concept but weak execution. Feels more like a filler than a full title.',
        ]);

        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 11,
            'rating' => 9,
            'comment' => 'Gorgeous visuals and strong horror elements. One of the better modern entries.',
        ]);

        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 12,
            'rating' => 10,
            'comment' => 'Masterpiece. The combat, story, and visuals are all top-tier.',
        ]);

        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 13,
            'rating' => 8,
            'comment' => 'Challenging but rewarding. Not for the faint of heart.',
        ]);

        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 14,
            'rating' => 10,
            'comment' => 'A true RPG classic. The modding community keeps it alive.',
        ]);

        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 15,
            'rating' => 9,
            'comment' => 'Iconic and chaotic. Defined a generation of open-world games.',
        ]);

        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 16,
            'rating' => 8,
            'comment' => 'Fast, fun, and brutally hard. Excellent roguelike.',
        ]);

        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 17,
            'rating' => 9,
            'comment' => 'Over-the-top action and style. A joy to play.',
        ]);

        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 18,
            'rating' => 10,
            'comment' => 'Ultimate DBZ nostalgia trip. Still insanely fun.',
        ]);

        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 19,
            'rating' => 8,
            'comment' => 'Slick and stylish combat. Great fun if you love action.',
        ]);

        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 20,
            'rating' => 7,
            'comment' => 'Ambitious but can feel empty without friends to play with.',
        ]);

        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 21,
            'rating' => 10,
            'comment' => 'Emotionally powerful and unforgettable. A storytelling benchmark.',
        ]);

        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 22,
            'rating' => 9,
            'comment' => 'Bold and polarizing sequel. Narrative takes risks and mostly succeeds.',
        ]);

        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 23,
            'rating' => 8,
            'comment' => 'Pure arcade mayhem. One of the best destruction-focused racers.',
        ]);

        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 24,
            'rating' => 9,
            'comment' => 'Gorgeous visuals and a rich world to explore. Combat is satisfying too.',
        ]);

        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 25,
            'rating' => 8,
            'comment' => 'Atmospheric thriller with great storytelling. Combat could be tighter.',
        ]);

        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 26,
            'rating' => 7,
            'comment' => 'Addictive and chaotic. Very original, but not for everyone.',
        ]);

        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 27,
            'rating' => 9,
            'comment' => 'Tough but incredibly rewarding. One of the best action games out there.',
        ]);

        Review::firstOrCreate([
            'user_id' => 1,
            'game_id' => 28,
            'rating' => 8,
            'comment' => 'Great remake with intense horror and upgraded gameplay.',
        ]);

        Review::firstOrCreate([
            'user_id' => 2,
            'game_id' => 29,
            'rating' => 7,
            'comment' => 'Classic hack-and-slash. Still fun, but shows its age a bit.',
        ]);


    }
}
