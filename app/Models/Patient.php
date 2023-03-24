<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Patient extends Model
{
    use HasFactory;


    protected $fillable = [
        'first_name',
        'Last_name',
        'phone_number',
        'doctor_id',
        "admin_id",
    ];

    function user() //doctor
    {
        return $this->hasOne(User::class, 'user_id');
    }
}