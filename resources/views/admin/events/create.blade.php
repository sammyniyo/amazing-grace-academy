@extends('layouts.admin')

@section('title', 'New Event — Admin')
@section('page', 'New Event')

@section('content')
    <div class="max-w-3xl">
        <form method="POST" action="{{ route('admin.events.store') }}"
            class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm space-y-4">
            @csrf
            <div>
                <label class="text-sm font-semibold text-slate-900">Title</label>
                <input name="title" value="{{ old('title') }}"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="Event title" required>
                @error('title')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm font-semibold text-slate-900">Date</label>
                    <input type="date" name="event_date" value="{{ old('event_date') }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-900">Location</label>
                    <input name="location" value="{{ old('location') }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                        placeholder="e.g. Kigali">
                </div>
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Status</label>
                <select name="status"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                    @foreach (['upcoming', 'open', 'past', 'cancelled'] as $s)
                        <option value="{{ $s }}" @selected(old('status', 'upcoming') === $s)>{{ ucfirst($s) }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Description</label>
                <textarea name="description" rows="4"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="Event details">{{ old('description') }}</textarea>
            </div>
            <div class="rounded-xl border border-slate-200 bg-slate-50/50 p-4 space-y-3">
                <h4 class="text-sm font-semibold text-slate-900">Registration & support</h4>
                <label class="flex items-center gap-2 text-sm text-slate-700">
                    <input type="checkbox" name="requires_registration" value="1"
                        {{ old('requires_registration') ? 'checked' : '' }}>
                    Requires member registration (visitors must register to attend)
                </label>
                <label class="flex items-center gap-2 text-sm text-slate-700">
                    <input type="checkbox" name="accepts_support" value="1"
                        {{ old('accepts_support') ? 'checked' : '' }}>
                    Accept support (visitors may optionally choose an amount to support when registering)
                </label>
            </div>
            <div class="flex items-center gap-3">
                <button
                    class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-700">Create
                    event</button>
                <a href="{{ route('admin.events.index') }}" class="text-sm text-slate-600 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
@endsection
