<?php
namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->name(),
            "preview" => fake()->text(90),
            "description" => fake()->text(),
            "thumbnail" => fake()->image("public/storage/posts", 640, 520, null, false ),
        ];
    }
}