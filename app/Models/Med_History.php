<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Med_History extends Model
{
    use HasFactory;
    protected $fillable = [
        'medications',
        'role',
        'pregnant',

    ];

    protected $casts = [
        'images' => 'array',
        'allergies' => 'array',
        'diseases' => 'array',
    ];
}

// php artisan make:model 