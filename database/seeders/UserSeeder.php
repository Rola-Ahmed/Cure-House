<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \User::create(
        //     [
        //         "first_name" => "rola",
        //         "last_name" => "wafi",
        //         "role" => "admin",
        //         'email' => 'rola@gmail.com',
        //         'profile_image'=>;


        //     ]
        // );

        $admin_first_names = ['Rola', 'Wafi', 'Lojain', 'Ahmed', 'Loka'];
        $admin_last_names = ['Abduallah', 'Gado', 'Sami', 'Ahmed', 'Essam'];
        for ($i = 0; $i < 5; $i++) {
            \DB::table('users')->insert([
                'first_name' => $admin_first_names[$i],
                'Last_name' => $admin_last_names[$i],
                'role' => 'admin',
                // 'role'=> ['admin', 'doctor']->default('admin'),
                'email' => "$admin_first_names[$i]@gmail.com",
                'phone_number' => '01113499373',
                'password' => \Hash::make('123'),
                'profile_image' => 'defualt-image',

                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        ;



        $doctor_first_names = ['Mohammed', 'Tamer', 'Dalia', 'Mona', 'Karim'];
        $doctor_last_names = ['Eslam', 'Wasfi', 'Samir', 'Basem', 'Asal'];
        for ($i = 0; $i < 5; $i++) {
            \DB::table('users')->insert([
                'first_name' => $doctor_first_names[$i],
                'Last_name' => $doctor_last_names[$i],
                'role' => "doctor",
                'profile_image' => 'defualt-image',
                ///'admin', 'doctor'
                'email' => "$doctor_first_names[$i]@gmail.com",
                'phone_number' => '01113499373',
                'password' => \Hash::make('123'),

                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        ;
    }



}