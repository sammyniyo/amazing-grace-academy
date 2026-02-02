@extends('layouts.admin')

@section('title', 'Dashboard — Amazing Grace Academy')
@section('page', 'Dashboard')

@section('content')
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <div class="rounded-2xl border border-emerald-100 bg-white p-4 shadow-sm">
            <div class="text-xs font-semibold text-emerald-700">Classes</div>
            <div class="mt-2 text-3xl font-bold text-slate-900">{{ $cohortCount }}</div>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
            <div class="text-xs font-semibold text-slate-700">Members</div>
            <div class="mt-2 text-3xl font-bold text-slate-900">{{ $memberCount }}</div>
        </div>
        <div class="rounded-2xl border border-amber-100 bg-white p-4 shadow-sm">
            <div class="text-xs font-semibold text-amber-700">Contact Messages</div>
            <div class="mt-2 text-3xl font-bold text-slate-900">{{ $contactCount }}</div>
        </div>
        <div class="rounded-2xl border border-sky-100 bg-white p-4 shadow-sm">
            <div class="text-xs font-semibold text-sky-700">Events</div>
            <div class="mt-2 text-3xl font-bold text-slate-900">{{ $eventCount }}</div>
        </div>
        <div class="rounded-2xl border border-emerald-100 bg-white p-4 shadow-sm">
            <div class="text-xs font-semibold text-emerald-700">Products</div>
            <div class="mt-2 text-3xl font-bold text-slate-900">{{ $productCount }}</div>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
            <div class="text-xs font-semibold text-slate-700">Orders</div>
            <div class="mt-2 text-3xl font-bold text-slate-900">{{ $orderCount }}</div>
        </div>
    </div>

    <div class="mt-8 grid gap-6 lg:grid-cols-2">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-semibold text-slate-900">Quick Links</h3>
            </div>
            <div class="mt-4 grid gap-3 sm:grid-cols-2">
                <a class="rounded-xl border border-emerald-100 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-700 hover:bg-emerald-100 transition"
                    href="{{ route('admin.cohorts.index') }}">Classes (Cohorts)</a>
                <a class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-100 transition"
                    href="{{ route('admin.members.index') }}">Members</a>
                <a class="rounded-xl border border-sky-100 bg-sky-50 px-4 py-3 text-sm font-semibold text-sky-700 hover:bg-sky-100 transition"
                    href="{{ route('admin.events.index') }}">Events</a>
                <a class="rounded-xl border border-emerald-100 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-700 hover:bg-emerald-100 transition"
                    href="{{ route('admin.products.index') }}">Shop (Products)</a>
                <a class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-100 transition"
                    href="{{ route('admin.orders.index') }}">Orders</a>
                <a class="rounded-xl border border-amber-100 bg-amber-50 px-4 py-3 text-sm font-semibold text-amber-700 hover:bg-amber-100 transition"
                    href="{{ route('admin.contacts.index') }}">Contact inbox</a>
            </div>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <h3 class="text-sm font-semibold text-slate-900">Notes</h3>
            <p class="mt-3 text-sm text-slate-600">Admin area is secured by the is_admin flag on users. Use the seeded
                account (admin@aga.local / password) or mark an existing user as admin.</p>
            <p class="mt-2 text-sm text-slate-600">Forms on the website store registrations in Members and contact inquiries
                in Contact Messages.</p>
        </div>
    </div>
@endsection
