<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            "name" => "Ar Kar",
            "username" => "arkar",
            "email" => "arkar@gmail.com",
            "password" => bcrypt('password')
        ]);
        User::factory()->create([
            "name" => "Minn Minn",
            "username" => "minn",
            "email" => "minn@gmail.com",
            "password" => bcrypt('password')
        ]);
        User::factory()->create([
            "name" => "Brogrammer",
            "username" => "brogrammer",
            "email" => "brogrammer@gmail.com",
            "password" => bcrypt('password')
        ]);
    }
}
