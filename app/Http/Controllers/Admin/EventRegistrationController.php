<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventRegistration;
use Illuminate\Http\Request;

class EventRegistrationController extends Controller
{
    public function index(Request $request)
    {
        $query = EventRegistration::with('event')->latest();

        if ($request->filled('event_id')) {
            $query->where('event_id', $request->event_id);
        }

        $registrations = $query->paginate(20)->withQueryString();
        $events = Event::orderBy('event_date', 'desc')->get();

        return view('admin.event-registrations.index', compact('registrations', 'events'));
    }
}
