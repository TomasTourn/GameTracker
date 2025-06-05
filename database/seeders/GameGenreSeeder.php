<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zelda = Game::where('title', 'The Legend of Zelda: Breath of the Wild')->first();
        $witcher = Game::where('title', 'The Witcher 3: Wild Hunt')->first();
        $rdr2 = Game::where('title', 'Red Dead Redemption 2')->first();
        $control = Game::where('title', 'Control')->first();
        $cyberpunk = Game::where('title', 'Cyberpunk 2077')->first();


        $rpg = Genre::where('name', 'RPG')->first();
        $adventure = Genre::where('name', 'Adventure')->first();
        $action = Genre::where('name', 'Action')->first();
        $openWorld = Genre::where('name', 'Open World')->first();
        $supernatural = Genre::where('name', 'Supernatural')->first();
        $western = Genre::where('name', 'Western')->first();
        $sciFi = Genre::where('name', 'Sci-Fi')->first();


        $zelda->genres()->attach([$adventure->id, $openWorld->id, $action->id]);
        $witcher->genres()->attach([$rpg->id, $openWorld->id, $action->id, $adventure->id]);
        $rdr2->genres()->attach([$western->id, $openWorld->id, $action->id]);
        $control->genres()->attach([$supernatural->id, $action->id]);
        $cyberpunk->genres()->attach([$rpg->id, $openWorld->id, $sciFi->id, $action->id]);

    }
}
