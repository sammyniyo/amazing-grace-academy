<section x-data="{ show: false }" x-init="setTimeout(() => show = true, 80)" class="relative overflow-hidden min-h-[92vh] flex items-center">
    {{-- Background --}}
    <div class="absolute inset-0 -z-20 hero-grad"></div>

    {{-- Orbs --}}
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <div class="hero-orb absolute top-1/4 left-1/4 w-[520px] h-[520px] bg-emerald-300/40"></div>
        <div class="hero-orb absolute bottom-1/3 right-1/4 w-[640px] h-[640px] bg-sky-300/40"
            style="animation-delay: 1.2s;"></div>
        <div class="hero-orb absolute top-1/2 left-1/2 w-[420px] h-[420px] bg-violet-300/30"
            style="animation-delay: 2.1s;"></div>
    </div>

    {{-- Floating notes --}}
    <div class="absolute top-20 right-16 -z-10 opacity-[0.06] hero-float">
        <svg class="w-28 h-28 text-slate-900" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z" />
        </svg>
    </div>
    <div class="absolute bottom-32 left-20 -z-10 opacity-[0.06] hero-float" style="animation-delay: 1s;">
        <svg class="w-24 h-24 text-slate-900" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z" />
        </svg>
    </div>

    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 py-16 lg:py-20">
        <div class="grid items-center gap-16 lg:gap-24 lg:grid-cols-2">

            {{-- LEFT --}}
            <div x-show="show" x-transition:enter="transition duration-700 ease-out"
                x-transition:enter-start="opacity-0 -translate-x-8" x-transition:enter-end="opacity-100 translate-x-0"
                class="text-center lg:text-left space-y-8">
                {{-- Badge --}}
                <div
                    class="inline-flex items-center gap-2.5 rounded-full glass px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm ring-1 ring-white/60">
                    <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Amazing Grace Academy</span>
                    <span class="inline-block w-1 h-1 rounded-full bg-slate-400"></span>
                    <span class="text-slate-500">Music Academy • Kigali</span>
                </div>

                {{-- Heading --}}
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-slate-900 leading-tight">
                    <span class="block">Where Voices</span>
                    <span class="block mt-3">
                        <span class="hero-gradient-text">Become Harmony</span>
                    </span>
                </h1>

                {{-- Subheading (use your real academy story; keep this for now) --}}
                <p class="text-lg sm:text-xl leading-relaxed text-slate-600 max-w-2xl mx-auto lg:mx-0">
                    Free music training grounded in excellence and ministry — from Sol-Fa and staff notation
                    to instrumental skills for worship and performance.
                </p>

                {{-- Stats (use realistic numbers; you can update later) --}}
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 max-w-xl mx-auto lg:mx-0">
                    <div class="text-center lg:text-left">
                        <div class="text-4xl font-extrabold gradient-title">700+</div>
                        <div class="text-sm font-medium text-slate-500 mt-1">Students Trained</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-4xl font-extrabold gradient-title">2016</div>
                        <div class="text-sm font-medium text-slate-500 mt-1">Founded</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-4xl font-extrabold gradient-title">168</div>
                        <div class="text-sm font-medium text-slate-500 mt-1">Sol-Fa Graduates</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-4xl font-extrabold gradient-title">15+</div>
                        <div class="text-sm font-medium text-slate-500 mt-1">ABRSM Certificates</div>
                    </div>
                </div>

                {{-- CTAs (fixed contrast & less “noisy”) --}}
                <div class="flex flex-col sm:flex-row gap-4 mx-auto lg:mx-0 max-w-lg">
                    <a href="{{ route('contact') }}#join" class="btn btn-primary w-full">
                        Join the Academy
                    </a>

                    <a href="{{ route('songs') }}" class="btn btn-outline w-full">
                        Explore Our Music
                    </a>
                </div>

                {{-- Trust row --}}
                <div
                    class="flex flex-wrap items-center justify-center lg:justify-start gap-6 pt-2 text-sm text-slate-500">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex h-2 w-2 rounded-full bg-emerald-500"></span>
                        <span class="font-medium">Free Training</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="inline-flex h-2 w-2 rounded-full bg-sky-500"></span>
                        <span class="font-medium">Church-Based Program</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="inline-flex h-2 w-2 rounded-full bg-violet-500"></span>
                        <span class="font-medium">Music Excellence</span>
                    </div>
                </div>
            </div>

            {{-- RIGHT --}}
            <div x-show="show" x-transition:enter="transition duration-800 delay-150 ease-out"
                x-transition:enter-start="opacity-0 translate-y-10 scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 scale-100" class="relative">
                <div
                    class="relative rounded-[2.5rem] overflow-hidden shadow-2xl shadow-emerald-600/20 ring-1 ring-white/60">
                    {{-- Replace with real image later --}}
                    <div
                        class="aspect-[4/5] bg-gradient-to-br from-emerald-500/10 via-sky-500/10 to-violet-500/10 relative">
                        <div class="absolute inset-0 flex items-center justify-center p-12">
                            <div class="text-center space-y-5">
                                <div
                                    class="w-full h-80 bg-gradient-to-br from-white to-emerald-50/50 rounded-3xl flex items-center justify-center shadow-lg ring-1 ring-emerald-100">
                                    <svg class="w-28 h-28 text-emerald-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                                    </svg>
                                </div>

                                <div class="space-y-1">
                                    <p class="text-base font-semibold text-slate-700">Add a choir performance photo</p>
                                    <p class="text-sm text-slate-500">Recommended: 800×1000px • JPG/PNG</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Cohort Card --}}
                    <div class="absolute -bottom-8 -right-8 w-[85%] z-10">
                        <div class="hero-cohort-card">
                            <div class="flex items-start justify-between mb-6">
                                <div class="space-y-1">
                                    <p class="text-xs font-semibold text-emerald-600 uppercase tracking-wide">
                                        Current Cohort
                                    </p>
                                    <h3 class="text-3xl font-extrabold text-slate-900">Class of 2026</h3>
                                    <p class="text-sm text-slate-600">Enrollment open</p>
                                </div>

                                <span
                                    class="inline-flex items-center gap-2 rounded-full bg-slate-900 px-4 py-2 text-sm font-bold text-white shadow-sm">
                                    <span class="inline-flex h-2 w-2 rounded-full bg-emerald-400"></span>
                                    Limited Spots
                                </span>
                            </div>

                            <div class="space-y-5">
                                <div>
                                    <div class="flex justify-between items-baseline mb-2">
                                        <span class="text-sm font-semibold text-slate-700">Sol-Fa Level</span>
                                        <span class="text-sm font-bold text-emerald-600">85%</span>
                                    </div>
                                    <div class="h-2.5 w-full rounded-full bg-slate-200/80 overflow-hidden">
                                        <div
                                            class="h-full w-[85%] bg-gradient-to-r from-emerald-500 to-emerald-400 rounded-full">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between items-baseline mb-2">
                                        <span class="text-sm font-semibold text-slate-700">Staff Notation</span>
                                        <span class="text-sm font-bold text-sky-600">70%</span>
                                    </div>
                                    <div class="h-2.5 w-full rounded-full bg-slate-200/80 overflow-hidden">
                                        <div
                                            class="h-full w-[70%] bg-gradient-to-r from-sky-500 to-sky-400 rounded-full">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="mt-7 pt-6 border-t border-slate-200/60 flex items-center justify-between gap-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex items-center justify-center w-10 h-10 rounded-xl bg-slate-900 text-white shadow-sm">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs font-medium text-slate-500">Next Session</p>
                                        <p class="text-sm font-bold text-slate-900">Saturday • 3:00 PM</p>
                                    </div>
                                </div>

                                <a href="{{ route('contact') }}#join" class="btn btn-primary px-5 py-2.5">
                                    Register
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Small floating icon --}}
                    <div
                        class="absolute -top-6 -left-6 w-24 h-24 glass rounded-2xl shadow-xl flex items-center justify-center ring-1 ring-white/60 hero-float">
                        <svg class="w-10 h-10 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2">
        <span class="text-xs font-medium text-slate-400 uppercase tracking-wider">Scroll to explore</span>
        <div class="animate-bounce">
            <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </div>
</section>
