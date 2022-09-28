<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Cook;
use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Why_choose_us;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $setting      = Setting::first();
        $sliders      = Slider::all();
        $wcu          = Why_choose_us::all();
        $photos       = Gallery::inRandomOrder()->limit(4)->get();
        $cooks        = Cook::inRandomOrder()->limit(3)->get();
        $testimonials = Testimonial::all();
        
        // dd($cooks[1]['photo']);

        return view('landing.index', compact('setting', 'sliders', 'wcu', 'photos', 'cooks', 'testimonials' ));
    }

    public function event(){
        return view('landing.event');
    }

    public function about(){
        return view('landing.about');
    }

    public function contact(){
        return view('landing.contact');
    }

    public function menu(){
        return view('landing.menu');
    }

    
}
