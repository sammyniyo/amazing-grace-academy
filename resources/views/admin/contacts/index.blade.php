@extends('layouts.admin')

@section('title', 'Contacts — Admin')
@section('page', 'Contact Inbox')

@section('content')
    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <table class="min-w-full text-sm">
            <thead class="bg-slate-50 text-slate-700">
                <tr>
                    <th class="px-4 py-3 text-left">From</th>
                    <th class="px-4 py-3 text-left">Topic</th>
                    <th class="px-4 py-3 text-left">Message</th>
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-right"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($messages as $message)
                    <tr>
                        <td class="px-4 py-3">
                            <a href="{{ route('admin.contacts.show', $message) }}"
                                class="font-semibold text-slate-900 hover:text-emerald-700">{{ $message->name }}</a>
                            <div class="text-xs text-slate-500">{{ $message->email ?? '—' }} • {{ $message->phone ?? '—' }}
                            </div>
                        </td>
                        <td class="px-4 py-3 text-slate-700">{{ $message->topic ?? '—' }}</td>
                        <td class="px-4 py-3 text-slate-700">{{ \Illuminate\Support\Str::limit($message->message, 120) }}
                        </td>
                        <td class="px-4 py-3">
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
                                    class="rounded-lg bg-emerald-600 px-3 py-1 text-xs font-semibold text-white">Save</button>
                            </form>
                        </td>
                        <td class="px-4 py-3 text-right">
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
                        <td colspan="5" class="px-4 py-6 text-center text-sm text-slate-500">No messages yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $messages->links() }}
    </div>
@endsection
