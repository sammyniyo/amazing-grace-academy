<?php

namespace App\Http\Controllers;

class WebsiteController extends Controller
{
    public function home()     { return view('website.home'); }
    public function about()    { return view('website.about'); }
    public function programs() { return view('website.programs'); }
    public function songs()    { return view('website.songs'); }
    public function contact()  { return view('website.contact'); }
    public function leaders() { return view('website.leaders');}
}
