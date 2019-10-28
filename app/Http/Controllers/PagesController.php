<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

use Mapper;

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
    
        Mapper::map(-2.161694, 120.074611, ['zoom' => 4.5, 'center' => true, 'marker' => true, 'type' => 'HYBRID'])
        ->marker(3.595733, 98.684246)
        ->marker(-0.907093, 100.352193)
        ->marker(-2.981376, 104.745649)
        ->marker(-6.167431, 106.835161)
        ->marker(-6.894023, 107.634532)
        ->marker(-7.014934, 110.423983)
        ->marker(-7.235923, 112.734074)
        ->marker(-8.666576, 115.231517)
        ->marker(-3.440981, 114.831636)
        ->marker(-5.164130, 119.434747)
        ->marker(-2.522577, 140.713324);
      
        return view('pages.regional');
    }
    
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function upt()
    {
        Mapper::map(-2.161694, 120.074611, ['zoom' => 4.5, 'center' => true, 'marker' => true, 'type' => 'HYBRID'])
        ->marker(3.595733, 98.684246)
        ->marker(-0.907093, 100.352193)
        ->marker(-2.981376, 104.745649)
        ->marker(-6.167431, 106.835161)
        ->marker(-6.894023, 107.634532)
        ->marker(-7.014934, 110.423983)
        ->marker(-7.235923, 112.734074)
        ->marker(-8.666576, 115.231517)
        ->marker(-3.440981, 114.831636)
        ->marker(-5.164130, 119.434747)
        ->marker(-2.522577, 140.713324);

        return view('pages.upt');
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function pusat()
    {
        Mapper::map(-2.161694, 120.074611, ['zoom' => 4.5, 'center' => true, 'marker' => true, 'type' => 'HYBRID'])
        ->marker(3.595733, 98.684246)
        ->marker(-0.907093, 100.352193)
        ->marker(-2.981376, 104.745649)
        ->marker(-6.167431, 106.835161)
        ->marker(-6.894023, 107.634532)
        ->marker(-7.014934, 110.423983)
        ->marker(-7.235923, 112.734074)
        ->marker(-8.666576, 115.231517)
        ->marker(-3.440981, 114.831636)
        ->marker(-5.164130, 119.434747)
        ->marker(-2.522577, 140.713324);

        return view('pages.pusat');
    }

    public function jenispelatihan()
    {
        return view('pages.jenispelatihan');
    }
    public function pelaporan()
    {
        return view('pages.pelaporan');
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
    public function newsSelect()
    {
        return view('pages.newsSelect');
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function galeri()
    {
        return view('pages.galeri');
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
    public function pelatihan()
    {
        return view('pages.pelatihan');
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

    /**
     * Show the application profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('pages.profile');
    } 
}
