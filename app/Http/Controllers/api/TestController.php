<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Cook;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Why_choose_us;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $wcu = Why_choose_us::all();
        $photos = Gallery::inRandomOrder()->limit(4)->get();
        $cooks = Cook::inRandomOrder()->limit(3)->get();
        $testimonials = Testimonial::all();
 
        return response()->json(array('sliders' => $sliders, 'wcu' => $wcu, 'photos' => $photos, 'cooks' => $cooks, 'testimonials' => $testimonials));
    }
}
