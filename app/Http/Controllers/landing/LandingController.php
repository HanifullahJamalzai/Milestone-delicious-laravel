<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Cook;
use App\Models\Event;
use App\Models\Food;
use App\Models\Gallery;
use App\Models\Hero;
use App\Models\Slider;
use App\Models\Special;
use App\Models\Testimonial;
use App\Models\Why_choose_us;

class LandingController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $wcu = Why_choose_us::all();
        $photos = Gallery::inRandomOrder()->limit(4)->get();
        $cooks = Cook::inRandomOrder()->limit(3)->get();
        $testimonials = Testimonial::all();

        // dd($cooks[1]['photo']);

        return view('landing.index', compact('sliders', 'wcu', 'photos', 'cooks', 'testimonials'));
    }

    public function event()
    {
        $events  = Event::all();
        return view('landing.event', compact('events'));
    }

    public function about()
    {
        $hero = Hero::first();
        return view('landing.about', compact('hero'));
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('landing.contact', compact('contact'));
    }

    public function menu()
    {
        $food = Food::all();
        $special = Special::all();
        return view('landing.menu', compact('food', 'special'));
    }
}
