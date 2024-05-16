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
    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(1, 2),
            'name' => fake()->word,
            'description' => fake()->sentence,
            'price' => fake()->randomFloat(2, 1, 100),
            'image' => fake()->imageUrl(640, 480, 'animals', true),
            'criteria' => 'perorangan',
            'favorite' => fake()->boolean,
            'status' => 'published',
            'stock' => fake()->numberBetween(1, 100),
        ];
    }
}
