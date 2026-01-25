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

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'nullable|date',
            'location' => 'nullable|string|max:255',
            'status' => 'required|string|max:50',
            'description' => 'nullable|string',
        ]);

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
        ]);

        $event->update($data);

        return redirect()->route('admin.events.index')->with('success', 'Event updated.');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event removed.');
    }
}
