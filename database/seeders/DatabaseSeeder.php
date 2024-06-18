<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Создаем User 10шт 
        \App\Models\User::factory(10)->create();
        
        // Создаем Post 10шт 
        \App\Models\Post::factory(10)->create();
        
        // Создаем Admin 1
        \App\Models\Admin::factory(1)->create([
            "name" => "admin",
            "email" => "laravel@laravel.com",
            "password" => bcrypt("1234qwer")
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}