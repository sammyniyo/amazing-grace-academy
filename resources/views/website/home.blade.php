@extends('layouts.website')

@section('title', 'Amazing Grace Academy — Home')

@section('content')
    {{-- HERO --}}
    <section class="mx-auto max-w-7xl px-6 pt-16 pb-14 bg-gradient-to-br from-emerald-50 via-sky-50 to-purple-50 rounded-3xl mt-6 shadow-sm">
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div class="reveal space-y-6">
                <span
                    class="pill glass border border-emerald-300/60 bg-emerald-500/10 text-emerald-200 shadow-sm backdrop-blur">
                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                    Kigali Bilingual Church • ASSA Kigali • Since 2016
                </span>

                <h1 class="text-4xl sm:text-5xl font-semibold tracking-tight">
                    <span class="gradient-title">Voices trained for worship.</span>
                    <span class="mt-2 block text-slate-100">
                        Amazing Grace Academy — a choir and music school for ministry & excellence.
                    </span>
                </h1>

                <p class="max-w-xl text-base sm:text-lg leading-relaxed text-slate-700">
                    Within the Seventh-day Adventist Church, we train singers and instrumentalists through
                    <strong class="text-emerald-300 font-semibold">Tonic Sol-Fa</strong>,
                    <strong class="text-sky-300 font-semibold">International Staff Notation</strong>,
                    and <strong class="text-purple-200 font-semibold">Piano, Guitar & Violin</strong> — with a heart for
                    worship and service.
                </p>

                <div class="flex flex-wrap gap-3">
                    <x-ui.button href="{{ route('contact') }}#join" variant="primary">
                        Join the Academy
                    </x-ui.button>
                    <x-ui.button href="{{ route('songs') }}" variant="glass">
                        Listen to Our Music
                    </x-ui.button>
                </div>

                <div class="grid grid-cols-2 gap-3 sm:grid-cols-4 pt-4">
                    <x-ui.card class="p-4 bg-white/90 border border-emerald-200">
                        <div class="text-2xl font-semibold text-emerald-600">700+</div>
                        <div class="mt-1 text-[11px] text-slate-500">Students trained</div>
                    </x-ui.card>
                    <x-ui.card class="p-4 bg-white/90 border border-sky-200">
                        <div class="text-2xl font-semibold text-sky-600">168</div>
                        <div class="mt-1 text-[11px] text-slate-500">Sol-Fa graduates</div>
                    </x-ui.card>
                    <x-ui.card class="p-4 bg-white/90 border border-purple-200">
                        <div class="text-2xl font-semibold text-purple-600">15+</div>
                        <div class="mt-1 text-[11px] text-slate-500">ABRSM certificates</div>
                    </x-ui.card>
                    <x-ui.card class="p-4 bg-white/90 border border-amber-200">
                        <div class="text-2xl font-semibold text-amber-600">2016</div>
                        <div class="mt-1 text-[11px] text-slate-500">Year founded</div>
                    </x-ui.card>
                </div>
            </div>

            <div class="relative reveal">
                <div
                    class="absolute -inset-6 rounded-[44px] bg-gradient-to-r from-emerald-400/25 via-sky-400/25 to-purple-400/25 blur-3xl">
                </div>

                <x-ui.card class="relative bg-slate-900 text-slate-50 border border-slate-800 p-7 sm:p-8 shadow-[0_24px_60px_rgba(15,23,42,0.6)]">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <div class="text-xs font-semibold uppercase tracking-wide text-emerald-300">
                                Training Path
                            </div>
                            <div class="mt-1 text-sm text-slate-200">From first note to confident ministry.</div>
                        </div>
                        <span
                            class="pill bg-emerald-500/15 text-[11px] font-semibold text-emerald-200 border border-emerald-400/40">
                            Free Ministry Training
                        </span>
                    </div>

                    <div class="mt-7 space-y-4 text-sm">
                        <div class="rounded-2xl border border-slate-700/80 bg-slate-900/70 p-4">
                            <div class="flex items-center justify-between text-xs text-slate-400">
                                <span>Level 1 • Foundation</span>
                                <span class="text-emerald-300">Sol-Fa</span>
                            </div>
                            <div class="mt-1 text-sm font-semibold text-slate-50">Tonic Sol-Fa (Hymnal Notation)</div>
                            <div class="mt-1 text-xs text-slate-300">
                                Reading hymns, SATB voice parts, rhythm & hymn rules.
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-700/80 bg-slate-900/70 p-4">
                            <div class="flex items-center justify-between text-xs text-slate-400">
                                <span>Level 2 • Growth</span>
                                <span class="text-sky-300">Staff</span>
                            </div>
                            <div class="mt-1 text-sm font-semibold text-slate-50">Staff Notation (Muhundwanota)</div>
                            <div class="mt-1 text-xs text-slate-300">
                                International notation, sight-reading, hymn analysis.
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-700/80 bg-slate-900/70 p-4">
                            <div class="flex items-center justify-between text-xs text-slate-400">
                                <span>Level 3 • Specialization</span>
                                <span class="text-purple-300">Instruments</span>
                            </div>
                            <div class="mt-1 text-sm font-semibold text-slate-50">Instrumental Training</div>
                            <div class="mt-1 text-xs text-slate-300">
                                Piano, Guitar & Violin — applying music reading to worship.
                            </div>
                        </div>
                    </div>

                    <div class="mt-7 grid gap-3 rounded-2xl border border-emerald-500/30 bg-gradient-to-r from-emerald-500/20 via-sky-500/15 to-purple-500/20 px-5 py-4 text-xs text-emerald-50">
                        <div class="font-semibold text-[13px]">
                            Highlights of the Journey
                        </div>
                        <div class="space-y-1.5 text-[11px]">
                            <p>• Albums released in 2023 celebrating choir growth.</p>
                            <p>• <span class="font-semibold">Hymns Unveiled</span> teaching program (2025).</p>
                            <p>• Annual academy concerts and church music evangelism (2026 and beyond).</p>
                        </div>
                    </div>
                </x-ui.card>
            </div>
        </div>
    </section>

    {{-- QUICK LINKS SECTION --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal grid gap-4 md:grid-cols-3">
            <x-ui.card class="p-8 bg-slate-900/70 border border-slate-700/80 hover:border-emerald-400/60 transition">
                <div class="text-xs font-semibold uppercase tracking-wide text-emerald-300">Programs</div>
                <div class="mt-2 text-sm text-slate-200">
                    Sol-Fa, Staff Notation, and instruments designed for worship ministry.
                </div>
                <x-ui.button href="{{ route('programs') }}" variant="outline"
                    class="mt-6 w-full border-emerald-400/60 text-emerald-200 hover:bg-emerald-500/10">
                    View Programs
                </x-ui.button>
            </x-ui.card>

            <x-ui.card class="p-8 bg-slate-900/70 border border-slate-700/80 hover:border-sky-400/60 transition">
                <div class="text-xs font-semibold uppercase tracking-wide text-sky-300">Our Music</div>
                <div class="mt-2 text-sm text-slate-200">
                    Hymns, arrangements, and teaching resources from the academy choir.
                </div>
                <x-ui.button href="{{ route('songs') }}" variant="outline"
                    class="mt-6 w-full border-sky-400/60 text-sky-200 hover:bg-sky-500/10">
                    Explore Songs
                </x-ui.button>
            </x-ui.card>

            <x-ui.card class="p-8 bg-slate-900/70 border border-slate-700/80 hover:border-purple-400/60 transition">
                <div class="text-xs font-semibold uppercase tracking-wide text-purple-300">Support</div>
                <div class="mt-2 text-sm text-slate-200">
                    Help us grow instruments, recordings, and opportunities for learners.
                </div>
                <x-ui.button href="{{ route('contact') }}#support" variant="outline"
                    class="mt-6 w-full border-purple-400/60 text-purple-200 hover:bg-purple-500/10">
                    Support the Academy
                </x-ui.button>
            </x-ui.card>
        </div>
    </section>

    {{-- CHOIR FEEL / MINISTRY STRIP --}}
    <section class="border-y border-slate-800/80 bg-slate-950/70 py-10">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 px-6 text-center md:flex-row md:text-left">
            <div class="reveal space-y-1">
                <div class="text-xs font-semibold uppercase tracking-[0.2em] text-emerald-300">
                    Voices United in Praise
                </div>
                <p class="text-sm text-slate-300 max-w-2xl">
                    Training choirs and individuals to read music, sing in harmony, and serve God with disciplined,
                    beautiful worship.
                </p>
            </div>
            <div class="reveal flex flex-wrap justify-center gap-3 text-xs text-slate-300">
                <div class="pill bg-slate-900/80 border border-emerald-400/40 text-emerald-200">
                    300+ choristers impacted
                </div>
                <div class="pill bg-slate-900/80 border border-sky-400/40 text-sky-200">
                    4+ albums & programs
                </div>
                <div class="pill bg-slate-900/80 border border-purple-400/40 text-purple-200">
                    Ministry across Rwanda
                </div>
            </div>
        </div>
    </section>
@endsection
