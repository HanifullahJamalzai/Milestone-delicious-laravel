<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'phone' => fake()->phoneNumber(),
            'open_time' => 'Subh - 08:00 AM',
            'footer_description' => fake()->paragraph(3),
            'twitter_link' => 'www.twitter.com',
            'facebook_link' => 'www.facebook.com',
            'instagram_link' => 'www.instagram.com',
            'skype_link' => 'www.skype.com',
            'linkedin_link' => 'www.linkedin.com',
        ];
    }
}
