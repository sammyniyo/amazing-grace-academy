<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Amazing Grace Academy')</title>
    <meta name="description"
        content="@yield('meta_description', 'Amazing Grace Academy — Choir and music academy for Sol-Fa, Staff notation, instruments, worship excellence, and ministry.')">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SzlrxWriC3XhY1Aw4p3p8Z3QYxkS2Q5u3zGqZ1rsSLjJ9tN5B+I5p4v6jF9CUG65p7qD1R6q5rI1w3y5x6Z5CQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-900 antialiased">
    {{-- Background choir aura --}}
    <div class="pointer-events-none fixed inset-0 -z-20">
        <div
            class="absolute -top-40 left-1/2 h-[520px] w-[920px] -translate-x-1/2 rounded-full bg-gradient-to-r from-emerald-200/70 via-green-200/60 to-lime-200/70 blur-3xl">
        </div>
        <div
            class="absolute bottom-[-260px] left-1/2 h-[420px] w-[820px] -translate-x-1/2 rounded-full bg-gradient-to-r from-emerald-100/70 via-lime-200/55 to-green-200/60 blur-3xl">
        </div>
    </div>

    {{-- Navbar --}}
    <header class="sticky top-3 left-0 right-0 z-50">
        <div
            class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 rounded-full border border-emerald-100 bg-white shadow-lg shadow-emerald-100/40">
            <a href="{{ route('home') }}" class="group flex items-center gap-3">
                <div
                    class="grid h-10 w-10 place-items-center rounded-2xl bg-gradient-to-br from-emerald-400 via-green-400 to-lime-400 text-slate-950 shadow-lg ring-1 ring-white/30 transition duration-300 group-hover:-translate-y-0.5 group-hover:shadow-[0_18px_45px_rgba(15,23,42,0.4)]">
                    <span class="text-base font-semibold tracking-tight">
                        A<span class="mx-[1px]">♪</span>A
                    </span>
                </div>

                <div class="leading-tight">
                    <div class="text-sm font-semibold text-slate-900">Amazing Grace Academy</div>
                    <div class="text-[11px] text-slate-500">ASA UR Nyarugenge SDA • ASSA Kigali</div>
                </div>
            </a>

            <nav class="hidden items-center gap-6 text-sm font-medium text-slate-700 md:flex">
                <a class="relative transition hover:text-emerald-600" href="{{ route('home') }}">
                    <span>Home</span>
                </a>
                <a class="relative transition hover:text-emerald-600" href="{{ route('about') }}">
                    <span>About</span>
                </a>
                <a class="relative transition hover:text-emerald-600" href="{{ route('programs') }}">
                    <span>Programs</span>
                </a>
                <a class="relative transition hover:text-emerald-600" href="{{ route('education') }}">
                    <span>Class Education</span>
                </a>
                <a class="relative transition hover:text-emerald-600" href="{{ route('songs') }}">
                    <span>Music Shop</span>
                </a>
                <a class="relative transition hover:text-emerald-600" href="{{ route('leaders') }}">
                    <span>Leadership</span>
                </a>
                <a class="relative transition hover:text-emerald-600" href="{{ route('contact') }}">
                    <span>Contact</span>
                </a>
                <a class="relative transition hover:text-emerald-600" href="{{ route('support') }}">
                    <span>Support</span>
                </a>
            </nav>

            <div class="flex items-center gap-2">
                <a href="{{ url('/register') }}"
                    class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-amber-400 to-orange-500 px-5 py-2 text-xs font-semibold text-white shadow-sm transition hover:brightness-110">
                    <span>Class Register</span>
                </a>
            </div>
        </div>
    </header>

    <main class="floating-notes pt-6">
        @yield('content')
    </main>

    <footer class="relative bg-gradient-to-b from-slate-50 to-white text-slate-700">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="h-12 w-12 grid place-items-center rounded-2xl bg-white shadow border border-emerald-100">
                            <span class="text-lg font-bold text-emerald-700">AGA</span>
                        </div>
                        <h3 class="text-xl font-bold bg-gradient-to-r from-emerald-600 to-amber-600 bg-clip-text text-transparent">
                            Amazing Grace Academy
                        </h3>
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Sharing the love of Christ through sacred music since 2016.
                    </p>
                    <div class="flex gap-4">
                        <div class="text-center">
                            <p class="text-lg font-bold text-emerald-600">25+</p>
                            <p class="text-xs text-slate-500">Years</p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-bold text-amber-600">700+</p>
                            <p class="text-xs text-slate-500">Students</p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-bold text-blue-600">4</p>
                            <p class="text-xs text-slate-500">Albums</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="text-sm font-semibold text-slate-900 mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">About Us</a></li>
                        <li><a href="{{ route('programs') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Programs</a></li>
                        <li><a href="{{ route('education') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Class Education</a></li>
                        <li><a href="{{ route('songs') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Music Shop</a></li>
                        <li><a href="{{ route('leaders') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Leadership</a></li>
                        <li><a href="{{ route('contact') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Contact</a></li>
                        <li><a href="{{ route('support') }}" class="text-slate-600 hover:text-emerald-600 transition-colors">Support</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-sm font-semibold text-slate-900 mb-4">Get in Touch</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-2">
                            <span class="text-emerald-600 mt-0.5">✉</span>
                            <a href="mailto:amazinggraceacademyrwanda@gmail.com"
                                class="text-slate-600 hover:text-emerald-600 transition-colors break-all">
                                amazinggraceacademyrwanda@gmail.com
                            </a>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-600 mt-0.5">☎</span>
                            <a href="tel:+250788261729" class="text-slate-600 hover:text-amber-600 transition-colors">
                                0788 261 729 / 0780 330 325
                            </a>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-600 mt-0.5">📍</span>
                            <p class="text-slate-600">ASA UR Nyarugenge SDA<br>Kigali Bilingual Church</p>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-sm font-semibold text-slate-900 mb-4">Stay Connected</h4>
                    <p class="text-slate-600 text-xs mb-3">
                        Get updates on events and new music
                    </p>
                    <div class="mb-4">
                        <div class="flex gap-2">
                            <input type="email" placeholder="Your email"
                                class="flex-1 px-3 py-2 bg-white border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-sm placeholder-slate-400">
                            <button
                                class="px-4 py-2 bg-emerald-600 text-white rounded-lg text-sm font-medium hover:bg-emerald-700 transition-colors">
                                Join
                            </button>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="#" class="w-8 h-8 bg-slate-100 rounded-lg flex items-center justify-center text-slate-600 hover:bg-blue-600 hover:text-white transition" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-slate-100 rounded-lg flex items-center justify-center text-slate-600 hover:bg-gradient-to-br hover:from-purple-600 hover:to-pink-600 hover:text-white transition" aria-label="Instagram">
                            <i class="fa-brands fa-instagram text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-slate-100 rounded-lg flex items-center justify-center text-slate-600 hover:bg-red-600 hover:text-white transition" aria-label="YouTube">
                            <i class="fa-brands fa-youtube text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-slate-100 rounded-lg flex items-center justify-center text-slate-600 hover:bg-black hover:text-white transition" aria-label="TikTok">
                            <i class="fa-brands fa-tiktok text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-slate-100 rounded-lg flex items-center justify-center text-slate-600 hover:bg-green-500 hover:text-white transition" aria-label="Spotify">
                            <i class="fa-brands fa-spotify text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-slate-200">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <p class="text-slate-600 text-xs text-center md:text-left">
                        © {{ date('Y') }} <span class="text-emerald-600 font-semibold">Amazing Grace Academy</span> - ASA UR Nyarugenge SDA. All rights reserved.
                    </p>
                    <div class="flex items-center gap-4 text-xs text-slate-500">
                        <a href="{{ route('privacy') }}" class="hover:text-emerald-600 transition">Privacy</a>
                        <a href="{{ route('terms') }}" class="hover:text-emerald-600 transition">Terms</a>
                        <a href="{{ route('contact') }}" class="hover:text-emerald-600 transition">Contact</a>
                    </div>
                </div>

                <div class="mt-6 text-center">
                    <div class="inline-block bg-gradient-to-r from-emerald-50 to-amber-50 rounded-lg px-6 py-3 border border-emerald-200">
                        <p class="text-slate-700 italic text-xs">
                            "Make a joyful noise to the Lord, all the earth!"
                        </p>
                        <p class="text-emerald-600 font-semibold text-xs mt-0.5">— Psalm 100:1</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
