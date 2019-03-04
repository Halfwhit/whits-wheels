<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function splash()
    {
        return view('homepage.splash');
    }

    public function home()
    {
        return view('homepage.home');
    }

    public function about()
    {
        return view('homepage.about');
    }

    public function showroom()
    {
        return view('homepage.showroom');
    }

    public function contact()
    {
        return view('homepage.contact');
    }
}
