<?php

namespace App\Http\Controllers\LandingPageComponents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        // $blogs = Blog::latest()->take(2)->get();
        // dd($blogs);['blogs' => $blogs]

        return view('landingpages.home');
        // resouerces index.blade.php
    }
}