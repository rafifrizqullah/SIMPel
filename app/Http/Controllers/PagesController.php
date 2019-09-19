<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('index');
    }
    
    public function berita()
    {
        return view('berita');
    }

    public function about()
    {
        return view('about');
    }
}
