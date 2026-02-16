@extends('layouts.admin')

@section('title', 'Edit user — Admin')
@section('page', 'Edit user')

@section('content')
    <div class="max-w-2xl">
        <form method="POST" action="{{ route('admin.users.update', $user) }}"
            class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm space-y-5">
            @csrf
            @method('PUT')
            <div>
                <label class="text-sm font-semibold text-slate-900">Name</label>
                <input name="name" value="{{ old('name', $user->name) }}"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    required>
                @error('name')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Email</label>
                <input name="email" type="email" value="{{ old('email', $user->email) }}"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    required>
                @error('email')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="inline-flex items-center gap-2 text-sm font-semibold text-slate-900">
                    <input type="checkbox" name="is_admin" value="1" @checked(old('is_admin', $user->is_admin))>
                    Admin access (can sign in and use admin panel)
                </label>
            </div>
            <div class="rounded-xl border border-slate-200 bg-slate-50/50 p-4 space-y-3">
                <div class="flex items-center justify-between">
                    <h4 class="text-sm font-semibold text-slate-900">Password</h4>
                    <form method="POST" action="{{ route('admin.users.send-reset-link', $user) }}" class="inline">
                        @csrf
                        <button type="submit" class="text-xs font-semibold text-emerald-700 hover:underline">Send reset link by email</button>
                    </form>
                </div>
                <p class="text-xs text-slate-600">Or set a new password below. Leave blank to keep the current password.</p>
                <div>
                    <label class="text-sm font-medium text-slate-700">New password</label>
                    <input name="new_password" type="password" autocomplete="new-password"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                        placeholder="Leave blank to keep current">
                </div>
                <div>
                    <label class="text-sm font-medium text-slate-700">Confirm new password</label>
                    <input name="new_password_confirmation" type="password" autocomplete="new-password"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                        placeholder="Confirm new password">
                </div>
                @error('new_password')
                    <p class="text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center gap-3 pt-2">
                <button type="submit"
                    class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-700">Update user</button>
                <a href="{{ route('admin.users.index') }}" class="text-sm text-slate-600 hover:underline">Back to list</a>
            </div>
        </form>
    </div>
@endsection
