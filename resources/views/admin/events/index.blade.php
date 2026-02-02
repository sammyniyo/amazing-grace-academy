@extends('layouts.admin')

@section('title', 'Events — Admin')
@section('page', 'Events')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-xl font-semibold text-slate-900">Events</h1>
        <a href="{{ route('admin.events.create') }}"
            class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-emerald-700">New
            event</a>
    </div>
    <div class="grid gap-6 lg:grid-cols-[2fr_1fr]">
        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
            <table class="min-w-full text-sm">
                <thead class="bg-slate-50 text-slate-700">
                    <tr>
                        <th class="px-4 py-3 text-left">Title</th>
                        <th class="px-4 py-3 text-left">Date</th>
                        <th class="px-4 py-3 text-left">Location</th>
                        <th class="px-4 py-3 text-left">Status</th>
                        <th class="px-4 py-3 text-right"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($events as $event)
                        <tr>
                            <td class="px-4 py-3">
                                <div class="font-semibold text-slate-900">{{ $event->title }}</div>
                                <div class="text-xs text-slate-500">{{ $event->description }}</div>
                            </td>
                            <td class="px-4 py-3 text-slate-700">{{ $event->event_date?->format('M j, Y') ?? 'TBD' }}</td>
                            <td class="px-4 py-3 text-slate-700">{{ $event->location ?? '—' }}</td>
                            <td class="px-4 py-3">
                                <span
                                    class="rounded-full border px-3 py-1 text-xs font-semibold {{ $event->status === 'open' ? 'border-emerald-200 text-emerald-700 bg-emerald-50' : 'border-slate-200 text-slate-700 bg-slate-50' }}">
                                    {{ ucfirst($event->status) }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-right">
                                <form action="{{ route('admin.events.update', $event) }}" method="POST"
                                    class="inline-flex items-center gap-2">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" name="title" value="{{ $event->title }}"
                                        class="rounded-lg border border-slate-200 text-xs px-2 py-1" hidden>
                                    <input type="date" name="event_date"
                                        value="{{ optional($event->event_date)->format('Y-m-d') }}"
                                        class="rounded-lg border border-slate-200 text-xs px-2 py-1" hidden>
                                    <input type="text" name="location" value="{{ $event->location }}"
                                        class="rounded-lg border border-slate-200 text-xs px-2 py-1" hidden>
                                    <select name="status" class="rounded-lg border border-slate-200 text-xs px-2 py-1">
                                        @foreach (['upcoming', 'open', 'past', 'cancelled'] as $status)
                                            <option value="{{ $status }}" @selected($event->status === $status)>
                                                {{ ucfirst($status) }}</option>
                                        @endforeach
                                    </select>
                                    <button
                                        class="rounded-lg bg-emerald-600 px-3 py-1 text-xs font-semibold text-white">Save</button>
                                </form>
                                <form action="{{ route('admin.events.destroy', $event) }}" method="POST"
                                    class="inline-block ml-2" onsubmit="return confirm('Delete this event?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-xs font-semibold text-rose-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-6 text-center text-sm text-slate-500">No events yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm p-5">
            <h3 class="text-sm font-semibold text-slate-900 mb-3">Quick add</h3>
            <form method="POST" action="{{ route('admin.events.store') }}" class="space-y-3">
                @csrf
                <input name="title"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="Event title" required>
                <input type="date" name="event_date"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                <input name="location"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="Location">
                <select name="status"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                    @foreach (['upcoming', 'open', 'past', 'cancelled'] as $status)
                        <option value="{{ $status }}">{{ ucfirst($status) }}</option>
                    @endforeach
                </select>
                <textarea name="description" rows="3"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="Description"></textarea>
                <button
                    class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-700">Add
                    event</button>
            </form>
            <p class="mt-3 text-xs text-slate-500">Or <a href="{{ route('admin.events.create') }}"
                    class="text-emerald-600 hover:underline">create with full form</a>.</p>
        </div>
    </div>
@endsection
