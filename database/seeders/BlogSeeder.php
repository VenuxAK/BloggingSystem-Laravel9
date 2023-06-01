<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::truncate();
        $c = Category::all()->pluck('id');
        $u = User::all()->pluck('id');

        foreach($c as $i) {
            Blog::factory(3 * $i)->create([
                "category_id" => $i,
                "user_id" => $c[0]
            ]);
        }
        // Run First
        // Blog::factory(13)->create([
        //     "category_id" => $c[0],
        //     "user_id" => $c[0]
        // ]);
        // Blog::factory(2)->create([
        //     "category_id" => $c[1],
        //     "user_id" => $u[0]
        // ]);

        // Run Second
        // Blog::factory(15)->create([
        //     "category_id" => $c[1],
        //     "user_id" => $u[1]
        // ]);
        // Blog::factory(5)->create([
        //     "category_id" => $c[2],
        //     "user_id" => $u[2]
        // ]);

        // Run Third
        // Blog::factory(5)->create([
        //     "category_id" => $c[3],
        //     "user_id" => $u[2]
        // ]);
        // Blog::factory(5)->create([
        //     "category_id" => $c[4],
        //     "user_id" => $u[0]
        // ]);
    }
}
