<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Amazing Grace Academy')</title>
    <meta name="description" content="@yield('meta_description', 'Amazing Grace Academy — Choir and music academy for Sol-Fa, Staff notation, instruments, worship excellence, and ministry.')">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,500&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap"
        rel="stylesheet">
    {{-- Load Font Awesome async so it doesn't block first paint --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SzlrxWriC3XhY1Aw4p3p8Z3QYxkS2Q5u3zGqZ1rsSLjJ9tN5B+I5p4v6jF9CUG65p7qD1R6q5rI1w3y5x6Z5CQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            crossorigin="anonymous">
    </noscript>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cream-100 text-ink-900 antialiased font-sans">
    <div id="top"></div>
    {{-- Ambient background orbs --}}
    <div class="pointer-events-none fixed inset-0 -z-20 overflow-hidden">
        <div
            class="absolute -top-48 left-1/2 h-[560px] w-[960px] -translate-x-1/2 rounded-full bg-gradient-to-r from-sage-200/50 via-sage-100/40 to-gold-200/40 blur-3xl hero-orb">
        </div>
        <div class="absolute top-1/2 -left-32 h-[400px] w-[400px] rounded-full bg-gold-200/25 blur-3xl"></div>
        <div class="absolute bottom-[-280px] right-1/4 h-[480px] w-[720px] rounded-full bg-gradient-to-r from-sage-100/50 via-gold-100/30 to-sage-200/40 blur-3xl hero-orb"
            style="animation-delay: 2s;"></div>
    </div>

    {{-- Scroll progress bar --}}
    <div class="fixed top-0 left-0 right-0 h-[2px] bg-transparent z-50">
        <div id="scroll-progress"
            class="h-full w-0 bg-gradient-to-r from-sage-500 to-gold-500 transition-all duration-300 ease-out"></div>
    </div>

    {{-- Navbar (pill style like reference) --}}
    @php
        $pillLink = fn(bool $active) => 'ui-pill-link ' . ($active ? 'ui-pill-link-active' : '');
    @endphp

    <header x-data="{ open: false }" class="sticky top-0 z-40">
        <div class="mx-auto max-w-7xl px-6 pt-5">
            <div class="ui-pill-surface px-3 py-2">
                <div class="flex items-center justify-between gap-3">
                    <nav class="hidden md:flex items-center gap-1 ui-pill-nav">
                        <a href="{{ route('home') }}" class="{{ $pillLink(request()->routeIs('home')) }}">Home</a>
                        <a href="{{ route('about') }}" class="{{ $pillLink(request()->routeIs('about')) }}">About</a>
                        <a href="{{ route('programs') }}"
                            class="{{ $pillLink(request()->routeIs('programs')) }}">Programs</a>
                        <a href="{{ route('events') }}" class="{{ $pillLink(request()->routeIs('events')) }}">Events</a>
                        <a href="{{ route('songs') }}" class="{{ $pillLink(request()->routeIs('songs')) }}">Shop</a>
                        <a href="{{ route('contact') }}"
                            class="{{ $pillLink(request()->routeIs('contact')) }}">Contact</a>
                    </nav>

                    <a href="{{ route('home') }}"
                        class="flex items-center gap-2 px-2 font-display text-ink-900 font-semibold">
                        <span class="text-xl tracking-tight">A<span class="mx-0.5 text-sage-600">𝄞</span>A</span>
                        <span class="hidden sm:inline text-sm text-ink-500 font-sans">Amazing Grace Academy</span>
                    </a>

                    <div class="flex items-center gap-2">
                        <div class="hidden sm:flex items-center gap-2">
                            <x-ui.button href="{{ route('support') }}" variant="outline"
                                class="rounded-full px-4 py-2 text-xs">
                                Support us
                            </x-ui.button>
                            <x-ui.button href="{{ route('register') }}" variant="primary"
                                class="rounded-full px-4 py-2 text-xs">
                                Join class
                            </x-ui.button>
                        </div>

                        <button type="button"
                            class="inline-flex md:hidden items-center justify-center rounded-full border border-ink-100 bg-white/90 px-3 py-2 text-ink-600 hover:bg-sage-50 hover:text-sage-800 transition-colors"
                            aria-label="Open menu" :aria-expanded="open.toString()" aria-controls="mobile-nav"
                            @click="open = !open">
                            <x-ui.icon name="menu" class="h-5 w-5" />
                        </button>
                    </div>
                </div>
            </div>

            {{-- Mobile menu --}}
            <div id="mobile-nav" x-cloak x-show="open" x-transition.opacity class="mt-3 md:hidden ui-pill-surface p-3">
                <nav class="flex flex-col gap-1">
                    <a href="{{ route('home') }}" @click="open = false"
                        class="{{ $pillLink(request()->routeIs('home')) }}">Home</a>
                    <a href="{{ route('about') }}" @click="open = false"
                        class="{{ $pillLink(request()->routeIs('about')) }}">About</a>
                    <a href="{{ route('programs') }}" @click="open = false"
                        class="{{ $pillLink(request()->routeIs('programs')) }}">Programs</a>
                    <a href="{{ route('events') }}" @click="open = false"
                        class="{{ $pillLink(request()->routeIs('events')) }}">Events</a>
                    <a href="{{ route('songs') }}" @click="open = false"
                        class="{{ $pillLink(request()->routeIs('songs')) }}">Shop</a>
                    <a href="{{ route('contact') }}" @click="open = false"
                        class="{{ $pillLink(request()->routeIs('contact')) }}">Contact</a>
                </nav>

                <div class="mt-3 grid grid-cols-2 gap-2">
                    <x-ui.button href="{{ route('support') }}" variant="outline"
                        class="rounded-full px-4 py-2 text-xs">Support us</x-ui.button>
                    <x-ui.button href="{{ route('register') }}" variant="primary"
                        class="rounded-full px-4 py-2 text-xs">Join class</x-ui.button>
                </div>
            </div>
        </div>
    </header>

    <main class="floating-notes pt-6">
        @yield('content')
    </main>

    {{-- Quick actions FAB --}}
    <div class="fixed bottom-6 right-6 flex flex-col gap-2 z-40">
        <a href="#top" id="back-to-top"
            class="hidden items-center gap-2 rounded-full bg-ink-900 text-white px-4 py-2.5 text-xs font-semibold shadow-elevated hover:bg-ink-800 transition-colors">
            <i class="fa-solid fa-arrow-up text-[10px]"></i> Back to top
        </a>
        <a href="{{ route('contact') }}"
            class="inline-flex items-center gap-2 rounded-full bg-sage-600 text-white px-4 py-2.5 text-xs font-semibold shadow-glow hover:bg-sage-500 transition-colors">
            <i class="fa-regular fa-envelope"></i> Contact us
        </a>
    </div>

    <footer class="relative bg-gradient-to-b from-cream-50 to-white text-ink-600 border-t border-ink-100/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-10 sm:py-12">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-8">
                {{-- Brand + tagline --}}
                <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                    <div class="flex items-center gap-3">
                        <div
                            class="h-10 w-10 sm:h-12 sm:w-12 grid place-items-center rounded-xl sm:rounded-2xl bg-white shadow-sm border border-sage-100">
                            <span class="font-display text-lg sm:text-xl font-semibold text-sage-700">A<span
                                    class="mx-0.5">𝄞</span>A</span>
                        </div>
                        <div>
                            <h3 class="font-display text-lg sm:text-xl font-semibold text-ink-900">Amazing Grace
                                Academy</h3>
                            <p class="text-ink-500 text-xs sm:text-sm mt-0.5">Sacred music since 2016</p>
                        </div>
                    </div>
                </div>

                {{-- Social: Font Awesome icons, visible and touch-friendly --}}
                <div class="flex items-center gap-3">
                    <span class="text-ink-500 text-xs sm:text-sm font-medium mr-1 sm:mr-0">Follow us</span>
                    <a href="#"
                        class="inline-flex items-center justify-center w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-sage-100 text-sage-700 hover:bg-sage-600 hover:text-white transition-colors"
                        aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f text-lg sm:text-xl" aria-hidden="true"></i>
                    </a>
                    <a href="#"
                        class="inline-flex items-center justify-center w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-sage-100 text-sage-700 hover:bg-sage-600 hover:text-white transition-colors"
                        aria-label="Instagram">
                        <i class="fa-brands fa-instagram text-lg sm:text-xl" aria-hidden="true"></i>
                    </a>
                    <a href="#"
                        class="inline-flex items-center justify-center w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-sage-100 text-sage-700 hover:bg-sage-600 hover:text-white transition-colors"
                        aria-label="YouTube">
                        <i class="fa-brands fa-youtube text-lg sm:text-xl" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            {{-- Short links row --}}
            <nav
                class="mt-6 pt-6 border-t border-ink-100 flex flex-wrap items-center justify-center sm:justify-start gap-x-6 gap-y-2 text-sm">
                <a href="{{ route('home') }}" class="text-ink-600 hover:text-sage-600 transition-colors">Home</a>
                <a href="{{ route('about') }}" class="text-ink-600 hover:text-sage-600 transition-colors">About</a>
                <a href="{{ route('programs') }}"
                    class="text-ink-600 hover:text-sage-600 transition-colors">Programs</a>
                <a href="{{ route('events') }}" class="text-ink-600 hover:text-sage-600 transition-colors">Events</a>
                <a href="{{ route('songs') }}" class="text-ink-600 hover:text-sage-600 transition-colors">Shop</a>
                <a href="{{ route('contact') }}"
                    class="text-ink-600 hover:text-sage-600 transition-colors">Contact</a>
                <a href="{{ route('privacy') }}"
                    class="text-ink-500 hover:text-sage-600 transition-colors">Privacy</a>
                <a href="{{ route('terms') }}" class="text-ink-500 hover:text-sage-600 transition-colors">Terms</a>
            </nav>

            {{-- Copyright --}}
            <p class="mt-6 pt-4 border-t border-ink-100 text-center text-ink-500 text-xs sm:text-sm">
                © {{ date('Y') }} <span class="text-sage-600 font-semibold">Amazing Grace Academy</span> — ASA UR
                Nyarugenge SDA
            </p>
        </div>
    </footer>
</body>

</html>
