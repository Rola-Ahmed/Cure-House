<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    function PatientsRecord()
    {

        $patient_rec = Patient::get();
        // $blogs = Blog::get();
        return view('dashboardpages.patients.patientrecords', ['patientRecords' => $patient_rec]);
    }
}