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

        //$patient_rec = Patient::get();

        $patient_rec = Patient::latest()->get();

        // $x = Patient::get();
        // $patient_rec = $x->user;
        // $blogs = Blog::get();
        return view('dashboardpages.patients.patientrecords', ['patientRecords' => $patient_rec]);
    }

    function AddNewPatient()
    {

        // $docotrs_rec = User::where('role', 'doctor')->get("first_name");
        $docotrs_rec = User::where('role', 'doctor')->get(["first_name", "id"]);


        // dd($docotrs_rec);
        return view("dashboardpages.patients.addnewpatient", ['doctorsRecords' => $docotrs_rec]);
    }

    function AddNewPatientHandler(Request $req)
    {
        $data = $req->all();


        $validator = \Validator::make(
            $req->all(),
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'phone_number' => "required|min:11|max:13",
                'gender-role' => 'required',
                'birth-date' => 'required',
                "age" => 'required',
                'doctor-role' => 'required',


            ],

            // admin-name

        );

        if ($validator->fails()) {
            return redirect("add/new/patient")
                ->withErrors($validator)
                ->withInput();
        }


        // $data['admin_id'] = \Auth::user()->id;



        $patient = new Patient();
        // $patient->create($data);
        $patient->create([
            'first_name' => $data['first_name'],
            'Last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
            'doctor_id' => $data['doctor-role'],
            'admin_id' => \Auth::user()->id,
            'birth_date' => $data['birth-date'],
            'age' => $data["age"],
            'role' => $data['gender-role'],

            // 'created_at' => now(),
            // 'updated_at' => now(),
        ]);
        // return redirect("add/new/patient")
        //     ->withInput($req->only('Successful'))->withErrors([
        //         'Successful' => 'Data added Succesfully',
        //     ]);
        return redirect("add/new/patient")->with('message', 'Patient added Successfully');
    }
}