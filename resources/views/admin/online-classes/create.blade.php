@extends('layouts.admin')

@section('title', 'New online class — Admin')
@section('page', 'New online class')

@section('content')
    <div class="max-w-3xl">
        <form method="POST" action="{{ route('admin.online-classes.store') }}" enctype="multipart/form-data"
            class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm space-y-5">
            @csrf
            <div>
                <label class="text-sm font-semibold text-slate-900">Cover image</label>
                <input type="file" name="cover_image" accept="image/jpeg,image/png,image/jpg,image/webp"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm file:mr-3 file:rounded-lg file:border-0 file:bg-emerald-50 file:px-3 file:py-1.5 file:text-sm file:font-semibold file:text-emerald-700 focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                <p class="mt-1 text-xs text-slate-500">Optional. JPEG, PNG or WebP, max 2MB.</p>
                @error('cover_image')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Title</label>
                <input name="title" value="{{ old('title') }}"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="e.g. Sol-Fa Level 1 — Online" required>
                @error('title')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Slug (optional)</label>
                <input name="slug" value="{{ old('slug') }}"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="Auto-generated from title">
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Level</label>
                <select name="level"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                    @foreach (\App\Models\OnlineClass::LEVELS as $value => $label)
                        <option value="{{ $value }}" @selected(old('level', 'sol-fa') === $value)>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm font-semibold text-slate-900">Schedule summary</label>
                    <input name="schedule_summary" value="{{ old('schedule_summary') }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                        placeholder="e.g. Saturdays 3:00 PM">
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-900">Status</label>
                    <select name="status"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                        <option value="draft" @selected(old('status', 'draft') === 'draft')>Draft (hidden on frontend)</option>
                        <option value="published" @selected(old('status') === 'published')>Published (visible)</option>
                        <option value="closed" @selected(old('status') === 'closed')>Closed</option>
                    </select>
                </div>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm font-semibold text-slate-900">Starts at</label>
                    <input type="date" name="starts_at" value="{{ old('starts_at') }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-900">Ends at</label>
                    <input type="date" name="ends_at" value="{{ old('ends_at') }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                </div>
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Meeting link (Zoom / Meet URL)</label>
                <input type="url" name="meeting_link" value="{{ old('meeting_link') }}"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="https://zoom.us/j/...">
                @error('meeting_link')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm font-semibold text-slate-900">Capacity (optional)</label>
                    <input type="number" name="capacity" value="{{ old('capacity') }}" min="0"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                        placeholder="Max learners">
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-900">Sort order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', 0) }}" min="0"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                </div>
            </div>
            <div>
                <label class="inline-flex items-center gap-2 text-sm font-semibold text-slate-900">
                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                    Featured (highlight on frontend)
                </label>
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Description</label>
                <textarea name="description" rows="4"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="What learners will get from this class">{{ old('description') }}</textarea>
            </div>
            <div class="flex items-center gap-3 pt-2">
                <button type="submit"
                    class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-700">Create online class</button>
                <a href="{{ route('admin.online-classes.index') }}" class="text-sm text-slate-600 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
@endsection
