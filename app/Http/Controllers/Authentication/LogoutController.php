<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    function Logout()
    {
        Auth::logout();
        return redirect('/');
        

    }
}