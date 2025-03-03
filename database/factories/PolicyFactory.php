<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * PolicyFactory class.
 *
 * This class is responsible for generating fake data for the Policy model.
 * It extends the Factory class provided by Laravel.
 */
class PolicyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * This method returns an array of attributes with fake data for the Policy model.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
            'content' => $this->faker->paragraphs(3, true),
            'is_active' => $this->faker->boolean,
        ];
    }
}
