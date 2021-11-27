<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Follows;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                "username" => "bangyadiii",
                "name" => "Tri Adi",
                "password" => Hash::make('triadi123'),
                "email" => "bangyadiii@gmail.com",
                "bio" => "mahasiswa UB",
                "birth_date" => "2002-06-08"
        ]);
        User::factory()->count(25)->hasPosts(5)->create();
        Post::factory(10)->create();
        // Follows::factory(10)->create();

    }
}
