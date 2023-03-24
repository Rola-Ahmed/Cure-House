<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangingPageController extends Controller
{
    public function LangingPage()
    {
        // $blogs = Blog::latest()->take(2)->get();
        // dd($blogs);['blogs' => $blogs]

        return view('landingpage');
        //landingpages.
        // resouerces index.blade.php
    }
}