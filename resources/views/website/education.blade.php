@extends('layouts.website')

@section('title', 'Class Education — Amazing Grace Academy')

@section('content')
    {{-- HERO --}}
    <section class="mx-auto max-w-7xl px-6 pt-20 pb-16">
        <div class="page-hero px-6 py-10 sm:px-10 lg:px-12">
            <div class="grid items-center gap-8 lg:grid-cols-[1.1fr_0.9fr]">
                <div class="reveal space-y-5">
                    <div class="flex flex-wrap items-center gap-3 text-sm text-teal-700">
                        <span class="pill bg-white border border-teal-100 text-teal-700 shadow-sm">
                            Class Education
                        </span>
                        <span class="pill bg-white border border-amber-100 text-amber-700 shadow-sm">
                            Cohorts & Courses
                        </span>
                    </div>
                    <div class="space-y-3">
                        <h1 class="text-4xl sm:text-5xl font-semibold tracking-tight text-slate-900 leading-tight">
                            Courses that take you from Sol‑Fa to instruments.
                        </h1>
                        <p class="text-lg leading-relaxed text-slate-600 max-w-2xl">
                            Explore active and upcoming cohorts. If a course is ongoing, register to secure your seat.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <x-ui.button href="{{ url('/register') }}" variant="primary">
                            Register for cohort
                        </x-ui.button>
                        <x-ui.button href="{{ route('contact') }}" variant="outline">
                            Ask about schedule
                        </x-ui.button>
                    </div>
                </div>

                <div
                    class="reveal soft-card p-8 bg-white/90 backdrop-blur shadow-[0_18px_50px_rgba(15,23,42,0.14)] border border-emerald-100">
                    <div class="flex items-center gap-3">
                        <div
                            class="h-12 w-12 rounded-2xl bg-emerald-100 text-emerald-800 grid place-items-center font-bold">
                            AG
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-emerald-700">Current cohort</div>
                            <div class="text-slate-900 font-semibold">Class of 2026</div>
                            <p class="text-xs text-slate-500">Ongoing • Register to join mid-stream</p>
                        </div>
                    </div>
                    <div class="mt-6 grid gap-3 sm:grid-cols-3 text-sm text-slate-700">
                        <div class="rounded-2xl border border-emerald-100 bg-emerald-50/70 p-3">
                            <div class="text-xs font-semibold text-emerald-700">Sol-Fa</div>
                            <div class="text-lg font-bold text-slate-900">Ongoing</div>
                            <p class="text-[11px] text-slate-500">Join now</p>
                        </div>
                        <div class="rounded-2xl border border-teal-100 bg-teal-50/70 p-3">
                            <div class="text-xs font-semibold text-teal-700">Staff Notation</div>
                            <div class="text-lg font-bold text-slate-900">Starting soon</div>
                            <p class="text-[11px] text-slate-500">After Sol-Fa</p>
                        </div>
                        <div class="rounded-2xl border border-amber-100 bg-amber-50/70 p-3">
                            <div class="text-xs font-semibold text-amber-700">Instruments</div>
                            <div class="text-lg font-bold text-slate-900">Slots limited</div>
                            <p class="text-[11px] text-slate-500">Piano • Guitar • Violin</p>
                        </div>
                    </div>
                    <p class="mt-4 text-xs text-slate-500">
                        Classes: Saturdays 2:00–5:00 PM • Kigali Bilingual Church
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- COURSES --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal flex flex-wrap items-center justify-between gap-4 mb-8">
            <div>
                <p class="text-sm font-semibold text-emerald-700">Courses</p>
                <h2 class="text-3xl font-semibold text-slate-900">What you can enroll in</h2>
            </div>
            <div class="pill bg-white border border-slate-200 text-slate-700">Register to reserve your seat</div>
        </div>

        <div class="grid gap-6 lg:grid-cols-3">
            <div class="soft-card p-8 reveal">
                <div class="flex items-center justify-between text-xs font-semibold">
                    <span class="text-emerald-700">Foundation</span>
                    <span class="pill bg-emerald-50 text-emerald-700 border border-emerald-100 text-[11px]">Ongoing</span>
                </div>
                <h3 class="mt-3 text-xl font-semibold text-slate-900">Tonic Sol-Fa</h3>
                <p class="mt-2 text-sm text-slate-600">Start here. Learn hymn notation, rhythm, and SATB parts.</p>
                <ul class="mt-4 space-y-2 text-sm text-slate-700">
                    <li>• Sight-reading basics</li>
                    <li>• Voice parts and blend</li>
                    <li>• Hymn structure</li>
                </ul>
                <div class="mt-5 flex items-center justify-between text-sm">
                    <span class="text-emerald-700 font-semibold">Join this cohort</span>
                    <x-ui.button href="{{ url('/register') }}" variant="outline">Register</x-ui.button>
                </div>
            </div>

            <div class="soft-card p-8 reveal">
                <div class="flex items-center justify-between text-xs font-semibold">
                    <span class="text-teal-700">Advancement</span>
                    <span class="pill bg-teal-50 text-teal-700 border border-teal-100 text-[11px]">Starting soon</span>
                </div>
                <h3 class="mt-3 text-xl font-semibold text-slate-900">Staff Notation</h3>
                <p class="mt-2 text-sm text-slate-600">Move to international notation and develop confident sight‑reading.
                </p>
                <ul class="mt-4 space-y-2 text-sm text-slate-700">
                    <li>• Note values & signatures</li>
                    <li>• Interval training</li>
                    <li>• Interpretation</li>
                </ul>
                <div class="mt-5 flex items-center justify-between text-sm">
                    <span class="text-teal-700 font-semibold">Prerequisite: Sol-Fa</span>
                    <x-ui.button href="{{ url('/register') }}" variant="outline">Waitlist</x-ui.button>
                </div>
            </div>

            <div class="soft-card p-8 reveal">
                <div class="flex items-center justify-between text-xs font-semibold">
                    <span class="text-amber-700">Specialization</span>
                    <span class="pill bg-amber-50 text-amber-700 border border-amber-100 text-[11px]">Limited slots</span>
                </div>
                <h3 class="mt-3 text-xl font-semibold text-slate-900">Instrument Track</h3>
                <p class="mt-2 text-sm text-slate-600">Apply literacy to piano, guitar, or violin with guided practice.</p>
                <ul class="mt-4 space-y-2 text-sm text-slate-700">
                    <li>• Technique & posture</li>
                    <li>• Repertoire for ministry</li>
                    <li>• Ensemble skills</li>
                </ul>
                <div class="mt-5 flex items-center justify-between text-sm">
                    <span class="text-amber-700 font-semibold">Register early</span>
                    <x-ui.button href="{{ url('/register') }}" variant="outline">Apply</x-ui.button>
                </div>
            </div>
        </div>
    </section>

    {{-- COHORT STATUS --}}
    <section class="bg-emerald-50/70 py-20">
        <div class="mx-auto max-w-7xl px-6">
            <div class="reveal text-center">
                <p class="text-sm font-semibold text-emerald-700">Cohort status</p>
                <h2 class="mt-2 text-3xl font-semibold text-slate-900">What’s running now</h2>
                <p class="mt-3 text-slate-600 max-w-2xl mx-auto">
                    We keep cohorts small so every learner gets attention. If the track is open, register right away.
                </p>
            </div>

            <div class="mt-10 grid gap-4 md:grid-cols-4">
                <div class="soft-card p-5 text-center reveal">
                    <div class="text-xs font-semibold text-emerald-700">Sol-Fa</div>
                    <div class="mt-2 text-lg font-semibold text-slate-900">Ongoing</div>
                    <p class="text-xs text-slate-500">Join now</p>
                </div>
                <div class="soft-card p-5 text-center reveal">
                    <div class="text-xs font-semibold text-teal-700">Staff Notation</div>
                    <div class="mt-2 text-lg font-semibold text-slate-900">Next in 4 weeks</div>
                    <p class="text-xs text-slate-500">Waitlist</p>
                </div>
                <div class="soft-card p-5 text-center reveal">
                    <div class="text-xs font-semibold text-amber-700">Instruments</div>
                    <div class="mt-2 text-lg font-semibold text-slate-900">Limited slots</div>
                    <p class="text-xs text-slate-500">Register early</p>
                </div>
                <div class="soft-card p-5 text-center reveal">
                    <div class="text-xs font-semibold text-slate-700">Leadership</div>
                    <div class="mt-2 text-lg font-semibold text-slate-900">Invite only</div>
                    <p class="text-xs text-slate-500">After Staff</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="mx-auto max-w-7xl px-6 py-20">
        <div class="soft-card p-10 text-center reveal">
            <div class="pill bg-white border border-emerald-100 text-emerald-700 inline-flex">
                Ready to learn?
            </div>
            <h2 class="mt-4 text-2xl font-semibold text-slate-900">Save your seat in the current cohort</h2>
            <p class="mt-3 text-slate-600 max-w-2xl mx-auto">
                We’ll confirm by phone or email and guide you to the right level.
            </p>
            <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center">
                <x-ui.button href="{{ url('/register') }}" variant="primary" class="w-full sm:w-auto">
                    Register now
                </x-ui.button>
                <x-ui.button href="{{ route('contact') }}" variant="outline" class="w-full sm:w-auto">
                    Talk to a coordinator
                </x-ui.button>
            </div>
        </div>
    </section>
@endsection
