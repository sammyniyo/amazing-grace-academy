<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Amazing Grace Academy')</title>
    <meta name="description"
        content="@yield('meta_description', 'Amazing Grace Academy — Choir and music academy for Sol-Fa, Staff notation, instruments, worship excellence, and ministry.')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-900 antialiased">
    {{-- Background choir aura --}}
    <div class="pointer-events-none fixed inset-0 -z-20">
        <div
            class="absolute -top-40 left-1/2 h-[520px] w-[920px] -translate-x-1/2 rounded-full bg-gradient-to-r from-emerald-200/70 via-sky-200/60 to-purple-200/70 blur-3xl">
        </div>
        <div
            class="absolute bottom-[-260px] left-1/2 h-[420px] w-[820px] -translate-x-1/2 rounded-full bg-gradient-to-r from-fuchsia-200/60 via-amber-200/55 to-emerald-200/60 blur-3xl">
        </div>
    </div>

    {{-- Navbar --}}
    <header
        class="sticky top-0 z-50 border-b border-white/80 bg-white/85 backdrop-blur-xl supports-[backdrop-filter]:bg-white/75">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6">
            <a href="{{ route('home') }}" class="group flex items-center gap-3">
                <div
                    class="grid h-10 w-10 place-items-center rounded-2xl bg-gradient-to-br from-emerald-400 via-sky-400 to-purple-500 text-slate-950 shadow-lg ring-1 ring-white/30 transition duration-300 group-hover:-translate-y-0.5 group-hover:shadow-[0_18px_45px_rgba(15,23,42,0.8)]">
                    <span class="text-base font-semibold tracking-tight">
                        A<span class="mx-[1px]">♪</span>A
                    </span>
                </div>

                <div class="leading-tight">
                    <div class="text-sm font-semibold text-slate-900">Amazing Grace Academy</div>
                    <div class="text-[11px] text-slate-500">ASA UR Nyarugenge SDA • ASSA Kigali</div>
                </div>
            </a>

            <nav class="hidden items-center gap-7 text-sm text-slate-600 md:flex">
                <a class="relative transition hover:text-emerald-500" href="{{ route('home') }}">
                    <span>Home</span>
                </a>
                <a class="relative transition hover:text-emerald-500" href="{{ route('about') }}">
                    <span>About</span>
                </a>
                <a class="relative transition hover:text-emerald-500" href="{{ route('programs') }}">
                    <span>Programs</span>
                </a>
                <a class="relative transition hover:text-emerald-500" href="{{ route('songs') }}">
                    <span>Songs</span>
                </a>
                <a class="relative transition hover:text-emerald-500" href="{{ route('leaders') }}">
                    <span>Leadership</span>
                </a>
                <a class="relative transition hover:text-emerald-500" href="{{ route('contact') }}">
                    <span>Contact</span>
                </a>
            </nav>

            <div class="flex items-center gap-2">
                <a href="{{ route('songs') }}"
                    class="hidden rounded-full border border-slate-300 bg-white px-4 py-1.5 text-xs font-semibold text-slate-800 shadow-sm backdrop-blur-md transition hover:border-emerald-400/70 hover:text-emerald-600 md:inline-flex">
                    Our Music
                </a>
                <a href="{{ route('contact') }}#join"
                    class="note-pill bg-gradient-to-r from-emerald-400 via-sky-400 to-purple-500 px-4 py-1.5 text-[11px] font-semibold text-slate-950 shadow-lg hover:brightness-110">
                    <span>Join the Academy</span>
                </a>
            </div>
        </div>
    </header>

    <main class="floating-notes">
        @yield('content')
    </main>

    <footer class="border-t border-slate-200/80 bg-white/90">
        <div class="mx-auto max-w-7xl px-6 py-12">
            <div class="grid gap-10 md:grid-cols-3">
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <div
                            class="grid h-10 w-10 place-items-center rounded-2xl bg-gradient-to-br from-emerald-400 via-sky-400 to-purple-500 text-slate-950 shadow-md">
                            <span class="text-sm font-semibold">AGA</span>
                        </div>
                        <div class="font-semibold text-slate-50">Amazing Grace Academy</div>
                    </div>
                    <p class="mt-1 text-sm text-slate-400 max-w-sm">
                        A choir and music academy within the Seventh-day Adventist Church, teaching Sol-Fa, Staff
                        notation, and instruments — freely offered for ministry and excellence.
                    </p>
                    <p class="text-xs text-slate-500">
                        “Sing to the Lord a new song; sing to the Lord, all the earth.” — Psalm 96:1
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-8 text-sm text-slate-300">
                    <div>
                        <div class="font-semibold text-slate-100">Explore</div>
                        <div class="mt-3 space-y-2">
                            <a class="block hover:text-emerald-300" href="{{ route('about') }}">About</a>
                            <a class="block hover:text-emerald-300" href="{{ route('programs') }}">Programs</a>
                            <a class="block hover:text-emerald-300" href="{{ route('songs') }}">Songs</a>
                            <a class="block hover:text-emerald-300" href="{{ route('leaders') }}">Leadership</a>
                        </div>
                    </div>
                    <div>
                        <div class="font-semibold text-slate-100">Contact</div>
                        <div class="mt-3 space-y-2 text-slate-300">
                            <div class="text-xs">
                                amazinggraceacademyrwanda@gmail.com
                            </div>
                            <div class="text-xs">
                                0788 261 729 / 0780 330 325
                            </div>
                            <div class="text-xs">
                                Kigali Bilingual Church<br>
                                ASA UR Nyarugenge • ASSA Kigali
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="font-semibold text-slate-100">Support the Ministry</div>
                    <p class="text-sm text-slate-300">
                        Contributions: <span class="font-semibold">Schimei IRATWUMVA</span> (Code 726096)
                    </p>
                    <a href="{{ route('contact') }}#support"
                        class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-emerald-400 via-sky-400 to-purple-500 px-5 py-2 text-xs font-semibold text-slate-950 shadow-lg transition hover:brightness-110">
                        Support Amazing Grace Academy
                    </a>
                    <div class="text-[11px] text-slate-500">
                        Trusted by learners, choirs, and churches across Rwanda.
                    </div>
                </div>
            </div>

            <div
                class="mt-10 flex flex-col gap-2 border-t border-slate-800 pt-6 text-[11px] text-slate-500 md:flex-row md:items-center md:justify-between">
                <div>© {{ date('Y') }} Amazing Grace Academy — ASA UR Nyarugenge SDA. All rights reserved.</div>
                <div class="flex flex-wrap gap-3">
                    <span>ASA UR Nyarugenge • ASSA Kigali • ECRF • RUM</span>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
