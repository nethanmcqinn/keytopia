<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function index()
{
    return view('welcome'); // or your custom view name
}

    public function about()
{
    return view('about'); // or your custom view name
}

    public function contact()
{
    return view('contact'); // or your custom view name
}
}