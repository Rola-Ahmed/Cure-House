<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prescription;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'prepnurse_name',
        'examination_room',
        'patient_bill',
        'expected_started_date',
        'actual_started_date',
        'actual_ended_date',
        "doctor_id",
        "admin_id",
        "patient_id",
        "status",


    ];


    function prescriptionM()
    {
        return $this->hasOne(Prescription::class, 'prescription_id');
    }
}