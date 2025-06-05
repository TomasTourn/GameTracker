<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            'RPG',
            'Action',
            'Adventure',
            'Simulation',
            'Strategy',
            'Sports',
            'Puzzle',
            'Horror',
            'Racing',
            'Platformer',
            'Fighting',
            'Shooter',
            'Supernatural',
            'Open World',
            'Western',
            'Sci-Fi',
            'Multiplayer Online Battle Arena (MOBA)',
            'Massively Multiplayer Online (MMO)',
        ];

        foreach ($genres as $genre) {
            Genre::firstOrCreate(['name' => $genre]);
        }
    }
}
