<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        Category::factory()->create([
            "name" => "Tech",
            "slug" => "tech"
        ]);
        Category::factory()->create([
            "name" => "News",
            "slug" => "news"
        ]);
        Category::factory()->create([
            "name" => "Travel",
            "slug" => "travel"
        ]);
        Category::factory()->create([
            "name" => "Nature",
            "slug" => "nature"
        ]);
        Category::factory()->create([
            "name" => "Poem",
            "slug" => "poem"
        ]);
        Category::factory()->create([
            "name" => "Science",
            "slug" => "science"
        ]);
        Category::factory()->create([
            "name" => "Business",
            "slug" => "business"
        ]);
        Category::factory()->create([
            "name" => "Photography",
            "slug" => "photography"
        ]);
        Category::factory()->create([
            "name" => "Lifestyle",
            "slug" => "lifestyle"
        ]);
        Category::factory()->create([
            "name" => "Education",
            "slug" => "education"
        ]);
        Category::factory()->create([
            "name" => "Social",
            "slug" => "social"
        ]);
    }
}
