<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Food;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed the user
        User::create([
            "name" => "user",
            "email" => "user@gmail.com",
            "password" => "user123"
        ]);
        User::create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => "admin123"
        ]);

        // Seed the categories
        Category::create([
            'name' => 'Buah dan Sayur'
        ]);
        Category::create([
            'name' => 'Desert'
        ]);
        Category::create([
            'name' => 'Breakfast'
        ]);

        // Seed the foods
        $category_id = Category::pluck('id');
        $category_id = $category_id->toArray();

        for ($i = 0; $i < 100; $i++) {
            $randomIndex = array_rand($category_id);
            Food::create([
                'category_id' => $category_id[$randomIndex],
                'name' => fake()->word(),
                'description' => fake()->paragraph(3),
                'price' => fake()->numberBetween(50000, 150000)
            ]);
        }
    }
}
