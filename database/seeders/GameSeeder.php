<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        Game::firstOrCreate([
            'title' => 'The Legend of Zelda: Breath of the Wild',
            'description' => 'An open-world action-adventure game set in the vast kingdom of Hyrule.',
            'release_date' => '2017-03-03',
            'developer' => 'Nintendo',
            'publisher' => 'Nintendo',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co3p2d.webp',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'The Witcher 3: Wild Hunt',
            'description' => 'An open-world RPG that follows Geralt of Rivia on his quest to find his adopted daughter.',
            'release_date' => '2015-05-19',
            'developer' => 'CD Projekt Red',
            'publisher' => 'CD Projekt',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co1wyy.webp',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Red Dead Redemption 2',
            'description' => 'An epic tale of life in America at the dawn of the modern age.',  
            'release_date' => '2018-10-26',
            'developer' => 'Rockstar Games',
            'publisher' => 'Rockstar Games',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co1q1f.webp',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Control',
            'description' => 'A supernatural third-person action-adventure game set in a mysterious government building.',
            'release_date' => '2019-08-27',
            'developer' => 'Remedy Entertainment',
            'publisher' => '505 Games',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co2ewb.webp',
            'rating' => 9,
        ]);

        Game::firstOrCreate([
            'title' => 'Cyberpunk 2077',
            'description' => 'An open-world RPG set in the dystopian Night City, where players assume the role of V, a customizable mercenary.',
            'release_date' => '2020-12-10',
            'developer' => 'CD Projekt Red',
            'publisher' => 'CD Projekt',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co7iy1.webp',
            'rating' => 10,
        ]);
    }
}
