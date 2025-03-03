<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * MemberFactory class.
 *
 * This class is responsible for generating fake data for the Member model.
 * It extends the Factory class provided by Laravel.
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * This method returns an array of attributes with fake data for the Member model.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'role' => $this->faker->jobTitle,
            'visible_on_website' => $this->faker->boolean,
        ];
    }
}
