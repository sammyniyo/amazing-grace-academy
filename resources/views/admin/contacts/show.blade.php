@extends('layouts.admin')

@section('title', 'Contact — Admin')
@section('page', 'Contact message')

@section('content')
    <div class="max-w-3xl space-y-6">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="flex flex-wrap items-start justify-between gap-4">
                <div>
                    <h2 class="text-lg font-semibold text-slate-900">{{ $contact->name }}</h2>
                    <div class="mt-1 text-sm text-slate-500">{{ $contact->email ?? '—' }} · {{ $contact->phone ?? '—' }}
                    </div>
                    @if ($contact->topic)
                        <div class="mt-1"><span
                                class="rounded-full bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-700">{{ $contact->topic }}</span>
                        </div>
                    @endif
                    <div class="mt-2 text-xs text-slate-400">Received {{ $contact->created_at->format('M j, Y H:i') }}</div>
                </div>
                <form action="{{ route('admin.contacts.update', $contact) }}" method="POST"
                    class="inline-flex items-center gap-2">
                    @csrf
                    @method('PUT')
                    <select name="status"
                        class="rounded-lg border border-slate-200 text-sm px-3 py-1.5 focus:border-emerald-300">
                        @foreach (['new', 'in_progress', 'replied', 'closed'] as $s)
                            <option value="{{ $s }}" @selected($contact->status === $s)>
                                {{ ucfirst(str_replace('_', ' ', $s)) }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="admin_notes" value="{{ $contact->admin_notes ?? '' }}">
                    <button class="rounded-lg bg-emerald-600 px-3 py-1.5 text-sm font-semibold text-white">Save
                        status</button>
                </form>
            </div>
            <div class="mt-6 border-t border-slate-100 pt-6">
                <h3 class="text-sm font-semibold text-slate-700">Message</h3>
                <p class="mt-2 whitespace-pre-wrap text-sm text-slate-600">{{ $contact->message ?: '—' }}</p>
            </div>
        </div>

        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <h3 class="text-sm font-semibold text-slate-900">Admin notes</h3>
            <form action="{{ route('admin.contacts.update', $contact) }}" method="POST" class="mt-3">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="{{ $contact->status }}">
                <textarea name="admin_notes" rows="4"
                    class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="Internal notes (not visible to sender)">{{ old('admin_notes', $contact->admin_notes) }}</textarea>
                <button
                    class="mt-3 rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-700">Save
                    notes</button>
            </form>
        </div>

        <div class="flex items-center gap-3">
            <a href="{{ route('admin.contacts.index') }}" class="text-sm font-semibold text-slate-600 hover:underline">←
                Back to inbox</a>
            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST"
                onsubmit="return confirm('Delete this message?');" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-sm font-semibold text-rose-600 hover:underline">Delete</button>
            </form>
        </div>
    </div>
@endsection
