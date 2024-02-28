<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Ahmed Mohamed',
            'email' => 'a@a.com',
            'password' => '0',
            'type' => 'admin',
        ]);
        \App\Models\User::factory(10)->create();
        Category::factory(20)->create(
            ["name" => fake()->sentence(3)]
        )->each(function ($category) {
            Post::factory(10)->create([
                'category_id' => $category->id,
                "title" => fake()->sentence(3),
                "description" => fake()->sentence(10),
                "user_id" => 1

            ]);
        });

    }
}
