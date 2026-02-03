<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Event;
use App\Models\Cohort;
use Illuminate\Support\Facades\Cache;

class WebsiteController extends Controller
{
    /** Cache TTL for public list data (seconds). */
    private const LIST_CACHE_TTL = 300;

    public function home()
    {
        $today = now()->startOfDay();
        $upcomingEvents = Cache::remember('home.upcoming_events', self::LIST_CACHE_TTL, function () use ($today) {
            return Event::where('event_date', '>=', $today)
                ->orderBy('event_date')
                ->take(6)
                ->get();
        });
        return view('website.home', compact('upcomingEvents'));
    }

    public function about()    { return view('website.about'); }
    public function programs() { return view('website.programs'); }
    public function education(){ return view('website.education'); }

    public function songs()
    {
        $products = Cache::remember('website.products_active', self::LIST_CACHE_TTL, function () {
            return Product::where('is_active', true)->orderBy('type')->get();
        });
        return view('website.songs', compact('products'));
    }

    public function events()
    {
        $today = now()->startOfDay();
        $cacheKey = 'website.events';
        $cached = Cache::get($cacheKey);
        if ($cached && ($cached['date'] ?? null) === $today->format('Y-m-d')) {
            $upcomingEvents = $cached['upcoming'];
            $pastEvents = $cached['past'];
        } else {
            $upcomingEvents = Event::where('event_date', '>=', $today)->orderBy('event_date')->get();
            $pastEvents = Event::where('event_date', '<', $today)->orderBy('event_date', 'desc')->get();
            Cache::put($cacheKey, [
                'date' => $today->format('Y-m-d'),
                'upcoming' => $upcomingEvents,
                'past' => $pastEvents,
            ], self::LIST_CACHE_TTL);
        }
        return view('website.events', [
            'upcomingEvents' => $upcomingEvents,
            'pastEvents' => $pastEvents,
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
        $cohorts = Cache::remember('website.register_cohorts', self::LIST_CACHE_TTL, function () {
            return Cohort::acceptingRegistration()->orderBy('start_date', 'desc')->get();
        });
        $registrationOpen = $cohorts->isNotEmpty();
        return view('website.register', compact('cohorts', 'registrationOpen'));
    }

    public function support()
    {
        return view('website.support');
    }
    public function privacy()  { return view('website.privacy'); }
    public function terms()    { return view('website.terms'); }
}
