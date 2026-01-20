<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Amazing Grace Academy')</title>
    <meta name="description" content="@yield('meta_description', 'Amazing Grace Academy — Music training in Sol-Fa and Staff notation, instruments, choir excellence, and ministry.')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-900 antialiased">
    {{-- Background glows --}}
    <div class="pointer-events-none fixed inset-0 -z-10">
        <div
            class="absolute -top-24 left-1/2 h-[520px] w-[820px] -translate-x-1/2 rounded-full
            bg-gradient-to-r from-emerald-200/55 via-sky-200/40 to-indigo-200/40 blur-3xl">
        </div>
        <div
            class="absolute top-[520px] left-1/2 h-[420px] w-[720px] -translate-x-1/2 rounded-full
            bg-gradient-to-r from-sky-200/35 via-emerald-200/25 to-purple-200/35 blur-3xl">
        </div>
    </div>

    {{-- Navbar --}}
    <header class="sticky top-0 z-50 border-b border-white/40 bg-white/60 backdrop-blur">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-6">
            <a href="{{ route('home') }}" class="group flex items-center gap-3">
                <div
                    class="grid h-10 w-10 place-items-center rounded-2xl bg-slate-900 text-white shadow-sm transition group-hover:translate-y-[-1px]">
                    <span class="text-base font-semibold tracking-tight">
                        A<span class="mx-[1px]">𝄞</span>A
                    </span>
                </div>

                <div class="leading-tight">
                    <div class="text-sm font-semibold">Amazing Grace Academy</div>
                    <div class="text-xs text-slate-500">ASA UR Nyarugenge SDA • ASSA Kigali</div>
                </div>
            </a>

            <nav class="hidden items-center gap-7 text-sm text-slate-600 md:flex">
                <a class="hover:text-slate-900" href="{{ route('home') }}">Home</a>
                <a class="hover:text-slate-900" href="{{ route('about') }}">About</a>
                <a class="hover:text-slate-900" href="{{ route('programs') }}">Programs</a>
                <a class="hover:text-slate-900" href="{{ route('songs') }}">Songs</a>
                <a class="hover:text-slate-900" href="{{ route('contact') }}">Contact</a>
            </nav>

            <div class="flex items-center gap-2">
                <a href="{{ route('songs') }}"
                    class="hidden rounded-2xl px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-white md:inline-flex">
                    Browse Songs
                </a>
                <a href="{{ route('contact') }}#join"
                    class="inline-flex items-center justify-center rounded-2xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-800">
                    Join
                </a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-slate-200/70 bg-white/60">
        <div class="mx-auto max-w-7xl px-6 py-12">
            <div class="grid gap-10 md:grid-cols-3">
                <div>
                    <div class="flex items-center gap-3">
                        <div class="grid h-10 w-10 place-items-center rounded-2xl bg-slate-900 text-white">
                            <span class="text-sm font-semibold">AGA</span>
                        </div>
                        <div class="font-semibold">Amazing Grace Academy</div>
                    </div>
                    <p class="mt-3 text-sm text-slate-600 max-w-sm">
                        A music school within the Seventh-day Adventist Church, teaching Sol-Fa and Staff notation and
                        instruments — free for all.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-8 text-sm">
                    <div>
                        <div class="font-semibold text-slate-900">Pages</div>
                        <div class="mt-3 space-y-2 text-slate-600">
                            <a class="block hover:text-slate-900" href="{{ route('about') }}">About</a>
                            <a class="block hover:text-slate-900" href="{{ route('programs') }}">Programs</a>
                            <a class="block hover:text-slate-900" href="{{ route('songs') }}">Songs</a>
                        </div>
                    </div>
                    <div>
                        <div class="font-semibold text-slate-900">Contact</div>
                        <div class="mt-3 space-y-2 text-slate-600">
                            <div>amazinggraceacademyrwanda@gmail.com</div>
                            <div>0788 261 729 / 0780 330 325</div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="font-semibold text-slate-900">Support</div>
                    <p class="mt-3 text-sm text-slate-600">
                        Contributions: Schimei IRATWUMVA (Code 726096)
                    </p>
                    <a href="{{ route('contact') }}#support"
                        class="mt-4 inline-flex rounded-2xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-800">
                        Support the Academy
                    </a>
                </div>
            </div>

            <div
                class="mt-10 flex flex-col gap-2 border-t border-slate-200/70 pt-6 text-xs text-slate-500 md:flex-row md:items-center md:justify-between">
                <div>© {{ date('Y') }} Amazing Grace Academy. All rights reserved.</div>
                <div>ASA UR Nyarugenge • ASSA Kigali • ECRF • RUM</div>
            </div>
        </div>
    </footer>
</body>

</html>
