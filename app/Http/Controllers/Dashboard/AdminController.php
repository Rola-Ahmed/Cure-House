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

    function ViewAddDoctor()
    {
        $doctor_users = User::where('role', 'doctor')->get();
        return view('dashboardpages.admin.viewadddoctor', ['doctors' => $doctor_users]);
    }


    //to delete record from db
    function DeleteAdminDoctor($identifer)
    {
        $user = User::find($identifer);
        // dd($blog);
        $user->delete();
        return redirect("/Add/View/Admin");
    }

// to return view of edit for blog
// function edit($id)
// {
//     $blog = Blog::find($id);
//     return view("Blogs.edit", ["blog" => $blog]);
//     //  dd($blog);
// }
 
}