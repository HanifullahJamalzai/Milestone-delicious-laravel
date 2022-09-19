<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'category_id' => fake()->biasedNumberBetween(1, 5),
            'description' => fake()->paragraph(3),
            'price'  => fake()->randomNumber(3),
            'photo'  => fake()->imageUrl($width = 100, $height = 100),
        ];
    }
}
