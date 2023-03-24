<?php

namespace App\Http\Controllers\LandingPageComponents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function About()
    {
        // $blogs = Blog::latest()->take(2)->get();
        // dd($blogs);['blogs' => $blogs]

        return view('landingpages.about');
        // resouerces index.blade.php
    }
}