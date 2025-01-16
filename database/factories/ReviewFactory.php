<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "content" => fake()->sentences(3, true),
            "shoe_id" => fake()->numberBetween(1,23),
            "user_id" => fake()->numberBetween(1,11),
            "upvote" => fake()->numberBetween(1,100),
            "downvote" => fake()->numberBetween(1,100),
        ];
    }
}
