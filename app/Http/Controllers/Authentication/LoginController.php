<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    function Login()
    {
        return view('authentication.login');
    }
    //to check if user exist
    // function LoginHandler(Request $req)
    // {
    //     $userCred = \Auth::attempt(['email' => $req->email, 'password' => $req->password]);
    //     if ($userCred) {
    //         return redirect("/dashboard");
    //     } else {
    //         return redirect()->back();
    //         // ->withErrors($validator)->withInput();
    //     }
    //     //    dd($req->all());
    // }


    function LoginHandler(Request $req)
    {
        $messages = [
            "email.required" => "Email is required",
            // "email.email" => "Email is not valid",
            // "email.exists" => "Email doesn't exists",
            "password.required" => "Password is required",

        ];

        $validator = Validator::make($req->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            // attempt to log
            if (\Auth::attempt(['email' => $req->email, 'password' => $req->password], $req->remember)) {
                // if successful -> redirect forward
                return redirect("/dashboard");
                //->intended(redirect("/dashboard"));


            }


            //     // if unsuccessful -> redirect back
            return redirect()->back()->withInput($req->only('email', 'password'))->withErrors([
                'email' => 'Wrong password or this account not approved yet.',
            ]);
        }
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