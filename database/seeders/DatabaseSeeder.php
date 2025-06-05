<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(GameGenreSeeder::class);
        $this->call(UserGameSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(reviewUserLikeSeeder::class);
        $this->call(EventSeeder::class);
    }
}
