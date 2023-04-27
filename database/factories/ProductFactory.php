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
            'item' =>fake()->word,
            'desc' => fake()->sentence,
            'quantity' => fake()->numberBetween(1,50),
            'unitPrice'=>fake()->numberBetween(1000, 50_000)
        ];
    }
}
