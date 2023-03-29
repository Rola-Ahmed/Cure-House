<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class RegisterController extends Controller
{

    function index()
    {
        // Blog::all();
        // $users = User::get();
        return view('dashboardpages.profile');
        // return view('dashboardpages.profile');
    }



    //display the register page (FOR ADMIN)
    function Register()
    {
        // $blogs = Blog::latest()->take(2)->get();
        // dd($blogs);['blogs' => $blogs]

        return view('authentication.register');

    }

    // function RegisterHandler(Request $request)
// {
//     $data = $request->all();
//     // if ($data['password'] !== $data['repeat-password']) {

    //     // }
//     // $data['password'] = Hash::make($data['password']);

    //     // // $user = new User();
//     // // $user->create($data); //static way
//     // // or
//     // $user = User::create($data); //dynamic way

    //     // return $user ? redirect('login') : redirect('register');


    //     dd($request->all());

    // }


    function RegisterHandler(Request $req)
    {
        $data = $req->all();
        // dd($req->all());

        // $imgHolder = "default.png";
        // //check if file is uploaded
        // if ($req->hasFile('imgBlog')) {
        //     //$image variable contains all info about image
        //     $image = $req->file("imgBlog");
        //     //rename image to new name
        //     $name = time() . "_hanya.com" . "." . $image->getClientOriginalExtension();
        //     //Destination
        //     $destination = public_path("/uploads");
        //     //move uploaded file
        //     $image->move($destination, $name);
        //     $imgHolder = $name;
        // }

        $validator = \Validator::make(
            $req->all(),
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'phone_number' => "required|min:11|max:13",
                // 'role' => 'required',
                'email' => 'required|unique:users,email',
                //|unique||unique:users,email
                'password' => 'required',
                // 'validation_password' => 'required',

                //|min:11|max:13
            ],

            // [
            //     'phoneNumber.min' => ' Phone Number must be  at least 11 char',
            //     'phoneNumber.max' => ' Phone Number must be max 13 char',
            //     'validationpassword.required' => 'validation password cant be empty'
            // ]
        );
        if ($validator->fails()) {
            return redirect("registerForm")
                ->withErrors($validator)
                ->withInput();
        }



        $imageHolder = 'defualt-image.jpg';
        if ($req->hasFile('uploaded_profile_image')) {
            $image = $req->file('uploaded_profile_image');
            $nameOfImg = time() . '_Dental_Flow' . "." . $image->getClientOriginalExtension();
            $destination = public_path('/uploads');
            $image->move($destination, $nameOfImg);
            $imageHolder = $nameOfImg;
            // dd($name);
        }

        $data['profile_image'] = $imageHolder;
        $data['password'] = \Hash::make($req->password);
        // $data['remember_token'] = \Str::random(64);



        // $data['id'] = \Auth::user()->id;
        $user = new User();

        // $data['image'] = $imgHolder;
        $user->create($data);
        return redirect("/");

        // return redirect("/blogs/create");
        //    $blog->title = $req->title ;
        //    $blog->content =$req->content;
        //    $blog->user_id  = "1";
        //    $blog->save();

    }


    function profileIndex()
    {
        return view('dashboardpages.profileeeeeeeee');
    }

}