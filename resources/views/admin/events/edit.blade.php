@extends('layouts.admin')

@section('title', 'Edit Event — Admin')
@section('page', 'Edit Event')

@section('content')
    <div class="max-w-3xl">
        <form method="POST" action="{{ route('admin.events.update', $event) }}" enctype="multipart/form-data"
            class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="text-sm font-semibold text-slate-900">Cover image</label>
                @if ($event->cover_url)
                    <div class="mt-1 flex items-center gap-4">
                        <img src="{{ $event->cover_url }}" alt="Current cover" class="h-24 w-24 rounded-xl object-cover border border-slate-200">
                        <span class="text-xs text-slate-500">Replace by choosing a new file below.</span>
                    </div>
                @endif
                <input type="file" name="cover_image" accept="image/jpeg,image/png,image/jpg,image/webp"
                    class="mt-2 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm file:mr-3 file:rounded-lg file:border-0 file:bg-emerald-50 file:px-3 file:py-1.5 file:text-sm file:font-semibold file:text-emerald-700 focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                <p class="mt-1 text-xs text-slate-500">JPEG, PNG or WebP, max 5MB. Optional.</p>
                @error('cover_image')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Title</label>
                <input name="title" value="{{ old('title', $event->title) }}"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    required>
                @error('title')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm font-semibold text-slate-900">Date</label>
                    <input type="date" name="event_date"
                        value="{{ old('event_date', optional($event->event_date)->format('Y-m-d')) }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-900">Location</label>
                    <input name="location" value="{{ old('location', $event->location) }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                </div>
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Status</label>
                <select name="status"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                    @foreach (['upcoming', 'open', 'past', 'cancelled'] as $s)
                        <option value="{{ $s }}" @selected(old('status', $event->status) === $s)>{{ ucfirst($s) }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Description</label>
                <textarea name="description" rows="4"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">{{ old('description', $event->description) }}</textarea>
            </div>
            <div class="rounded-xl border border-slate-200 bg-slate-50/50 p-4 space-y-3">
                <h4 class="text-sm font-semibold text-slate-900">Registration & support</h4>
                <label class="flex items-center gap-2 text-sm text-slate-700">
                    <input type="checkbox" name="requires_registration" value="1"
                        {{ old('requires_registration', $event->requires_registration) ? 'checked' : '' }}>
                    Requires member registration (visitors must register to attend)
                </label>
                <label class="flex items-center gap-2 text-sm text-slate-700">
                    <input type="checkbox" name="accepts_support" value="1"
                        {{ old('accepts_support', $event->accepts_support) ? 'checked' : '' }}>
                    Accept support (visitors may optionally choose an amount to support when registering)
                </label>
                @if ($event->registrations()->exists())
                    <p class="text-sm text-slate-600 pt-2">
                        <a href="{{ route('admin.event-registrations.index', ['event_id' => $event->id]) }}"
                            class="text-emerald-600 hover:underline font-semibold">{{ $event->registrations()->count() }}
                            registration(s)</a>
                    </p>
                @endif
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <button
                        class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-700">Update
                        event</button>
                    <a href="{{ route('admin.events.index') }}" class="text-sm text-slate-600 hover:underline">Cancel</a>
                </div>
                <button type="submit" form="delete-event-form"
                    class="text-sm font-semibold text-rose-600 hover:underline"
                    onclick="return confirm('Delete this event?');">
                    Delete event
                </button>
            </div>
        </form>
        <form id="delete-event-form" method="POST" action="{{ route('admin.events.destroy', $event) }}" class="hidden">
            @csrf
            @method('DELETE')
            <input type="hidden" name="confirm_action" value="delete-event">
            <input type="hidden" name="confirm_event_id" value="{{ $event->id }}">
        </form>
    </div>
@endsection
