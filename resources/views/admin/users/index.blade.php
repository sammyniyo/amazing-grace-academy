@extends('layouts.admin')

@section('title', 'Admin users — Admin')
@section('page', 'Admin users')

@section('content')
    <div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-xl font-semibold text-slate-900">Admin users</h1>
            <p class="mt-1 text-sm text-slate-500">Manage who can access the admin panel. Toggle admin access and set or reset passwords.</p>
        </div>
        <a href="{{ route('admin.users.create') }}"
            class="admin-btn-primary whitespace-nowrap">Add user</a>
    </div>
    <div class="admin-table-wrap">
        <div class="admin-table-scroll">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Admin access</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $u)
                    <tr>
                        <td class="font-medium text-slate-900">{{ $u->name }}</td>
                        <td class="text-slate-700">{{ $u->email }}</td>
                        <td>
                            @if ($u->is_admin)
                                <span class="admin-pill border-emerald-200 bg-emerald-50 text-emerald-700">Yes</span>
                            @else
                                <span class="admin-pill border-slate-200 bg-slate-100 text-slate-600">No</span>
                            @endif
                        </td>
                        <td class="text-right">
                            <a href="{{ route('admin.users.edit', $u) }}"
                                class="text-sm font-semibold text-emerald-700 hover:underline">Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-10 text-center text-slate-500">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        </div>
    </div>
    @if ($users->hasPages())
        <div class="mt-4">
            {{ $users->links() }}
        </div>
    @endif
@endsection
