@extends('layouts.admin')

@section('title', 'Edit Cohort — Admin')
@section('page', 'Edit Cohort')

@section('content')
    <div class="max-w-3xl">
        <form method="POST" action="{{ route('admin.cohorts.update', $cohort) }}" class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="text-sm font-semibold text-slate-900">Name</label>
                <input name="name" value="{{ old('name', $cohort->name) }}" class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100" required>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm font-semibold text-slate-900">Code</label>
                    <input name="code" value="{{ old('code', $cohort->code) }}" class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100" required>
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-900">Location</label>
                    <input name="location" value="{{ old('location', $cohort->location) }}" class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                </div>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm font-semibold text-slate-900">Start date</label>
                    <input type="date" name="start_date" value="{{ old('start_date', optional($cohort->start_date)->format('Y-m-d')) }}" class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100" required>
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-900">End date</label>
                    <input type="date" name="end_date" value="{{ old('end_date', optional($cohort->end_date)->format('Y-m-d')) }}" class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                </div>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm font-semibold text-slate-900">Status</label>
                    <select name="status" class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                        @foreach (['upcoming','active','completed'] as $status)
                            <option value="{{ $status }}" @selected(old('status', $cohort->status) === $status)>{{ ucfirst($status) }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-900">Capacity</label>
                    <input type="number" name="capacity" value="{{ old('capacity', $cohort->capacity) }}" class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100" min="1">
                </div>
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Description</label>
                <textarea name="description" rows="3" class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">{{ old('description', $cohort->description) }}</textarea>
            </div>
            <div class="flex items-center gap-3">
                <button class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-700">Update cohort</button>
                <a href="{{ route('admin.cohorts.index') }}" class="text-sm text-slate-600 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
@endsection
