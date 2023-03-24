<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            \DB::table('patients')->insert([
                'first_name' => \Str::random(5),
                'Last_name' => \Str::random(6),
                // 'phone_number' => '20' + \Str::random(11),
                //'phone_number' => \Str::random(13),
                'phone_number' => '01113499373',

                'doctor_id' => 1,
                'admin_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        ;
    }
}