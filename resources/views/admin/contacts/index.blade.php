@extends('layouts.admin')

@section('title', 'Contacts — Admin')
@section('page', 'Contact Inbox')

@section('content')
    <div class="mb-6">
        <h1 class="text-xl font-semibold text-slate-900">Contact inbox</h1>
        <p class="mt-1 text-sm text-slate-500">{{ $messages->total() }} message(s)</p>
    </div>

    <div class="admin-table-wrap">
        <div class="admin-table-scroll">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>From</th>
                    <th>Topic</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($messages as $message)
                    <tr>
                        <td>
                            <a href="{{ route('admin.contacts.show', $message) }}"
                                class="font-semibold text-slate-900 hover:text-emerald-700">{{ $message->name }}</a>
                            <div class="text-xs text-slate-500">{{ $message->email ?? '—' }} • {{ $message->phone ?? '—' }}
                            </div>
                        </td>
                        <td class="text-slate-700">{{ $message->topic ?? '—' }}</td>
                        <td class="text-slate-700">{{ \Illuminate\Support\Str::limit($message->message, 120) }}
                        </td>
                        <td>
                            <form action="{{ route('admin.contacts.update', $message) }}" method="POST"
                                class="inline-flex items-center gap-2">
                                @csrf
                                @method('PUT')
                                <select name="status" class="rounded-lg border border-slate-200 text-xs px-2 py-1">
                                    @foreach (['new', 'in_progress', 'replied', 'closed'] as $status)
                                        <option value="{{ $status }}" @selected($message->status === $status)>
                                            {{ ucfirst($status) }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="admin_notes" value="{{ $message->admin_notes }}">
                                <button
                                    class="admin-btn-primary px-3 py-1.5 text-xs">Save</button>
                            </form>
                        </td>
                        <td class="text-right">
                            <form action="{{ route('admin.contacts.destroy', $message) }}" method="POST"
                                onsubmit="return confirm('Delete this message?')" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="text-xs font-semibold text-rose-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-10 text-center text-sm text-slate-500">No messages yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        </div>
    </div>

    <div class="mt-4">
        {{ $messages->links() }}
    </div>
@endsection
