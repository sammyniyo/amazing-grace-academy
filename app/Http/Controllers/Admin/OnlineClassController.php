<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OnlineClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OnlineClassController extends Controller
{
    public function index()
    {
        $classes = OnlineClass::orderBy('sort_order')->orderBy('starts_at', 'desc')->paginate(15);
        return view('admin.online-classes.index', compact('classes'));
    }

    public function create()
    {
        return view('admin.online-classes.create');
    }

    public function edit(OnlineClass $online_class)
    {
        return view('admin.online-classes.edit', ['onlineClass' => $online_class]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'level' => 'required|string|in:sol-fa,staff,instrument,other',
            'schedule_summary' => 'nullable|string|max:255',
            'meeting_link' => 'nullable|url|max:500',
            'status' => 'required|string|in:draft,published,closed',
            'starts_at' => 'nullable|date',
            'ends_at' => 'nullable|date|after_or_equal:starts_at',
            'capacity' => 'nullable|integer|min:0',
            'is_featured' => 'nullable|boolean',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $data['slug'] = $data['slug'] ?: Str::slug($data['title']);
        $data['is_featured'] = $request->boolean('is_featured');
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('online-classes/covers', 'public');
        }

        OnlineClass::create($data);

        return redirect()->route('admin.online-classes.index')->with('success', 'Online class created.');
    }

    public function update(Request $request, OnlineClass $online_class)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'level' => 'required|string|in:sol-fa,staff,instrument,other',
            'schedule_summary' => 'nullable|string|max:255',
            'meeting_link' => 'nullable|url|max:500',
            'status' => 'required|string|in:draft,published,closed',
            'starts_at' => 'nullable|date',
            'ends_at' => 'nullable|date',
            'capacity' => 'nullable|integer|min:0',
            'is_featured' => 'nullable|boolean',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $data['is_featured'] = $request->boolean('is_featured');
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);

        if ($request->hasFile('cover_image')) {
            if ($online_class->cover_image) {
                Storage::disk('public')->delete($online_class->cover_image);
            }
            $data['cover_image'] = $request->file('cover_image')->store('online-classes/covers', 'public');
        }

        $online_class->update($data);

        return redirect()->route('admin.online-classes.index')->with('success', 'Online class updated.');
    }

    public function destroy(OnlineClass $online_class)
    {
        if ($online_class->cover_image) {
            Storage::disk('public')->delete($online_class->cover_image);
        }
        $online_class->delete();

        return redirect()->route('admin.online-classes.index')->with('success', 'Online class removed.');
    }
}
