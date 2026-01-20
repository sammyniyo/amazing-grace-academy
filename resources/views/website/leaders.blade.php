@extends('layouts.website')

@section('title', 'Leadership — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-16 pb-12">
        <div class="max-w-3xl reveal">
            <span class="pill bg-sky-500/15 px-4 py-2 text-xs font-semibold text-sky-200 border border-sky-400/50">
                Leadership & Administration
            </span>

            <h1 class="mt-6 text-4xl font-semibold tracking-tight text-slate-50">
                Our Leadership Team
            </h1>

            <p class="mt-5 text-lg leading-relaxed text-slate-300">
                Amazing Grace Academy is guided by dedicated leaders and music trainers
                committed to excellence, discipline, and service through music ministry.
            </p>
        </div>
    </section>

    {{-- LEADERS GRID --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            {{-- MUSIC TRAINER --}}
            <x-ui.card class="p-8 bg-slate-900/80 border border-emerald-400/40 text-slate-50 reveal">
                <div class="flex items-start justify-between">
                    <span class="text-xs font-semibold text-emerald-300">
                        Music Trainer
                    </span>
                </div>

                <div class="mt-6">
                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-800 text-white text-lg font-semibold">
                        MG
                    </div>
                </div>

                <h2 class="mt-4 text-xl font-semibold">
                    Muhayimana Gerald
                </h2>

                <p class="mt-2 text-sm text-slate-200">
                    Lead Music Trainer
                </p>

                <p class="mt-4 text-sm text-slate-200 leading-relaxed">
                    Responsible for music instruction, Sol-Fa, staff notation,
                    instrumental training, and preparation for international
                    certifications including ABRSM.
                </p>
            </x-ui.card>

            {{-- DIRECTOR --}}
            <x-ui.card class="p-8 bg-slate-900/80 border border-purple-400/40 text-slate-50 reveal">
                <span class="text-xs font-semibold text-purple-300">
                    Administration
                </span>

                <div class="mt-6">
                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-800 text-white text-lg font-semibold">
                        AD
                    </div>
                </div>

                <h2 class="mt-4 text-xl font-semibold">
                    Academy Director
                </h2>

                <p class="mt-2 text-sm text-slate-200">
                    Leadership & Coordination
                </p>

                <p class="mt-4 text-sm text-slate-200 leading-relaxed">
                    Oversees the overall vision, coordination with church structures,
                    student enrollment, programs, and strategic development.
                </p>
            </x-ui.card>

            {{-- COORDINATION --}}
            <x-ui.card class="p-8 bg-slate-900/80 border border-sky-400/40 text-slate-50 reveal">
                <span class="text-xs font-semibold text-sky-300">
                    Coordination
                </span>

                <div class="mt-6">
                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-800 text-white text-lg font-semibold">
                        AC
                    </div>
                </div>

                <h2 class="mt-4 text-xl font-semibold">
                    Academy Coordinators
                </h2>

                <p class="mt-2 text-sm text-slate-200">
                    Program & Student Support
                </p>

                <p class="mt-4 text-sm text-slate-200 leading-relaxed">
                    Support daily academy operations, student follow-up,
                    communication, and coordination with partner churches.
                </p>
            </x-ui.card>

        </div>
    </section>

    {{-- GOVERNANCE --}}
    <section class="bg-slate-950/80 py-20 text-white">
        <div class="mx-auto max-w-7xl px-6">
            <h2 class="text-3xl font-semibold text-center">
                Governance & Oversight
            </h2>

            <p class="mt-6 max-w-3xl mx-auto text-center text-white/80 leading-relaxed">
                Amazing Grace Academy operates within the Seventh-day Adventist Church
                structure and benefits from guidance, oversight, and collaboration
                with recognized church bodies.
            </p>

            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-[28px] bg-white/5 p-6 backdrop-blur text-center reveal">
                    ASA UR Nyarugenge
                </div>
                <div class="rounded-[28px] bg-white/5 p-6 backdrop-blur text-center reveal">
                    ASSA Kigali
                </div>
                <div class="rounded-[28px] bg-white/5 p-6 backdrop-blur text-center reveal">
                    ECRF
                </div>
                <div class="rounded-[28px] bg-white/5 p-6 backdrop-blur text-center reveal">
                    Rwanda Union Mission (RUM)
                </div>
            </div>
        </div>
    </section>

    {{-- CALL TO ACTION --}}
    <section class="mx-auto max-w-7xl px-6 py-20">
        <x-ui.card class="p-10 text-center bg-slate-900/80 border border-slate-700/80 text-slate-50 reveal">
            <h2 class="text-2xl font-semibold">
                Serve with Us
            </h2>

            <p class="mt-4 text-slate-200 max-w-2xl mx-auto leading-relaxed">
                Amazing Grace Academy welcomes leaders, trainers, and volunteers
                who share a passion for music ministry and excellence.
            </p>

            <x-ui.button href="{{ route('contact') }}" variant="primary" class="mt-6">
                Contact the Academy
            </x-ui.button>
        </x-ui.card>
    </section>
@endsection
