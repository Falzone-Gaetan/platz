<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->words(2, true),
            'text' => fake()->paragraphs(2, true),
            'image' => fake()->randomFloat(0,1,20). '.jpg',
            'filesize' =>fake()->randomFloat(2, 10, 100). '.Mo',
            'download'=>fake()->words(6, true),
            'categories_id' => \App\Models\Category::factory(),
            'authors_id' => \App\Models\Author::factory(),
        ];
    }
}
