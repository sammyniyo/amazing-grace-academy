<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

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
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'requires_registration' => 'nullable|boolean',
            'accepts_support' => 'nullable|boolean',
        ]);

        $data['requires_registration'] = $request->boolean('requires_registration');
        $data['accepts_support'] = $request->boolean('accepts_support');

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('events/covers', 'public');
        }

        Event::create($data);
        Cache::forget('home.upcoming_events');
        Cache::forget('website.events');

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
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'requires_registration' => 'nullable|boolean',
            'accepts_support' => 'nullable|boolean',
        ]);

        $data['requires_registration'] = $request->boolean('requires_registration');
        $data['accepts_support'] = $request->boolean('accepts_support');

        if ($request->hasFile('cover_image')) {
            if ($event->cover_image) {
                Storage::disk('public')->delete($event->cover_image);
            }
            $data['cover_image'] = $request->file('cover_image')->store('events/covers', 'public');
        }

        $event->update($data);
        Cache::forget('home.upcoming_events');
        Cache::forget('website.events');

        return redirect()->route('admin.events.index')->with('success', 'Event updated.');
    }

    public function destroy(Event $event)
    {
        if ($event->cover_image) {
            Storage::disk('public')->delete($event->cover_image);
        }
        $event->delete();
        Cache::forget('home.upcoming_events');
        Cache::forget('website.events');
        return redirect()->route('admin.events.index')->with('success', 'Event removed.');
    }
}
