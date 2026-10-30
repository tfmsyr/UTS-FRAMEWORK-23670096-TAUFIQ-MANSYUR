<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.home');
    }
    public function about()
    {
        return view('landing.about');
    }
    public function activities()
    {
        return view('landing.activities');
    }
    public function blog()
    {
        return view('landing.blog');
    }
    public function contact()
    {
        return view('landing.contact');
    }
    public function testimonial()
    {
        return view('landing.testimonial');
    }
}