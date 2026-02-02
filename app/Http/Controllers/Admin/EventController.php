<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('event_date', 'desc')->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'nullable|date',
            'location' => 'nullable|string|max:255',
            'status' => 'required|string|max:50',
            'description' => 'nullable|string',
            'requires_registration' => 'nullable|boolean',
            'accepts_support' => 'nullable|boolean',
        ]);

        $data['requires_registration'] = $request->boolean('requires_registration');
        $data['accepts_support'] = $request->boolean('accepts_support');

        Event::create($data);

        return redirect()->route('admin.events.index')->with('success', 'Event saved.');
    }

    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'nullable|date',
            'location' => 'nullable|string|max:255',
            'status' => 'required|string|max:50',
            'description' => 'nullable|string',
            'requires_registration' => 'nullable|boolean',
            'accepts_support' => 'nullable|boolean',
        ]);

        $data['requires_registration'] = $request->boolean('requires_registration');
        $data['accepts_support'] = $request->boolean('accepts_support');

        $event->update($data);

        return redirect()->route('admin.events.index')->with('success', 'Event updated.');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event removed.');
    }
}
