<?php

namespace App\Http\Controllers\DashBoardComponents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;



class ProfileController extends Controller
{
    function index()
    {
        // Blog::all();
        // $users = User::get();
        return view('dashboardpages.profile');
        // return view('dashboardpages.profile');
    }

    function Update(Request $request, $id)
    {

        //--------------------------------------------
        $user = User::find($id);

        $user->update($request->all());

        return redirect("/profile");

        ///---------------
        // ////working
        // // $user = \Auth::user();
        // $user = $id;
        // //$user->update($request->all());
        // //$user->first_name = $data["first_name"];
        // $user->save($request->all());
        // return redirect('/profile');
        ////---------------
        // $data['password'] = Hash::make($data['password']);

        //$user->first_name = $data["first_name"];


        //$user->email = Request::input('email');

        // if (!Request::input('password') == '') {
        //     $user->password = bcrypt(Request::input('password'));
        // }

        // $user->save();

        // \Flash::message('Your account has been updated!');

        //---------------------------------------------



        // $validator = \Validator::make(
        //     $req->all(),
        //     [
        //         'first_name' => 'required',
        //         'last_name' => 'required',
        //         'phone _number' => "required|min:11|max:13",
        //         // 'role' => 'required',
        //         'email' => 'required|unique:users,email',
        //         //|unique||unique:users,email
        //         'password' => 'required',
        //         // 'validation_password' => 'required',

        //         //|min:11|max:13
        //     ],
///////////////////////////////
        // [
        //     'phoneNumber.min' => ' Phone Number must be  at least 11 char',
        //     'phoneNumber.max' => ' Phone Number must be max 13 char',
        //     'validationpassword.required' => 'validation password cant be empty'
        // ]
        //  );

    }



    function Update1(Request $request, $id)
    {
        //To update a model, you may retrieve it, change an attribute, and use th
        $user = User::find($id);
        // $users = \Auth::user()->profile_image;
        // dd($users);
        // dd($request->hasFile('uploaded_profile_image'));



        $data = $request->all();
        $validator = \Validator::make(
            $request->all(),
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'phone_number' => "required|min:11|max:13",

                //|unique||unique:users,email
                // 'password' => 'required',

            ],

            // [
            //     'phoneNumber.min' => ' Phone Number must be  at least 11 char',
            //     'phoneNumber.max' => ' Phone Number must be max 13 char',
            //     'validationpassword.required' => 'validation password cant be empty'
            // ]
        );

        // if ($validator->fails()) {
        //     return redirect("profile")
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        // $imageHolder = 'defualt-image';

        // if ($request->hasFile('uploaded_profile_image')) {
        //     // if ($request->hasFile('uploaded_profile_image') == null) {
        //     //     $imageHolder = 'defualt-image';
        //     // } else {
        //     $image = $request->file('uploaded_profile_image');
        //   //  dd($image);
        //     ///dd($image->getClientOriginalExtension()); ///extention type
        //     $nameOfImg = time() . 'Cure_Dental_Clinic' . "." . $image->getClientOriginalExtension();
        //     $destination = public_path('/uploads');
        //     $image->move($destination, $nameOfImg);
        //     $imageHolder = $nameOfImg;
        //     // dd($name);
        //     // }



        // }
        // $data['profile_image'] = $imageHolder;

        // $imageHolder = 'defualt-image';
        //dd($imageHolder, \Auth::user()->profile_image);
        if ($request->hasFile('uploaded_profile_image')) {
            $image = $request->file('uploaded_profile_image');
            // dd($image->getClientOriginalName());
            $nameOfImg = time() . '_Dental_Flow' . "_" . $image->getClientOriginalName();
            // $nameOfImg = time() . '_Dental_Flow' . "_" . $image->getClientOriginalName() . "." . $image->getClientOriginalExtension();
            $destination = public_path('/uploads');
            $image->move($destination, $nameOfImg);
            $imageHolder = $nameOfImg;
            // dd($name);
            $data['profile_image'] = $imageHolder;
        }


        //$data['profile_image'] = $imageHolder;
        //dd($imageHolder, \Auth::user()->profile_image);
        // \Auth::user()->profile_image = $imageHolder;
        //        dd($imageHolder, \Auth::user()->profile_image);
        // $data['profile_image'] = $imageHolder;
        $user->update($data);
        // $user->update($request->all());

        return redirect("/profile");
    }

    function updateCategory(Request $request, $identifier)
    {
        $data = $request->all();
        $cat = Category::find($identifier);
        $validator = \Validator::make($request->all(), [
            'name' => 'required|min:3|max:100'
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => 'validation error', 'status' => 422, 'errors' => $validator->messages()]);
        } else {
            if ($cat) {
                $imgHolder = "categories.jpg";
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $name = time() . '_BOHOdotCom' . "." . $image->getClientOriginalExtension();
                    $destination = public_path("/uploads");
                    $image->move($destination, $name);
                    $imgHolder = $name;
                }
                // $data['user_id'] = Auth::user()->id;
                // $data['user_id'] = 2;
                $cat->image = $imgHolder;
                $data['desc'] = $data['desc'] ?? 'Furnish your home from HUB Furniture online store, variety of home furniture ; living room , bedrooms , dining rooms and outdoor furniture all at one place .';
                $cat->update();
                return response()->json(['message' => 'successfully updated', 'status' => 200, 'category' => $data]);
            } else {
                return response()->json(['message' => 'category not found']);
            }


        }

    }
    function profileIndex()
    {
        return view('dashboardpages.profileeeeeeeee');

    }



}


function Update1(Request $request, $id)
{
    //To update a model, you may retrieve it, change an attribute, and use th
    $user = User::find($id);

    $data = $request->all();
    $validator = \Validator::make(
        $request->all(),
        [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => "required|min:11|max:13",

            //|unique||unique:users,email
            // 'password' => 'required',

        ],


    );


    if ($request->hasFile('uploaded_profile_image')) {
        $image = $request->file('uploaded_profile_image');
        $nameOfImg = time() . '_Dental_Flow' . "_" . $image->getClientOriginalName();
        $destination = public_path('/uploads');
        $image->move($destination, $nameOfImg);
        $imageHolder = $nameOfImg;
        // dd($name);
        $data['profile_image'] = $imageHolder;
    }

    $user->update($data);

    return redirect("/profile");
}