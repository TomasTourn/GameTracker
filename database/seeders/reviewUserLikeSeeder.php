<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class reviewUserLikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $review1 = Review::find(1);
        $review2 = Review::find(2);

        $review1->likedByUsers()->attach(1);
        $review1->likedByUsers()->attach(2);
        $review2->likedByUsers()->attach(1);
    }
}
