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
    }
}
