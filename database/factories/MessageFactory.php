<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * MessageFactory class.
 *
 * This class is responsible for generating fake data for the Message model.
 * It extends the Factory class provided by Laravel.
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * This method returns an array of attributes with fake data for the Message model.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->optional()->safeEmail,
            'phone' => $this->faker->optional()->e164PhoneNumber(),
            'message' => $this->faker->text,
        ];
    }
}
