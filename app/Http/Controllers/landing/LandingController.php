<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Cook;
use App\Models\Event;
use App\Models\Food;
use App\Models\Gallery;
use App\Models\Hero;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Special;
use App\Models\Testimonial;
use App\Models\Why_choose_us;

class LandingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $sliders = Slider::all();
        $wcu = Why_choose_us::all();
        $photos = Gallery::inRandomOrder()->limit(4)->get();
        $cooks = Cook::inRandomOrder()->limit(3)->get();
        $testimonials = Testimonial::all();

        // dd($cooks[1]['photo']);

        return view('landing.index', compact('setting', 'sliders', 'wcu', 'photos', 'cooks', 'testimonials'));
    }

    public function event()
    {
        $setting = Setting::first();
        $events  = Event::all();

        return view('landing.event', compact('setting', 'events'));
    }

    public function about()
    {
        $setting = Setting::first();
        $hero = Hero::first();
        return view('landing.about', compact('setting', 'hero'));
    }

    public function contact()
    {
        $setting = Setting::first();
        $contact = Contact::first();
        return view('landing.contact', compact('setting', 'contact'));
    }

    public function menu()
    {
        $setting = Setting::first();
        $food = Food::all();
        $special = Special::all();
        return view('landing.menu', compact('setting', 'food', 'special'));
    }
}
