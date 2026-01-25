@extends('layouts.admin')

@section('title', 'Cohorts — Admin')
@section('page', 'Cohorts')

@section('content')
    <div class="flex items-center justify-between gap-3">
        <h1 class="text-xl font-semibold text-slate-900">Cohorts</h1>
        <a href="{{ route('admin.cohorts.create') }}" class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-emerald-700">New Cohort</a>
    </div>

    <div class="mt-4 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <table class="min-w-full text-sm">
            <thead class="bg-slate-50 text-slate-700">
                <tr>
                    <th class="px-4 py-3 text-left">Name</th>
                    <th class="px-4 py-3 text-left">Dates</th>
                    <th class="px-4 py-3 text-left">Location</th>
                    <th class="px-4 py-3 text-left">Capacity</th>
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-right"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($cohorts as $cohort)
                    <tr>
                        <td class="px-4 py-3">
                            <div class="font-semibold text-slate-900">{{ $cohort->name }}</div>
                            <div class="text-xs text-slate-500">{{ $cohort->code }}</div>
                        </td>
                        <td class="px-4 py-3 text-slate-700">
                            {{ $cohort->start_date?->format('M j, Y') }} @if($cohort->end_date) — {{ $cohort->end_date->format('M j, Y') }} @endif
                        </td>
                        <td class="px-4 py-3 text-slate-700">{{ $cohort->location ?? '—' }}</td>
                        <td class="px-4 py-3 text-slate-700">{{ $cohort->capacity }}</td>
                        <td class="px-4 py-3">
                            <span class="rounded-full border px-3 py-1 text-xs font-semibold {{ $cohort->status === 'active' ? 'border-emerald-200 text-emerald-700 bg-emerald-50' : 'border-slate-200 text-slate-700 bg-slate-50' }}">
                                {{ ucfirst($cohort->status) }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.cohorts.edit', $cohort) }}" class="text-sm font-semibold text-emerald-700 hover:underline">Edit</a>
                            <form action="{{ route('admin.cohorts.destroy', $cohort) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Delete this cohort?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-sm font-semibold text-rose-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-6 text-center text-sm text-slate-500">No cohorts yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $cohorts->links() }}
    </div>
@endsection
