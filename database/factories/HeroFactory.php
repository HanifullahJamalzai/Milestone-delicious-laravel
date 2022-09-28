<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->sentence(5),
            'photo' => fake()->imageUrl($width = 100, $height = 100),
            'youtube_link' => 'www.youtube.com',
        ];
    }
}
