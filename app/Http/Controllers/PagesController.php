<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function showroom()
    {
        return view('showroom');
    }

    public function contact()
    {
        return view('contact');
    }

    public function tasks()
    {
        $tasks = [
            'Build site',
            'Upload site to github',
            'Push site to VPS'
        ];

        return view('tasks', [
            'tasks' => $tasks
        ]);
    }
}
