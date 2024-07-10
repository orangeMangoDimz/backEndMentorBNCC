<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Category::create([
        //     'name' => 'Desert'
        // ]);
        // Category::create([
        //     'name' => 'Breakfast'
        // ]);
        // Category::create([
        //     'name' => 'Lunch'
        // ]);

        for ($i = 0; $i < 15; $i++)
        {
            Food::create([
                'category_id' => rand(1, 3),
                'name' => fake()->word(),
                'description' => fake()->paragraph(5),
                'price' => fake()->randomNumber()
            ]);
        }
    }
}
