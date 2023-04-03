<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class User1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctor_first_names = ['Mohammed', 'Tamer', 'Dalia', 'Mona', 'Karim'];
        $doctor_last_names = ['Eslam', 'Wasfi', 'Samir', 'Basem', 'Asal'];
        $image = ['defualt-image.jpg', 'e4r5ty6hufj8i97u6yt5r4eds.jpg', 'efr45g6h7yutbvrfe4.jpg', '4fvrtgyh7u8i7juytre.jpg', 'r4fvgt6y5tyr_DentalCureClinic.jpg','5thyuik9o076875_Dentalcure.jpg'];

        for ($i = 0; $i < 5; $i++) {
            \DB::table('users')->insert([
                'first_name' => $doctor_first_names[$i],
                'Last_name' => $doctor_last_names[$i],
                'role' => "doctor",
                'profile_image' => \Arr::random($image),
                ///'admin', 'doctor'
                'email' => $doctor_first_names[$i] . "" . date('Y') . "" . rand(1000, 27000) . "@gmail.com",
                'phone_number' => '01113499373',
                'password' => \Hash::make('123'),

                'created_at' => now(),
                'updated_at' => now(),
                'gender' => \Arr::random(['female', 'male']),
                'age' => rand(25, 90),
            ]);
        }
        ;
    }
}