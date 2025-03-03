<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Member;
use App\Models\Message;
use App\Models\Policy;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (app()->environment('local'))
        {
            User::factory()->create([
                'name' => 'مدير فائق',
                'email' => 'admin@falf.com',
            ]);

            Member::factory(10)->create();
            Review::factory(10)->create();
            Policy::factory(10)->create();
            Message::factory(10)->create();
            Appointment::factory(10)->create();
        }
    }
}
