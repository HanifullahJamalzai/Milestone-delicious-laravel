<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => fake()->paragraph(5),
            'map_link'    => "https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d851.1031657879474!2d69.13798022182112!3d34.53693928144764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1664590802992!5m2!1sen!2s",
            'address'     => 'Kart-parwan, Guzashta az shafakhana Wahaj',
            'email'       =>  'mileston@test.com',
        ];
    }
}
