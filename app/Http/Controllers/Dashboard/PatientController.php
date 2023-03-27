<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\User;

class PatientController extends Controller
{
    function PatientsRecord()
    {

        $patient_rec = Patient::get();

        // $x = Patient::get();
        // $patient_rec = $x->user;
        // $blogs = Blog::get();
        return view('dashboardpages.patients.patientrecords', ['patientRecords' => $patient_rec]);
    }
}