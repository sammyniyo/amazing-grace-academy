<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRegistration;
use Illuminate\Http\Request;

class EventRegistrationController extends Controller
{
    /**
     * Show event registration form. Only for events that require registration.
     */
    public function show(Event $event)
    {
        if (! $event->requires_registration) {
            return redirect()->route('events')->with('info', 'This event does not require registration.');
        }

        $today = now()->startOfDay();
        if ($event->event_date && $event->event_date->lt($today)) {
            return redirect()->route('events')->with('info', 'Registration for this event has ended.');
        }

        return view('website.event-register', compact('event'));
    }

    /**
     * Store event registration. Optional support amount when event accepts support.
     */
    public function store(Request $request, Event $event)
    {
        if (! $event->requires_registration) {
            return redirect()->route('events')->with('error', 'This event does not require registration.');
        }

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:50',
            'notes' => 'nullable|string|max:1000',
        ];

        if ($event->accepts_support) {
            $rules['support_amount'] = 'nullable|integer|min:0';
        }

        $data = $request->validate($rules);

        EventRegistration::create([
            'event_id' => $event->id,
            'name' => $data['name'],
            'email' => $data['email'] ?? null,
            'phone' => $data['phone'] ?? null,
            'support_amount' => $event->accepts_support ? ($data['support_amount'] ?? null) : null,
            'notes' => $data['notes'] ?? null,
        ]);

        return redirect()->route('events')->with('success', 'You are registered for "' . $event->title . '". We will be in touch with details.');
    }
}
