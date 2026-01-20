@extends('layouts.website')

@section('title', 'Amazing Grace Academy — Home')

@section('content')
    {{-- HERO --}}
    <section class="mx-auto max-w-7xl px-6 pt-14 pb-10">
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div>
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-white/60 bg-white/70 px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm backdrop-blur">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    Kigali Bilingual Church • ASSA Kigali • Founded 2016
                </span>

                <h1 class="mt-6 text-5xl font-semibold tracking-tight text-slate-900">
                    Amazing Grace Academy
                    <span class="block text-slate-500">Music training for ministry & excellence.</span>
                </h1>

                <p class="mt-6 max-w-xl text-lg leading-relaxed text-slate-600">
                    A music school within the Seventh-day Adventist Church, teaching
                    <strong>Sol-Fa</strong> and <strong>International Staff Notation</strong>,
                    then advancing learners to instruments: Piano, Guitar, and Violin — completely free for all.
                </p>

                <div class="mt-9 flex flex-wrap gap-3">
                    <x-ui.button href="{{ route('contact') }}#join" variant="primary">Join the Academy</x-ui.button>
                    <x-ui.button href="{{ route('about') }}" variant="glass">Read Our Story</x-ui.button>
                </div>

                <div class="mt-10 grid grid-cols-2 gap-3 sm:grid-cols-4">
                    <x-ui.card class="p-4">
                        <div class="text-2xl font-semibold">700+</div>
                        <div class="text-xs text-slate-600 mt-1">Students trained</div>
                    </x-ui.card>
                    <x-ui.card class="p-4">
                        <div class="text-2xl font-semibold">168</div>
                        <div class="text-xs text-slate-600 mt-1">Sol-Fa graduates</div>
                    </x-ui.card>
                    <x-ui.card class="p-4">
                        <div class="text-2xl font-semibold">15+</div>
                        <div class="text-xs text-slate-600 mt-1">ABRSM certificates</div>
                    </x-ui.card>
                    <x-ui.card class="p-4">
                        <div class="text-2xl font-semibold">2016</div>
                        <div class="text-xs text-slate-600 mt-1">Founded</div>
                    </x-ui.card>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -inset-6 rounded-[44px] bg-gradient-to-r from-emerald-200/45 to-sky-200/45 blur-3xl">
                </div>

                <x-ui.card class="relative p-8 shadow-[0_30px_80px_rgba(2,6,23,.18)]">
                    <div class="flex items-start justify-between">
                        <div>
                            <div class="text-sm font-semibold text-slate-900">Learning Path</div>
                            <div class="mt-1 text-xs text-slate-600">From beginner to confident musician</div>
                        </div>
                        <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-700">
                            Free Training
                        </span>
                    </div>

                    <div class="mt-7 space-y-4">
                        <div class="rounded-2xl bg-white p-5 border border-slate-200/70">
                            <div class="text-xs text-slate-500">Level 1</div>
                            <div class="mt-1 text-base font-semibold text-slate-900">Sol-Fa (Hymnal Notation)</div>
                            <div class="mt-2 text-sm text-slate-600">Reading, voice parts, hymn rules.</div>
                        </div>

                        <div class="rounded-2xl bg-white p-5 border border-slate-200/70">
                            <div class="text-xs text-slate-500">Level 2</div>
                            <div class="mt-1 text-base font-semibold text-slate-900">Staff Notation (Muhundwanota)</div>
                            <div class="mt-2 text-sm text-slate-600">International notation & sight-reading.</div>
                        </div>

                        <div class="rounded-2xl bg-white p-5 border border-slate-200/70">
                            <div class="text-xs text-slate-500">Level 3</div>
                            <div class="mt-1 text-base font-semibold text-slate-900">Instruments</div>
                            <div class="mt-2 text-sm text-slate-600">Piano • Guitar • Violin</div>
                        </div>
                    </div>

                    <div class="mt-7 rounded-2xl bg-slate-900 px-5 py-4 text-white">
                        <div class="text-xs text-white/70">Highlights</div>
                        <div class="mt-1 text-sm font-semibold">
                            Albums (2023) • Hymns Unveiled (2025) • Annual Concert (2026)
                        </div>
                    </div>
                </x-ui.card>
            </div>
        </div>
    </section>

    {{-- QUICK LINKS SECTION --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="grid gap-4 md:grid-cols-3">
            <x-ui.card class="p-8">
                <div class="text-sm font-semibold text-slate-900">Programs</div>
                <div class="mt-2 text-sm text-slate-600">Sol-Fa, Staff Notation, Piano, Guitar, Violin.</div>
                <x-ui.button href="{{ route('programs') }}" variant="outline" class="mt-6 w-full">View
                    Programs</x-ui.button>
            </x-ui.card>

            <x-ui.card class="p-8">
                <div class="text-sm font-semibold text-slate-900">Songs & Shop</div>
                <div class="mt-2 text-sm text-slate-600">Arrangements, sheet music, and releases.</div>
                <x-ui.button href="{{ route('songs') }}" variant="outline" class="mt-6 w-full">Browse Songs</x-ui.button>
            </x-ui.card>

            <x-ui.card class="p-8">
                <div class="text-sm font-semibold text-slate-900">Support</div>
                <div class="mt-2 text-sm text-slate-600">Help us grow instruments and training.</div>
                <x-ui.button href="{{ route('contact') }}#support" variant="outline" class="mt-6 w-full">Support the
                    Academy</x-ui.button>
            </x-ui.card>
        </div>
    </section>
@endsection
