<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Member;
use App\Models\Message;
use App\Models\Policy;
use App\Models\Remark;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * DatabaseSeeder class.
 *
 * This class is responsible for seeding the database with initial data.
 * It extends the Seeder class provided by Laravel.
 */
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * This method seeds the database with initial data for various models
     * if the application is in the local environment.
     *
     * @return void
     */
    public function run(): void
    {
        if (app()->environment('local')) {
            // Create a user with specific attributes
            User::factory()->create([
                'name' => 'مدير فائق',
                'email' => 'admin@falf.com',
            ]);

            // Create 10 members
            Member::factory(10)->create();
            // Create 10 reviews
            Review::factory(10)->create();
            // Create 10 policies
            Policy::factory(10)->create();
            // Create 10 messages
            Message::factory(10)->create();
            // Create 10 appointments
            Appointment::factory(10)->create();
            // Create 10 remarks
            Remark::factory(10)->create();
        }
    }
}
