<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Event;
use App\Models\Cohort;

class WebsiteController extends Controller
{
    public function home()     { return view('website.home'); }
    public function about()    { return view('website.about'); }
    public function programs() { return view('website.programs'); }
    public function education(){ return view('website.education'); }
    public function songs()
    {
        $products = Product::where('is_active', true)->orderBy('type')->get();
        return view('website.songs', compact('products'));
    }
    public function contact()  { return view('website.contact'); }
    public function leaders()  { return view('website.leaders'); }
    public function register() { return view('website.register'); }
    public function support()  { return view('website.support'); }
    public function privacy()  { return view('website.privacy'); }
    public function terms()    { return view('website.terms'); }
}
