<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin — Amazing Grace Academy')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-100 text-slate-900 antialiased">
    <div class="flex min-h-screen" x-data="{ sidebarOpen: false }">
        {{-- Overlay when sidebar open on mobile --}}
        <div x-show="sidebarOpen" x-cloak @click="sidebarOpen = false"
            class="fixed inset-0 z-20 bg-slate-900/50 backdrop-blur-sm md:hidden" aria-hidden="true"></div>
        <aside class="fixed md:static inset-y-0 left-0 z-30 w-64 bg-white border-r border-slate-200 flex flex-col transform transition-transform duration-200 ease-out -translate-x-full md:translate-x-0"
            :class="{ 'translate-x-0': sidebarOpen }">
            <div class="px-5 py-4 border-b border-slate-200 flex items-center gap-3">
                <div
                    class="h-10 w-10 grid place-items-center rounded-xl bg-gradient-to-br from-emerald-500 via-green-500 to-amber-400 text-white">
                    <span class="text-sm font-bold">A𝄞A</span>
                </div>
                <div>
                    <div class="text-sm font-semibold">Amazing Grace</div>
                    <div class="text-[11px] text-slate-500">Admin dashboard</div>
                </div>
            </div>
            <nav class="flex-1 px-3 py-4 space-y-0.5 text-sm font-medium overflow-y-auto">
                <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition {{ request()->routeIs('admin.dashboard') ? 'bg-emerald-50 text-emerald-700 font-semibold' : '' }}"
                    href="{{ route('admin.dashboard') }}"><span class="text-slate-400">⌂</span> Dashboard</a>
                <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition {{ request()->routeIs('admin.cohorts.*') ? 'bg-emerald-50 text-emerald-700 font-semibold' : '' }}"
                    href="{{ route('admin.cohorts.index') }}"><span class="text-slate-400">📚</span> Classes (Cohorts)</a>
                <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition {{ request()->routeIs('admin.members.*') ? 'bg-emerald-50 text-emerald-700 font-semibold' : '' }}"
                    href="{{ route('admin.members.index') }}"><span class="text-slate-400">👥</span> Members</a>
                <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition {{ request()->routeIs('admin.events.*') ? 'bg-emerald-50 text-emerald-700 font-semibold' : '' }}"
                    href="{{ route('admin.events.index') }}"><span class="text-slate-400">📅</span> Events</a>
                <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition {{ request()->routeIs('admin.event-registrations.*') ? 'bg-emerald-50 text-emerald-700 font-semibold' : '' }}"
                    href="{{ route('admin.event-registrations.index') }}"><span class="text-slate-400">✓</span> Event registrations</a>
                <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition {{ request()->routeIs('admin.online-classes.*') ? 'bg-emerald-50 text-emerald-700 font-semibold' : '' }}"
                    href="{{ route('admin.online-classes.index') }}"><span class="text-slate-400">🖥</span> Online classes</a>
                <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition {{ request()->routeIs('admin.products.*') ? 'bg-emerald-50 text-emerald-700 font-semibold' : '' }}"
                    href="{{ route('admin.products.index') }}"><span class="text-slate-400">🎵</span> Shop (Products)</a>
                <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition {{ request()->routeIs('admin.orders.*') ? 'bg-emerald-50 text-emerald-700 font-semibold' : '' }}"
                    href="{{ route('admin.orders.index') }}"><span class="text-slate-400">🛒</span> Orders</a>
                <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition {{ request()->routeIs('admin.contacts.*') ? 'bg-emerald-50 text-emerald-700 font-semibold' : '' }}"
                    href="{{ route('admin.contacts.index') }}"><span class="text-slate-400">✉</span> Contacts</a>
                <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition {{ request()->routeIs('admin.users.*') ? 'bg-emerald-50 text-emerald-700 font-semibold' : '' }}"
                    href="{{ route('admin.users.index') }}"><span class="text-slate-400">🔐</span> Admin users</a>
            </nav>
            <form method="POST" action="{{ route('logout') }}" class="px-3 pb-4">
                @csrf
                <button type="submit"
                    class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100 transition">Log out</button>
            </form>
        </aside>

        <main class="flex-1 min-w-0">
            <header
                class="sticky top-0 z-10 bg-white/90 backdrop-blur-md border-b border-slate-200 px-4 py-3 flex items-center justify-between gap-4">
                <div class="flex items-center gap-3 min-w-0">
                    <button type="button" @click="sidebarOpen = true" class="md:hidden p-2 -ml-2 rounded-lg text-slate-600 hover:bg-slate-100"
                        aria-label="Open menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                    <div class="min-w-0">
                        <div class="text-xs font-semibold uppercase tracking-wider text-emerald-700">A𝄞A Admin</div>
                        <div class="text-lg font-semibold text-slate-900 truncate">@yield('page', 'Dashboard')</div>
                    </div>
                </div>
                <div class="flex items-center gap-2 sm:gap-4 flex-shrink-0">
                    <a href="{{ route('home') }}" target="_blank" rel="noopener"
                        class="rounded-lg border border-slate-200 px-3 py-2 text-xs font-semibold text-slate-700 hover:bg-slate-50 transition hidden sm:inline-flex items-center gap-1.5">
                        <span>View site</span><span aria-hidden="true">↗</span>
                    </a>
                    <span class="hidden sm:flex items-center gap-2 text-sm text-slate-500">
                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                        <span class="truncate max-w-[140px]">{{ auth()->user()->email }}</span>
                    </span>
                </div>
            </header>

            <div class="p-4 sm:p-6 lg:p-8">
                @if (session('success'))
                    <div class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-800">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="mb-4 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                        <p class="font-semibold">Please fix the following:</p>
                        <ul class="mt-1 list-disc list-inside space-y-0.5">
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
