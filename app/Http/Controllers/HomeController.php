<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        // $blogs = Blog::latest()->take(2)->get();
        // dd($blogs);['blogs' => $blogs]

        return view('index');
        // resouerces index.blade.php
    }
}