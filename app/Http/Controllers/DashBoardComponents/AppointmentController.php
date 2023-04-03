<?php

namespace App\Http\Controllers\DashBoardComponents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    function Appointments()
    {
        return view('dashboardpages.appointments');

    }
}
