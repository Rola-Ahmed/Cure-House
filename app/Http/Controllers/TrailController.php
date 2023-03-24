<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// 

class TrailController extends Controller
{
    function index()
    {
        // Blog::all();
        // $users = User::get();
        return view('dashboardpages.profile');
        // return view('dashboardpages.profile');
    }
}