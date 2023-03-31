<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class AdminController extends Controller
{
    function ViewAddAdmin()
    {
        $admin_users = User::where('role', 'admin')->get();
        return view('dashboardpages.admin.viewaddadmin', ['admins' => $admin_users]);
    }
}