<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }
    
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function regional()
    {
        return view('pages.regional');
    }
    
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function upt()
    {
        return view('pages.upt');
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        return view('pages.news');
    }

     /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function jadwal()
    {
        return view('pages.jadwal');
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('pages.about');
    } 
}
