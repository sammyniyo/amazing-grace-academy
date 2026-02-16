@extends('layouts.admin')

@section('title', 'Edit online class — Admin')
@section('page', 'Edit online class')

@section('content')
    <div class="max-w-3xl">
        <form method="POST" action="{{ route('admin.online-classes.update', $onlineClass) }}" enctype="multipart/form-data"
            class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm space-y-5">
            @csrf
            @method('PUT')
            <div>
                <label class="text-sm font-semibold text-slate-900">Cover image</label>
                @if ($onlineClass->cover_url)
                    <div class="mt-1 flex items-center gap-4">
                        <img src="{{ $onlineClass->cover_url }}" alt="Current cover" class="h-24 w-24 rounded-xl object-cover border border-slate-200">
                        <span class="text-xs text-slate-500">Replace by choosing a new file below.</span>
                    </div>
                @endif
                <input type="file" name="cover_image" accept="image/jpeg,image/png,image/jpg,image/webp"
                    class="mt-2 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm file:mr-3 file:rounded-lg file:border-0 file:bg-emerald-50 file:px-3 file:py-1.5 file:text-sm file:font-semibold file:text-emerald-700 focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                <p class="mt-1 text-xs text-slate-500">Optional. JPEG, PNG or WebP, max 2MB.</p>
                @error('cover_image')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Title</label>
                <input name="title" value="{{ old('title', $onlineClass->title) }}"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    required>
                @error('title')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Slug</label>
                <input name="slug" value="{{ old('slug', $onlineClass->slug) }}"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    required>
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Level</label>
                <select name="level"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                    @foreach (\App\Models\OnlineClass::LEVELS as $value => $label)
                        <option value="{{ $value }}" @selected(old('level', $onlineClass->level) === $value)>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm font-semibold text-slate-900">Schedule summary</label>
                    <input name="schedule_summary" value="{{ old('schedule_summary', $onlineClass->schedule_summary) }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                        placeholder="e.g. Saturdays 3:00 PM">
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-900">Status</label>
                    <select name="status"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                        <option value="draft" @selected(old('status', $onlineClass->status) === 'draft')>Draft (hidden on frontend)</option>
                        <option value="published" @selected(old('status', $onlineClass->status) === 'published')>Published (visible)</option>
                        <option value="closed" @selected(old('status', $onlineClass->status) === 'closed')>Closed</option>
                    </select>
                </div>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm font-semibold text-slate-900">Starts at</label>
                    <input type="date" name="starts_at" value="{{ old('starts_at', optional($onlineClass->starts_at)->format('Y-m-d')) }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-900">Ends at</label>
                    <input type="date" name="ends_at" value="{{ old('ends_at', optional($onlineClass->ends_at)->format('Y-m-d')) }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                </div>
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Meeting link (Zoom / Meet URL)</label>
                <input type="url" name="meeting_link" value="{{ old('meeting_link', $onlineClass->meeting_link) }}"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="https://zoom.us/j/...">
                @error('meeting_link')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm font-semibold text-slate-900">Capacity (optional)</label>
                    <input type="number" name="capacity" value="{{ old('capacity', $onlineClass->capacity) }}" min="0"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-900">Sort order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $onlineClass->sort_order) }}" min="0"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                </div>
            </div>
            <div>
                <label class="inline-flex items-center gap-2 text-sm font-semibold text-slate-900">
                    <input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $onlineClass->is_featured))>
                    Featured (highlight on frontend)
                </label>
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Description</label>
                <textarea name="description" rows="4"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">{{ old('description', $onlineClass->description) }}</textarea>
            </div>
            <div class="flex items-center justify-between pt-2">
                <div class="flex items-center gap-3">
                    <button type="submit"
                        class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-700">Update online class</button>
                    <a href="{{ route('admin.online-classes.index') }}" class="text-sm text-slate-600 hover:underline">Back to list</a>
                </div>
                <form method="POST" action="{{ route('admin.online-classes.destroy', $onlineClass) }}"
                    onsubmit="return confirm('Delete this online class?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-sm font-semibold text-rose-600 hover:underline">Delete</button>
                </form>
            </div>
        </form>
    </div>
@endsection
