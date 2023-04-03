<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use App\Models\User;

class DashboardController extends Controller
{


    function Dashboard()
    {
        // $users = User::get();
        // return view('dashboard', ['user' => $users]);
        return view('dashboard');

    }



}