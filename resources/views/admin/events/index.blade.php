@extends('layouts.admin')

@section('title', 'Events — Admin')
@section('page', 'Events')

@section('content')
    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <div>
            <h1 class="text-xl font-semibold text-slate-900">Events</h1>
            <p class="mt-1 text-sm text-slate-500">{{ $events->total() }} event(s) tracked</p>
        </div>
        <a href="{{ route('admin.events.create') }}" class="admin-btn-primary">New event</a>
    </div>

    <div class="grid gap-6 lg:grid-cols-[2fr_1fr]">
        <div class="admin-table-wrap">
            <div class="admin-table-scroll">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th class="w-20">Cover</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($events as $event)
                        <tr>
                            <td>
                                @if ($event->cover_url)
                                    <img src="{{ $event->cover_url }}" alt=""
                                        class="h-12 w-12 rounded-lg object-cover border border-slate-200" loading="lazy">
                                @else
                                    <div
                                        class="h-12 w-12 rounded-lg bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-400 text-xs">
                                        No
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div class="font-semibold text-slate-900">{{ $event->title }}</div>
                                <div class="text-xs text-slate-500 line-clamp-1">{{ Str::limit($event->description, 60) }}
                                </div>
                            </td>
                            <td class="text-slate-700">{{ $event->event_date?->format('M j, Y') ?? 'TBD' }}</td>
                            <td class="text-slate-700">{{ $event->location ?? '—' }}</td>
                            <td>
                                <span
                                    class="admin-pill {{ $event->status === 'open' ? 'border-emerald-200 bg-emerald-50 text-emerald-700' : 'border-slate-200 bg-slate-50 text-slate-700' }}">
                                    {{ ucfirst($event->status) }}
                                </span>
                            </td>
                            <td class="text-right">
                                <a href="{{ route('admin.events.edit', $event) }}"
                                    class="text-sm font-semibold text-emerald-700 hover:underline mr-2">Edit</a>
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
                                    <input type="hidden" name="requires_registration"
                                        value="{{ $event->requires_registration ? 1 : 0 }}">
                                    <input type="hidden" name="accepts_support"
                                        value="{{ $event->accepts_support ? 1 : 0 }}">
                                    <select name="status" class="rounded-lg border border-slate-200 text-xs px-2 py-1.5">
                                        @foreach (['upcoming', 'open', 'past', 'cancelled'] as $status)
                                            <option value="{{ $status }}" @selected($event->status === $status)>
                                                {{ ucfirst($status) }}</option>
                                        @endforeach
                                    </select>
                                    <button class="admin-btn-primary px-3 py-1.5 text-xs">Save</button>
                                </form>
                                <form action="{{ route('admin.events.destroy', $event) }}" method="POST"
                                    class="inline-block ml-2" onsubmit="return confirm('Delete this event?')">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="confirm_action" value="delete-event">
                                    <input type="hidden" name="confirm_event_id" value="{{ $event->id }}">
                                    <button class="text-xs font-semibold text-rose-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-10 text-center text-sm text-slate-500">No events yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            </div>
        </div>

        <div class="admin-card p-5">
            <h3 class="text-sm font-semibold uppercase tracking-wide text-slate-700 mb-3">Quick add</h3>
            <form method="POST" action="{{ route('admin.events.store') }}" enctype="multipart/form-data" class="space-y-3">
                @csrf
                <div>
                    <label class="text-xs font-medium text-slate-600">Cover (optional)</label>
                    <input type="file" name="cover_image" accept="image/jpeg,image/png,image/jpg,image/webp" class="mt-0.5 w-full text-xs text-slate-600 file:rounded file:border-0 file:bg-emerald-50 file:px-2 file:py-1 file:text-xs file:font-semibold file:text-emerald-700">
                    <p class="mt-1 text-[11px] text-slate-500">JPEG, PNG or WebP, max 5MB.</p>
                </div>
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
                <button class="admin-btn-primary">Add event</button>
            </form>
            <p class="mt-3 text-xs text-slate-500">Or <a href="{{ route('admin.events.create') }}"
                    class="text-emerald-600 hover:underline">create with full form</a>.</p>
        </div>
    </div>
@endsection
