@extends('layouts.website')

@section('title', 'About — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-16 pb-12">
        <div class="max-w-3xl">
            <span class="inline-flex rounded-full bg-emerald-500/10 px-4 py-2 text-xs font-semibold text-emerald-700">
                About the Academy
            </span>

            <h1 class="mt-6 text-4xl font-semibold tracking-tight text-slate-900">
                Amazing Grace Academy
            </h1>

            <p class="mt-5 text-lg leading-relaxed text-slate-600">
                A music academy operating within the Seventh-day Adventist Church,
                dedicated to excellence in music education, worship, and service.
            </p>
        </div>
    </section>

    {{-- IDENTITY & BACKGROUND --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="grid gap-10 lg:grid-cols-2">

            <x-ui.card class="p-10">
                <h2 class="text-2xl font-semibold text-slate-900">Who We Are</h2>

                <p class="mt-4 text-slate-600 leading-relaxed">
                    Amazing Grace Academy is a music school operating within the
                    <strong>Seventh-day Adventist Church</strong>, under
                    <strong>ASSA Kigali</strong>, at
                    <strong>ASA UR Nyarugenge</strong>, Kigali Bilingual Church.
                </p>

                <p class="mt-4 text-slate-600 leading-relaxed">
                    Founded in <strong>October 2016</strong>, the academy welcomes
                    beginners with no prior musical knowledge as well as learners
                    seeking to improve their skills.
                </p>

                <p class="mt-4 text-slate-600 leading-relaxed">
                    Training is conducted in harmony with Christian values and is
                    offered <strong>free of charge</strong>, without discrimination
                    based on religion, age, education level, or background.
                </p>
            </x-ui.card>

            <x-ui.card class="p-10">
                <h2 class="text-2xl font-semibold text-slate-900">What We Teach</h2>

                <ul class="mt-6 space-y-3 text-slate-700">
                    <li>• Tonic Sol-Fa (church hymnal notation)</li>
                    <li>• International Staff Notation (Muhundwanota)</li>
                    <li>• Sight-reading and hymn analysis</li>
                    <li>• Instrumental training (Piano, Guitar, Violin)</li>
                </ul>

                <p class="mt-6 text-slate-600 leading-relaxed">
                    Learners who complete the Sol-Fa level advance to international
                    staff notation and instrumental training, preparing them for
                    confident musical ministry and performance.
                </p>
            </x-ui.card>

        </div>
    </section>

    {{-- MISSION & VISION --}}
    <section class="bg-slate-900 py-20 text-white">
        <div class="mx-auto max-w-7xl px-6">
            <div class="grid gap-10 lg:grid-cols-2">

                <div class="rounded-[28px] bg-white/10 p-10 backdrop-blur">
                    <h3 class="text-sm uppercase tracking-wide text-emerald-400">
                        Mission
                    </h3>

                    <p class="mt-6 text-lg leading-relaxed text-white/90">
                        To teach music through proper sight-reading and notation,
                        equipping learners with skills that positively transform
                        music ministry wherever they serve.
                    </p>

                    <p class="mt-4 text-white/70">
                        We aim to strengthen music standards in churches across Rwanda,
                        ensuring hymns are sung correctly and consistently.
                    </p>
                </div>

                <div class="rounded-[28px] bg-white/10 p-10 backdrop-blur">
                    <h3 class="text-sm uppercase tracking-wide text-sky-400">
                        Vision
                    </h3>

                    <p class="mt-6 text-lg leading-relaxed text-white/90">
                        To train learners until they can independently sing or play
                        any piece written in Sol-Fa or staff notation.
                    </p>

                    <p class="mt-4 text-white/70">
                        To promote quality choral singing in Rwanda and internationally.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- ACHIEVEMENTS --}}
    <section class="mx-auto max-w-7xl px-6 py-20">
        <h2 class="text-3xl font-semibold text-slate-900 text-center">
            Impact & Achievements
        </h2>

        <div class="mt-12 grid gap-6 md:grid-cols-3">
            <x-ui.card class="p-8 text-center">
                <div class="text-3xl font-semibold text-slate-900">700+</div>
                <div class="mt-2 text-sm text-slate-600">Students trained since 2016</div>
            </x-ui.card>

            <x-ui.card class="p-8 text-center">
                <div class="text-3xl font-semibold text-slate-900">168</div>
                <div class="mt-2 text-sm text-slate-600">Sol-Fa graduates</div>
            </x-ui.card>

            <x-ui.card class="p-8 text-center">
                <div class="text-3xl font-semibold text-slate-900">15+</div>
                <div class="mt-2 text-sm text-slate-600">ABRSM international certificates</div>
            </x-ui.card>
        </div>

        <p class="mt-10 max-w-3xl mx-auto text-center text-slate-600">
            Graduates contribute to hymn recordings, radio music education programs,
            and have established music schools in their home churches with support
            from Amazing Grace Academy.
        </p>
    </section>

    {{-- AFFILIATIONS --}}
    <section class="mx-auto max-w-7xl px-6 pb-24">
        <x-ui.card class="p-10">
            <h2 class="text-2xl font-semibold text-slate-900">Affiliations & Structure</h2>

            <p class="mt-4 text-slate-600 leading-relaxed">
                Amazing Grace Academy operates under the Seventh-day Adventist Church
                structure, with support and collaboration from:
            </p>

            <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4 text-sm text-slate-700">
                <div>ASA UR Nyarugenge</div>
                <div>ASSA Kigali</div>
                <div>ECRF</div>
                <div>Rwanda Union Mission (RUM)</div>
            </div>
        </x-ui.card>
    </section>
@endsection
