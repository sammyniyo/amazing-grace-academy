@extends('layouts.admin')

@section('title', 'Online classes — Admin')
@section('page', 'Online classes')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-xl font-semibold text-slate-900">Online classes</h1>
        <a href="{{ route('admin.online-classes.create') }}"
            class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-emerald-700">New online class</a>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
        <table class="min-w-full text-sm">
            <thead class="bg-slate-50 text-slate-700">
                <tr>
                    <th class="px-4 py-3 text-left w-20">Cover</th>
                    <th class="px-4 py-3 text-left">Title</th>
                    <th class="px-4 py-3 text-left">Level</th>
                    <th class="px-4 py-3 text-left">Schedule</th>
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-right"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($classes as $class)
                    <tr>
                        <td class="px-4 py-3">
                            @if ($class->cover_url)
                                <img src="{{ $class->cover_url }}" alt="" class="h-12 w-12 rounded-lg object-cover border border-slate-200" loading="lazy">
                            @else
                                <div class="h-12 w-12 rounded-lg bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-400 text-xs">—</div>
                            @endif
                        </td>
                        <td class="px-4 py-3">
                            <a href="{{ route('admin.online-classes.edit', $class) }}"
                                class="font-semibold text-slate-900 hover:text-emerald-700">{{ $class->title }}</a>
                            @if ($class->is_featured)
                                <span class="ml-1 text-amber-600" title="Featured">★</span>
                            @endif
                            <div class="text-xs text-slate-500">{{ $class->slug }}</div>
                        </td>
                        <td class="px-4 py-3 text-slate-700">{{ \App\Models\OnlineClass::LEVELS[$class->level] ?? $class->level }}</td>
                        <td class="px-4 py-3 text-slate-700">{{ $class->schedule_summary ?? '—' }}</td>
                        <td class="px-4 py-3">
                            @if ($class->status === 'published')
                                <span class="rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 px-3 py-1 text-xs font-semibold">Published</span>
                            @elseif ($class->status === 'closed')
                                <span class="rounded-full bg-slate-100 text-slate-600 border border-slate-200 px-3 py-1 text-xs font-semibold">Closed</span>
                            @else
                                <span class="rounded-full bg-amber-50 text-amber-700 border border-amber-200 px-3 py-1 text-xs font-semibold">Draft</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.online-classes.edit', $class) }}"
                                class="text-sm font-semibold text-emerald-700 hover:underline">Edit</a>
                            <form action="{{ route('admin.online-classes.destroy', $class) }}" method="POST"
                                class="inline-block ml-2" onsubmit="return confirm('Delete this online class?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-xs font-semibold text-rose-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-10 text-center text-slate-500">
                            <p class="font-medium">No online classes yet.</p>
                            <p class="mt-1 text-xs">Create one to show on the frontend when you launch.</p>
                            <a href="{{ route('admin.online-classes.create') }}" class="mt-3 inline-block rounded-lg bg-emerald-600 px-3 py-2 text-sm font-semibold text-white hover:bg-emerald-700">New online class</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if ($classes->hasPages())
        <div class="mt-4">
            {{ $classes->links() }}
        </div>
    @endif
@endsection
