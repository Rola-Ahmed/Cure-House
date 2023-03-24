<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function Login()
    {
        return view('authentication.login');
    }
    //to check if user exist
    function LoginHandler(Request $req)
    {
        $userCred = \Auth::attempt(['email' => $req->email, 'password' => $req->password]);
        if ($userCred) {
            return redirect("/");
        } else {
            return redirect()->back();
            // ->withErrors($validator)->withInput();
        }
        //    dd($req->all());
    }
    function LoginApi(Request $request)
    {
        $data = $request->all();
        $user_creditionals = Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);
        if ($user_creditionals) {
            return response()->json([
                "message" => "user exsists",
                "remember_token" => Auth::user()->remember_token
            ]);
        } else {
            return response()->json([
                "message" => "email or password is invalid",
            ]);
        }
    }
}