<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pseudo' => fake()->words(1, true),
            'text' => fake()->paragraphs(1, true),
            'products_id' => \App\Models\Product::factory(),
        ];
    }
}
