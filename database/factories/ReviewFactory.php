<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * ReviewFactory class.
 *
 * This class is responsible for generating fake data for the Review model.
 * It extends the Factory class provided by Laravel.
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * This method returns an array of attributes with fake data for the Review model.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'content' => $this->faker->sentence(),
            'rating' => $this->faker->numberBetween(1, 5),
            'visible_on_website' => $this->faker->boolean(),
        ];
    }
}
