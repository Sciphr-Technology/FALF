<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * UserFactory class.
 *
 * This class is responsible for generating fake data for the User model.
 * It extends the Factory class provided by Laravel.
 */
class UserFactory extends Factory
{
    /**
     * The password to be used for the User model.
     *
     * @var string|null
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * This method returns an array of attributes with fake data for the User model.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the user's email address should be unverified.
     *
     * This method sets the email_verified_at attribute to null.
     *
     * @return static
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
