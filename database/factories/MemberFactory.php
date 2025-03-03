<?php

namespace Database\Factories;

use App\Models\Memebr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Memebr>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
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
