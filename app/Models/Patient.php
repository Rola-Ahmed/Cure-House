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
        'birth_date',
        'age',
        'role',
    ];

    function user() //doctor
    {
        return $this->belongsTo(User::class, 'doctor_id');
        // hasOne   , 'admin_id'
    }

    function user2() //doctor
    {
        return $this->belongsTo(User::class, 'admin_id');
        // hasOne   , 'admin_id'
    }

}