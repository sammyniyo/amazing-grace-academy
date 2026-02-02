@extends('layouts.admin')

@section('title', 'Event Registrations — Admin')
@section('page', 'Event Registrations')

@section('content')
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
        <form method="GET" action="{{ route('admin.event-registrations.index') }}" class="flex flex-wrap items-center gap-2">
            <label class="text-sm font-medium text-slate-600">Event</label>
            <select name="event_id" onchange="this.form.submit()"
                class="rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                <option value="">All events</option>
                @foreach ($events as $e)
                    <option value="{{ $e->id }}" @selected(request('event_id') == $e->id)>{{ $e->title }} @if ($e->event_date)
                            ({{ $e->event_date->format('M j, Y') }})
                        @endif
                    </option>
                @endforeach
            </select>
        </form>
    </div>

    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-slate-50 text-slate-700">
                    <tr>
                        <th class="px-4 py-3 text-left">Event</th>
                        <th class="px-4 py-3 text-left">Name</th>
                        <th class="px-4 py-3 text-left">Contact</th>
                        <th class="px-4 py-3 text-left">Support (RWF)</th>
                        <th class="px-4 py-3 text-left">Registered</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($registrations as $reg)
                        <tr>
                            <td class="px-4 py-3">
                                <a href="{{ route('admin.events.edit', $reg->event) }}"
                                    class="font-medium text-slate-900 hover:text-emerald-700">{{ $reg->event?->title ?? '—' }}</a>
                            </td>
                            <td class="px-4 py-3 font-semibold text-slate-900">{{ $reg->name }}</td>
                            <td class="px-4 py-3 text-slate-700">
                                {{ $reg->phone ?? '—' }}<br>
                                <span class="text-xs text-slate-500">{{ $reg->email ?? '—' }}</span>
                            </td>
                            <td class="px-4 py-3">
                                @if ($reg->support_amount)
                                    <span
                                        class="font-medium text-emerald-700">{{ number_format($reg->support_amount) }}</span>
                                @else
                                    <span class="text-slate-400">—</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-slate-500 text-xs">{{ $reg->created_at->format('M j, Y H:i') }}</td>
                        </tr>
                        @if ($reg->notes)
                            <tr>
                                <td colspan="5" class="px-4 py-2 bg-slate-50/50 text-xs text-slate-600">
                                    {{ \Illuminate\Support\Str::limit($reg->notes, 120) }}</td>
                            </tr>
                        @endif
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-8 text-center text-slate-500">No event registrations yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        {{ $registrations->links() }}
    </div>
@endsection
