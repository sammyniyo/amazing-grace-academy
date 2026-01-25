@extends('layouts.admin')

@section('title', 'Members — Admin')
@section('page', 'Members')

@section('content')
    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <table class="min-w-full text-sm">
            <thead class="bg-slate-50 text-slate-700">
                <tr>
                    <th class="px-4 py-3 text-left">Name</th>
                    <th class="px-4 py-3 text-left">Contact</th>
                    <th class="px-4 py-3 text-left">Instrument</th>
                    <th class="px-4 py-3 text-left">Cohort</th>
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-right"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($members as $member)
                    <tr>
                        <td class="px-4 py-3">
                            <div class="font-semibold text-slate-900">{{ $member->name }}</div>
                            <div class="text-xs text-slate-500">{{ $member->created_at->diffForHumans() }}</div>
                        </td>
                        <td class="px-4 py-3 text-slate-700">
                            {{ $member->phone ?? '—' }}<br>
                            <span class="text-xs text-slate-500">{{ $member->email ?? '—' }}</span>
                        </td>
                        <td class="px-4 py-3 text-slate-700">{{ $member->instrument_interest ?? '—' }}</td>
                        <td class="px-4 py-3 text-slate-700">{{ $member->cohort?->name ?? 'Unassigned' }}</td>
                        <td class="px-4 py-3">
                            <span class="rounded-full border px-3 py-1 text-xs font-semibold {{ $member->status === 'active' ? 'border-emerald-200 text-emerald-700 bg-emerald-50' : 'border-slate-200 text-slate-700 bg-slate-50' }}">
                                {{ ucfirst($member->status) }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-right">
                            <form action="{{ route('admin.members.update', $member) }}" method="POST" class="inline-flex items-center gap-2">
                                @csrf
                                @method('PUT')
                                <select name="status" class="rounded-lg border border-slate-200 text-xs px-2 py-1">
                                    @foreach (['applied','active','alumni'] as $status)
                                        <option value="{{ $status }}" @selected($member->status === $status)>{{ ucfirst($status) }}</option>
                                    @endforeach
                                </select>
                                <select name="cohort_id" class="rounded-lg border border-slate-200 text-xs px-2 py-1">
                                    <option value="">No cohort</option>
                                    @foreach ($cohorts as $cohort)
                                        <option value="{{ $cohort->id }}" @selected($member->cohort_id === $cohort->id)>{{ $cohort->name }}</option>
                                    @endforeach
                                </select>
                                <button class="rounded-lg bg-emerald-600 px-3 py-1 text-xs font-semibold text-white">Save</button>
                            </form>
                            <form action="{{ route('admin.members.destroy', $member) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Delete this member?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-xs font-semibold text-rose-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-6 text-center text-sm text-slate-500">No members yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $members->links() }}
    </div>
@endsection
