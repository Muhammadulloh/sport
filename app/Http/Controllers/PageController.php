<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function about()
    {
        return view('about');
    }

    public function index()
    {
        return view('posts.index');
    }

    public function contact()
    {
        return view('contact');
    }
    public function new()
    {
        return view('new');
    }

    public function team()
    {
        return view('team');
    }

}
