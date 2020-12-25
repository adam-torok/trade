<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('layouts.landing.index');
    }

    public function impressum(){
        return view('layouts.landing.impressum');
    }

    public function about(){
        return view('layouts.landing.about');
    }

    public function advertising(){
        return view('layouts.landing.advertising');
    }

    public function sitemap(){
        return view('layouts.landing.sitemap');
    }

    public function partners(){
        return view('layouts.landing.partners');
    }

    public function faq(){
        return view('layouts.landing.faq');
    }

    public function help(){
        return view('layouts.landing.help');
    }
    
}
