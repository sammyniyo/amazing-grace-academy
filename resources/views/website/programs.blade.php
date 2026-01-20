@extends('layouts.website')

@section('title', 'Programs — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-16 pb-12">
        <div class="max-w-3xl reveal">
            <span class="pill bg-emerald-500/15 px-4 py-2 text-xs font-semibold text-emerald-200 border border-emerald-400/40">
                Training Programs
            </span>

            <h1 class="mt-6 text-4xl font-semibold tracking-tight text-slate-50">
                Music Education Pathway
            </h1>

            <p class="mt-5 text-lg leading-relaxed text-slate-300">
                Our programs are designed to take learners from
                <strong>zero musical knowledge</strong> to confident
                singers and instrumentalists, grounded in strong musical foundations
                and Christian values.
            </p>
        </div>
    </section>

    {{-- PROGRAMS GRID --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="grid gap-6 lg:grid-cols-3">

            {{-- SOL-FA --}}
            <x-ui.card class="p-8 bg-slate-900/80 border border-emerald-400/40 text-slate-50 reveal">
                <span class="text-xs font-semibold text-emerald-300">FOUNDATION</span>
                <h2 class="mt-3 text-2xl font-semibold">
                    Tonic Sol-Fa
                </h2>
                <p class="mt-4 text-slate-200 leading-relaxed text-sm">
                    Learners begin with the notation system used in church hymnals.
                    This level focuses on sight-reading, voice parts, rhythm,
                    and correct hymn singing.
                </p>

                <ul class="mt-5 space-y-2 text-sm text-slate-200">
                    <li>• Music reading fundamentals</li>
                    <li>• Voice parts (SATB)</li>
                    <li>• Hymn rules and structure</li>
                </ul>

                <div class="mt-6 text-xs text-emerald-200">
                    Required for all beginners
                </div>
            </x-ui.card>

            {{-- STAFF NOTATION --}}
            <x-ui.card class="p-8 bg-slate-900/80 border border-sky-400/40 text-slate-50 reveal">
                <span class="text-xs font-semibold text-sky-300">ADVANCEMENT</span>
                <h2 class="mt-3 text-2xl font-semibold">
                    Staff Notation (Muhundwanota)
                </h2>
                <p class="mt-4 text-slate-200 leading-relaxed text-sm">
                    After Sol-Fa, learners advance to international music notation,
                    enabling them to read and perform music beyond hymnals.
                </p>

                <ul class="mt-5 space-y-2 text-sm text-slate-200">
                    <li>• International notation system</li>
                    <li>• Sight-reading proficiency</li>
                    <li>• Musical interpretation</li>
                </ul>

                <div class="mt-6 text-xs text-sky-200">
                    Prerequisite: Sol-Fa completion
                </div>
            </x-ui.card>

            {{-- INSTRUMENTS --}}
            <x-ui.card class="p-8 bg-slate-900/80 border border-purple-400/40 text-slate-50 reveal">
                <span class="text-xs font-semibold text-purple-300">SPECIALIZATION</span>
                <h2 class="mt-3 text-2xl font-semibold">
                    Instrumental Training
                </h2>
                <p class="mt-4 text-slate-200 leading-relaxed text-sm">
                    Learners who read music confidently can specialize
                    in musical instruments to support worship and performance.
                </p>

                <ul class="mt-5 space-y-2 text-sm text-slate-200">
                    <li>• Piano</li>
                    <li>• Guitar</li>
                    <li>• Violin</li>
                </ul>

                <div class="mt-6 text-xs text-purple-200">
                    Based on availability of instruments
                </div>
            </x-ui.card>

        </div>
    </section>

    {{-- PROGRESSION --}}
    <section class="bg-slate-950/80 py-20 text-white">
        <div class="mx-auto max-w-7xl px-6">
            <h2 class="text-3xl font-semibold text-center">
                Learning Progression
            </h2>

            <div class="mt-12 grid gap-6 md:grid-cols-3">
                <div class="rounded-[28px] bg-white/5 p-8 backdrop-blur reveal">
                    <div class="text-sm font-semibold text-emerald-400">Step 1</div>
                    <h3 class="mt-3 text-xl font-semibold">Sol-Fa</h3>
                    <p class="mt-3 text-white/70">
                        Learn to read and sing music correctly using hymn notation.
                    </p>
                </div>

                <div class="rounded-[28px] bg-white/5 p-8 backdrop-blur reveal">
                    <div class="text-sm font-semibold text-sky-400">Step 2</div>
                    <h3 class="mt-3 text-xl font-semibold">Staff Notation</h3>
                    <p class="mt-3 text-white/70">
                        Transition to international music notation and sight-reading.
                    </p>
                </div>

                <div class="rounded-[28px] bg-white/5 p-8 backdrop-blur reveal">
                    <div class="text-sm font-semibold text-purple-400">Step 3</div>
                    <h3 class="mt-3 text-xl font-semibold">Instruments</h3>
                    <p class="mt-3 text-white/70">
                        Apply music reading skills to piano, guitar, or violin.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- OUTCOMES --}}
    <section class="mx-auto max-w-7xl px-6 py-20">
        <x-ui.card class="p-10 bg-slate-900/80 border border-slate-700/80 text-slate-50 reveal">
            <h2 class="text-2xl font-semibold">
                Outcomes & Opportunities
            </h2>

            <p class="mt-4 text-slate-200 leading-relaxed">
                Graduates of Amazing Grace Academy serve in choirs,
                teach music in churches, participate in recordings,
                and some pursue international certification such as
                <strong>ABRSM</strong>.
            </p>

            <p class="mt-4 text-slate-200 leading-relaxed">
                Our goal is not only skill development, but lasting
                impact in music ministry across Rwanda and beyond.
            </p>
        </x-ui.card>
    </section>
@endsection
