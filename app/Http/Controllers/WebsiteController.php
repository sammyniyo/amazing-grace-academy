<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Event;
use App\Models\Cohort;

class WebsiteController extends Controller
{
    public function home()
    {
        $upcomingEvents = Event::orderBy('event_date', 'desc')->take(6)->get();
        return view('website.home', compact('upcomingEvents'));
    }
    public function about()    { return view('website.about'); }
    public function programs() { return view('website.programs'); }
    public function education(){ return view('website.education'); }
    public function songs()
    {
        $products = Product::where('is_active', true)->orderBy('type')->get();
        return view('website.songs', compact('products'));
    }

    public function events()
    {
        $all = Event::orderBy('event_date', 'desc')->get();
        $today = now()->startOfDay();
        $upcoming = $all->filter(fn ($e) => $e->event_date && $e->event_date->gte($today))->values();
        $past = $all->filter(fn ($e) => $e->event_date && $e->event_date->lt($today))->values();
        return view('website.events', [
            'events' => $all,
            'upcomingEvents' => $upcoming,
            'pastEvents' => $past,
        ]);
    }

    public function eventShow(Event $event)
    {
        return view('website.event-show', compact('event'));
    }

    public function contact()  { return view('website.contact'); }
    public function leaders()  { return view('website.leaders'); }
    public function register()
    {
        $cohorts = Cohort::orderBy('start_date', 'desc')->get();
        return view('website.register', compact('cohorts'));
    }

    public function support()
    {
        return view('website.support');
    }
    public function privacy()  { return view('website.privacy'); }
    public function terms()    { return view('website.terms'); }
}
