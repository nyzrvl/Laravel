<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(3)->create();

        User::create([
            'name'=> 'Nayla Rizka',
            'username'=> 'nyrzv',
            'email'=> 'nylarzkavlna@gmail.com',
            'password'=> bcrypt('12345')  
        ]);

        // User::create([
        //     'name'=> 'Nayla ',
        //     'email'=> 'nyla@gmail.com',
        //     'password'=> bcrypt('12345')
        
        // ]);

        Category::create([
            'name' => 'Web-Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web-Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        

    }
}
