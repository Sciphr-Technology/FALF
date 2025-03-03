<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * RemarkFactory class.
 *
 * This class is responsible for generating fake data for the Remark model.
 * It extends the Factory class provided by Laravel.
 */
class RemarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * This method returns an array of attributes with fake data for the Remark model.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'content' => $this->faker->paragraph(),
            'remarkable_type' => $this->faker->randomElement([
                Message::class,
                Appointment::class,
            ]),
            'remarkable_id' => function (array $attributes) {
                return match ($attributes['remarkable_type']) {
                    Message::class => Message::inRandomOrder()->first()->id,
                    Appointment::class => Appointment::inRandomOrder()->first()->id,
                    default => null,
                };
            },
        ];
    }

    /**
     * Set the remarkable type and id for a given Message.
     *
     * @param Message $message
     * @return self
     */
    public function forMessage(Message $message): self
    {
        return $this->state(function () use ($message) {
            return [
                'remarkable_type' => Message::class,
                'remarkable_id' => $message->id,
            ];
        });
    }

    /**
     * Set the remarkable type and id for a given Appointment.
     *
     * @param Appointment $appointment
     * @return self
     */
    public function forAppointment(Appointment $appointment): self
    {
        return $this->state(function () use ($appointment) {
            return [
                'remarkable_type' => Appointment::class,
                'remarkable_id' => $appointment->id,
            ];
        });
    }
}
