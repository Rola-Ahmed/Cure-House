<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Patient::create(
        //     [
        //         "name" => "John Doe",
        //         "email" => "johndoe@gmail.com",
        //         "phone" => "9876543210",
        //         "dob" => "1996-08-21",
        //         "address" => "USA, California",
        //         "department" => "HR"
        //     ]
        // );



        for ($i = 0; $i < 20; $i++) {
            \DB::table('patients')->insert([
                'first_name' => \Str::random(5),
                'Last_name' => \Str::random(6),
                'phone_number' => '+20' + \Str::random(10),
                'doctor_id' => 1,
                'admin_id' => 2,
                
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        ;


        for ($i = 0; $i < 20; $i++) {
            \DB::table('patients')->insert([
                'first_name' => \Str::random(5),
                'Last_name' => \Str::random(6),
                // 'phone_number' => '20' + \Str::random(11),
                //'phone_number' => \Str::random(13),
                'phone_number' => rand(2, 11),

                'doctor_id' => 1,
                'admin_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        ;
    }
}