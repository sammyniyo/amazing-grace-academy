<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cohort;
use App\Models\Member;
use App\Models\Product;
use App\Models\Order;
use App\Models\ContactMessage;
use App\Models\Event;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('admin.dashboard', [
            'cohortCount' => Cohort::count(),
            'memberCount' => Member::count(),
            'productCount' => Product::count(),
            'orderCount' => Order::count(),
            'contactCount' => ContactMessage::where('status', 'new')->count(),
            'eventCount' => Event::count(),
        ]);
    }
}
