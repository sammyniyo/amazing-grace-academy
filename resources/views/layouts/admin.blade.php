<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin — Amazing Grace Academy')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @php $viteAssets = vite_built_assets(); @endphp
    @if ($viteAssets)
        <link rel="stylesheet" href="{{ $viteAssets['css'] }}">
        <script type="module" src="{{ $viteAssets['js'] }}" defer></script>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="admin-ui min-h-screen text-slate-900 antialiased">
    @php
        $navItems = [
            ['label' => 'Dashboard', 'route' => 'admin.dashboard', 'active' => 'admin.dashboard', 'abbr' => 'DB'],
            ['label' => 'Classes', 'route' => 'admin.cohorts.index', 'active' => 'admin.cohorts.*', 'abbr' => 'CL'],
            ['label' => 'Members', 'route' => 'admin.members.index', 'active' => 'admin.members.*', 'abbr' => 'MB'],
            ['label' => 'Events', 'route' => 'admin.events.index', 'active' => 'admin.events.*', 'abbr' => 'EV'],
            ['label' => 'Event Registrations', 'route' => 'admin.event-registrations.index', 'active' => 'admin.event-registrations.*', 'abbr' => 'RG'],
            ['label' => 'Online Classes', 'route' => 'admin.online-classes.index', 'active' => 'admin.online-classes.*', 'abbr' => 'ON'],
            ['label' => 'Products', 'route' => 'admin.products.index', 'active' => 'admin.products.*', 'abbr' => 'PD'],
            ['label' => 'Orders', 'route' => 'admin.orders.index', 'active' => 'admin.orders.*', 'abbr' => 'OR'],
            ['label' => 'Contacts', 'route' => 'admin.contacts.index', 'active' => 'admin.contacts.*', 'abbr' => 'CT'],
            ['label' => 'Admin Users', 'route' => 'admin.users.index', 'active' => 'admin.users.*', 'abbr' => 'AU'],
        ];
    @endphp

    <div class="admin-shell flex min-h-screen" x-data="{ sidebarOpen: false }">
        <div x-show="sidebarOpen" x-cloak @click="sidebarOpen = false"
            class="fixed inset-0 z-20 bg-slate-900/50 backdrop-blur-sm md:hidden" aria-hidden="true"></div>

        <aside
            class="fixed md:static inset-y-0 left-0 z-30 w-72 border-r border-emerald-100/70 bg-white/95 backdrop-blur-lg flex flex-col transform transition-transform duration-200 ease-out -translate-x-full md:translate-x-0"
            :class="{ 'translate-x-0': sidebarOpen }">
            <div class="px-5 py-4 border-b border-slate-200/80 flex items-center justify-between">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 min-w-0">
                    <div
                        class="h-10 w-10 grid place-items-center rounded-xl bg-gradient-to-br from-emerald-600 via-emerald-500 to-amber-400 text-white shadow-sm font-semibold text-xs">
                        AGA
                    </div>
                    <div class="min-w-0">
                        <div class="text-sm font-semibold text-slate-900 truncate">Amazing Grace Academy</div>
                        <div class="text-[11px] text-slate-500">Administration</div>
                    </div>
                </a>
                <button type="button" @click="sidebarOpen = false"
                    class="md:hidden inline-flex items-center justify-center h-8 w-8 rounded-lg text-slate-500 hover:bg-slate-100"
                    aria-label="Close menu">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <nav class="flex-1 px-3 py-4 space-y-1.5 text-sm overflow-y-auto">
                @foreach ($navItems as $item)
                    @php $active = request()->routeIs($item['active']); @endphp
                    <a href="{{ route($item['route']) }}"
                        class="admin-sidebar-link {{ $active ? 'admin-sidebar-link-active' : '' }}">
                        <span class="admin-sidebar-dot {{ $active ? 'admin-sidebar-dot-active' : '' }}">{{ $item['abbr'] }}</span>
                        <span class="truncate">{{ $item['label'] }}</span>
                    </a>
                @endforeach
            </nav>

            <div class="px-3 py-4 border-t border-slate-200/80 space-y-2.5">
                <div class="rounded-xl border border-slate-200 bg-slate-50/80 px-3 py-2.5">
                    <p class="text-[11px] uppercase tracking-wide text-slate-500">Signed in</p>
                    <p class="text-sm font-medium text-slate-800 truncate">{{ auth()->user()->email }}</p>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="admin-btn-secondary w-full">Log out</button>
                </form>
            </div>
        </aside>

        <main class="flex-1 min-w-0">
            <header
                class="sticky top-0 z-10 border-b border-slate-200/90 bg-white/90 backdrop-blur-md px-4 py-3 sm:px-6 flex items-center justify-between gap-4">
                <div class="flex items-center gap-3 min-w-0">
                    <button type="button" @click="sidebarOpen = true"
                        class="md:hidden inline-flex items-center justify-center h-9 w-9 rounded-lg text-slate-600 hover:bg-slate-100"
                        aria-label="Open menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <div class="min-w-0">
                        <div class="text-xs font-semibold uppercase tracking-wider text-emerald-700">Admin workspace</div>
                        <div class="text-lg font-semibold text-slate-900 truncate">@yield('page', 'Dashboard')</div>
                    </div>
                </div>

                <div class="hidden sm:flex items-center gap-2 flex-shrink-0">
                    <a href="{{ route('admin.events.create') }}" class="admin-btn-ghost text-xs">New event</a>
                    <a href="{{ route('admin.products.create') }}" class="admin-btn-ghost text-xs">New product</a>
                    <a href="{{ route('home') }}" target="_blank" rel="noopener" class="admin-btn-secondary text-xs">View site</a>
                </div>
            </header>

            <div class="p-4 sm:p-6 lg:p-8">
                @if (session('success'))
                    <div class="admin-alert-success mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="admin-alert-error mb-4">
                        {{ session('error') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="admin-alert-error mb-4">
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
