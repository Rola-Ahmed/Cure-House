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

        $admin_first_names = [
            'Rola',
            'Wafi',
            'Lojain',
            'Ahmed',
            'Loka',
            "Amina",
            "Amir",
            "Fatima",
            "Jamal",
            "Kareem",
            "Layla",
            "Malik",
            "Muhammad",
            " Nadia",
            " Sara",
            'Abduallah',
            'Gado',
            'Sami',
            'Essam',
            'Jowiriaas'
        ];
        $admin_last_names = [
            "Abbas",
            "Abdul",
            "Abid",
            "Adil",
            "Adam",
            "Adib",
            'Adnan',
            "Afif",
            "Ahsan",
            'Ajmal',
            " Aladdin",
            "Alim",
            " Amer",
            "Amin",
            "Anwar",
            "Aqeel",
            "Asad",
            "Ashraf",
            " Ayman",
            "Aziz",
        ];
        $gender = ['female', 'male'];

        $image = ['defualt-image.jpg', '1679145074_Dental_Flow.jpg', '1679178204Cure_Dental_Clinic.jpeg', '1679288473_Dental_Flow.jpeg', '1679288824_Dental_Flow_WhatsApp Image 2022-02-09 at 5.10.54 PM (1).jpeg'];
        for ($i = 0; $i < 21; $i++) {
            \DB::table('users')->insert([
                'first_name' => $admin_first_names[$i],
                'Last_name' => $admin_last_names[$i],
                'role' => 'admin',
                // 'role'=> ['admin', 'doctor']->default('admin'),
                'email' => "$admin_first_names[$i]@gmail.com",
                'phone_number' => '01113499373',
                'password' => \Hash::make('123'),
                // 'profile_image' => 'defualt-image.jpg',
                'profile_image' => \Arr::random($image),

                //'gender' => \Str::random($gender),
                'created_at' => now(),
                'updated_at' => now(),
                'gender' => \Arr::random($gender),
                'age' => rand(25, 90),
                // month,day,year
            ]);
        }
        ;




    }



}