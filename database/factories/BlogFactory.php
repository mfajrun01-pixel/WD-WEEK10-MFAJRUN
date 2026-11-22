<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $number = 1;
        return [
            'profile_id' => fake()->numberBetween(1, 10),
            'number' => $number++,
            'category' => fake()->randomElement(['Web Development', 'Mobile App', 'UI/UX Design']),
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'tools' => (fake()->words(3)),
            'symbol' => fake()->randomElement(['PHP', 'JavaScript', 'Python', 'Java']),
        ];
    }
}
