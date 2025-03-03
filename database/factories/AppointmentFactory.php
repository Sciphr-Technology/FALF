<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * AppointmentFactory class.
 *
 * This class is responsible for generating fake data for the Appointment model.
 * It extends the Factory class provided by Laravel.
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * This method returns an array of attributes with fake data for the Appointment model.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->e164PhoneNumber(),
            'appointment_date' => $this->faker->date(),
            'appointment_time' => $this->faker->time(),
        ];
    }
}
