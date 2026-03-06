@extends('layouts.admin')

@section('title', 'Dashboard — Amazing Grace Academy')
@section('page', 'Dashboard')

@section('content')
    <div class="mb-6 admin-card p-5 sm:p-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <h1 class="text-xl font-semibold text-slate-900">Welcome back</h1>
                <p class="mt-1 text-sm text-slate-600">Manage classes, events, registrations, products, and support activity from one place.</p>
            </div>
            <div class="flex flex-wrap items-center gap-2">
                <a href="{{ route('admin.events.create') }}" class="admin-btn-ghost">Create event</a>
                <a href="{{ route('admin.products.create') }}" class="admin-btn-secondary">Add product</a>
            </div>
        </div>
    </div>

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <div class="admin-kpi">
            <div class="admin-kpi-label">Classes</div>
            <div class="admin-kpi-value">{{ $cohortCount }}</div>
            <p class="mt-1 text-xs text-slate-500">Active and archived cohorts</p>
        </div>
        <div class="admin-kpi">
            <div class="admin-kpi-label">Members</div>
            <div class="admin-kpi-value">{{ $memberCount }}</div>
            <p class="mt-1 text-xs text-slate-500">Registered learners</p>
        </div>
        <div class="admin-kpi">
            <div class="admin-kpi-label">Contact Messages</div>
            <div class="admin-kpi-value">{{ $contactCount }}</div>
            <p class="mt-1 text-xs text-slate-500">Inbox conversations</p>
        </div>
        <div class="admin-kpi">
            <div class="admin-kpi-label">Events</div>
            <div class="admin-kpi-value">{{ $eventCount }}</div>
            <p class="mt-1 text-xs text-slate-500">Upcoming and past events</p>
        </div>
        <div class="admin-kpi">
            <div class="admin-kpi-label">Products</div>
            <div class="admin-kpi-value">{{ $productCount }}</div>
            <p class="mt-1 text-xs text-slate-500">Visible in music shop</p>
        </div>
        <div class="admin-kpi">
            <div class="admin-kpi-label">Orders</div>
            <div class="admin-kpi-value">{{ $orderCount }}</div>
            <p class="mt-1 text-xs text-slate-500">Checkout orders tracked</p>
        </div>
        <div class="admin-kpi sm:col-span-2 lg:col-span-1">
            <div class="admin-kpi-label">Online classes</div>
            <div class="admin-kpi-value">{{ $onlineClassCount }}</div>
            <p class="mt-1 text-xs text-slate-500">{{ $onlineClassPublishedCount }} published</p>
        </div>
    </div>

    <div class="mt-8 grid gap-6 lg:grid-cols-2">
        <div class="admin-card p-5">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-semibold uppercase tracking-wide text-slate-700">Quick links</h3>
            </div>
            <div class="mt-4 grid gap-3 sm:grid-cols-2">
                <a class="admin-btn-ghost w-full justify-start" href="{{ route('admin.cohorts.index') }}">Classes</a>
                <a class="admin-btn-secondary w-full justify-start" href="{{ route('admin.members.index') }}">Members</a>
                <a class="admin-btn-ghost w-full justify-start" href="{{ route('admin.events.index') }}">Events</a>
                <a class="admin-btn-secondary w-full justify-start" href="{{ route('admin.online-classes.index') }}">Online classes</a>
                <a class="admin-btn-ghost w-full justify-start" href="{{ route('admin.products.index') }}">Products</a>
                <a class="admin-btn-secondary w-full justify-start" href="{{ route('admin.orders.index') }}">Orders</a>
                <a class="admin-btn-ghost w-full justify-start" href="{{ route('admin.contacts.index') }}">Contact inbox</a>
                <a class="admin-btn-secondary w-full justify-start" href="{{ route('admin.users.index') }}">Admin users</a>
            </div>
        </div>
        <div class="admin-card p-5">
            <h3 class="text-sm font-semibold uppercase tracking-wide text-slate-700">Notes</h3>
            <p class="mt-3 text-sm text-slate-600">Admin area is secured by the is_admin flag on users. Use the seeded
                account (admin@aga.local / password) or mark an existing user as admin.</p>
            <p class="mt-2 text-sm text-slate-600">Forms on the website store registrations in Members and contact inquiries
                in Contact Messages.</p>
        </div>
    </div>
@endsection
