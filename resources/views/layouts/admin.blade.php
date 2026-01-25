<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin — Amazing Grace Academy')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50 text-slate-900">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-white border-r border-slate-200 hidden md:flex flex-col">
            <div class="px-5 py-4 border-b border-slate-200 flex items-center gap-3">
                <div class="h-10 w-10 grid place-items-center rounded-xl bg-gradient-to-br from-emerald-500 via-green-500 to-amber-400 text-white">
                    <span class="text-sm font-bold">A𝄞A</span>
                </div>
                <div>
                    <div class="text-sm font-semibold">Amazing Grace</div>
                    <div class="text-[11px] text-slate-500">Admin dashboard</div>
                </div>
            </div>
            <nav class="flex-1 px-3 py-4 space-y-1 text-sm font-medium">
                <a class="flex items-center gap-2 rounded-lg px-3 py-2 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="flex items-center gap-2 rounded-lg px-3 py-2 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition" href="{{ route('admin.cohorts.index') }}">Cohorts</a>
                <a class="flex items-center gap-2 rounded-lg px-3 py-2 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition" href="{{ route('admin.members.index') }}">Members</a>
                <a class="flex items-center gap-2 rounded-lg px-3 py-2 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition" href="{{ route('admin.events.index') }}">Events</a>
                <a class="flex items-center gap-2 rounded-lg px-3 py-2 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition" href="{{ route('admin.products.index') }}">Albums & Shop</a>
                <a class="flex items-center gap-2 rounded-lg px-3 py-2 text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition" href="{{ route('admin.contacts.index') }}">Contacts</a>
            </nav>
            <form method="POST" action="{{ route('logout') }}" class="px-3 pb-4">
                @csrf
                <button class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100">Log out</button>
            </form>
        </aside>

        <main class="flex-1">
            <header class="sticky top-0 z-10 bg-white/80 backdrop-blur border-b border-slate-200 px-4 py-3 flex items-center justify-between">
                <div>
                    <div class="text-xs font-semibold uppercase tracking-[0.16em] text-emerald-700">A𝄞A Admin</div>
                    <div class="text-lg font-semibold text-slate-900">@yield('page', 'Dashboard')</div>
                </div>
                <div class="hidden sm:flex items-center gap-3 text-sm text-slate-600">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span> Logged in as {{ auth()->user()->email }}
                </div>
            </header>

            <div class="p-4 sm:p-6 lg:p-8">
                @if (session('success'))
                    <div class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
