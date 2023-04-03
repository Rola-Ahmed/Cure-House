<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Patient;
use App\Models\Appointment;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            \DB::table('appointments')->insert([

                "prepnurse_name" => \Arr::random(['Gahfr', 'Solyman', 'Hagager']),
                "examination_room" => \Arr::random(["1", "2", " 3", "4", " 5"]),
                "patient_bill" => rand(50, 10000),
                "status" => \Arr::random(['pending', 'cancelled', 'examinating', 'ended']),
                // "expected_started_date" => \Arr::random(['', \Str::random(now())]),
                // "actual_started_date" => \Arr::random(['', \Str::random(now())]),
                // "actual_ended_date" => \Arr::random(['', \Str::random(now())]),

                "expected_started_date" => now(),

                // "doctor_id" => User::all()->random()->id,
                // "doctor_id" => Appointment::userDoctor->find(),
                // ->user->first_name,

                // "admin_id" => User::where('role', 'admin')->find(random()->id)->get(),
                "admin_id" => User::all()->where('role', 'admin')->random()->id,
                "doctor_id" => User::all()->where('role', 'doctor')->random()->id,
                // "patient_id" => Patient::find(\Str::random()->id)->get(),
                "patient_id" => Patient::all()->random()->id,
            ]);

        }

        ;
    }
}