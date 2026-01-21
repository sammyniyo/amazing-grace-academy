@extends('layouts.website')

@section('title', 'Programs — Amazing Grace Academy')

@section('content')
    {{-- HERO --}}
    <section class="mx-auto max-w-7xl px-6 pt-20 pb-16">
        <div class="page-hero px-6 py-10 sm:px-10 lg:px-14">
            <div class="grid items-center gap-10 lg:grid-cols-[1.15fr_0.85fr]">
                <div class="reveal space-y-6">
                    <div class="flex flex-wrap items-center gap-3 text-sm text-teal-700">
                        <span class="pill bg-white border border-teal-100 text-teal-700 shadow-sm">
                            Training Programs
                        </span>
                        <span class="pill bg-white border border-amber-100 text-amber-700 shadow-sm">
                            From Sol-Fa to instruments
                        </span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl font-semibold tracking-tight text-slate-900 leading-tight">
                        Music education pathway for choir, literacy, and instruments.
                    </h1>

                    <p class="text-lg text-slate-600 max-w-2xl">
                        Move from foundational Tonic Sol-Fa to staff notation, sight‑reading, and instrumental mastery—ready to lead worship confidently.
                    </p>

                    <ul class="list-check">
                        <li><span class="dot"></span> Free, church-based training with certified mentors</li>
                        <li><span class="dot"></span> SATB, rhythm, rehearsal methods, conducting basics</li>
                        <li><span class="dot"></span> Piano, guitar, violin guided by music literacy</li>
                    </ul>

                    <div class="flex flex-wrap gap-3">
                        <x-ui.button href="{{ url('/register') }}" variant="primary" class="bg-emerald-700 hover:bg-emerald-600">
                            Class Register
                        </x-ui.button>
                        <x-ui.button href="{{ route('contact') }}" variant="outline">
                            Talk to a lead
                        </x-ui.button>
                    </div>
                </div>

                <div class="reveal relative">
                    <div class="absolute -inset-6 rounded-[32px] bg-gradient-to-r from-emerald-200/35 via-teal-200/25 to-amber-200/35 blur-2xl"></div>
                    <div class="relative rounded-[28px] overflow-hidden bg-white shadow-[0_20px_60px_rgba(15,23,42,0.18)] border border-emerald-100">
                        <div class="aspect-[4/5] relative">
                            <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?auto=format&fit=crop&w=900&q=80"
                                alt="Choir rehearsal"
                                class="h-full w-full object-cover">
                            <div class="absolute left-4 top-4 flex items-center gap-2 rounded-full bg-white/90 px-4 py-2 text-xs font-semibold text-teal-700 shadow">
                                Kigali • Weekly rehearsal
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 grid gap-3 sm:grid-cols-2">
                                <div class="rounded-2xl bg-white/90 px-4 py-3 shadow-lg border border-emerald-100">
                                    <div class="text-[11px] text-slate-500">Progress</div>
                                    <div class="flex items-center gap-3 mt-1 text-sm text-slate-700">
                                        <span class="font-semibold text-emerald-700">Sol-Fa</span>
                                        <span class="text-slate-500">→ Staff → Instruments</span>
                                    </div>
                                </div>
                                <div class="rounded-2xl bg-emerald-700 text-white px-4 py-3 shadow-lg">
                                    <div class="text-xs">Next Cohort</div>
                                    <div class="text-base font-semibold">Class of 2026</div>
                                    <div class="text-[11px] text-emerald-100">Limited spots • Register early</div>
                                </div>
                            </div>
                            <div class="absolute -right-3 top-10 rounded-full bg-white shadow-lg border border-teal-100">
                                <div class="flex items-center gap-2 px-4 py-2 text-xs font-semibold text-teal-700">
                                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                    Live cohort
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- TRACKS --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal flex flex-wrap items-center justify-between gap-4 mb-8">
            <div class="space-y-2">
                <p class="text-sm font-semibold text-emerald-700">Choose your pathway</p>
                <h2 class="text-3xl font-semibold text-slate-900">Tracks built for every learner</h2>
            </div>
            <div class="text-sm text-slate-500">Weekly classes • Saturdays • Kigali</div>
        </div>

        <div class="grid gap-6 lg:grid-cols-4">
            <div class="soft-card p-7 reveal">
                <div class="pill bg-emerald-50 text-emerald-700 border border-emerald-100 w-fit">Foundation</div>
                <h3 class="mt-4 text-xl font-semibold text-slate-900">Tonic Sol-Fa</h3>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Learn hymn notation, voice parts, rhythm, and correct hymn singing.
                </p>
                <ul class="mt-4 space-y-2 text-sm text-slate-700">
                    <li>• Music reading basics</li>
                    <li>• SATB parts</li>
                    <li>• Hymn rules & structure</li>
                </ul>
                <div class="mt-5 text-xs font-semibold text-emerald-700">Required for all beginners</div>
            </div>

            <div class="soft-card p-7 reveal">
                <div class="pill bg-teal-50 text-teal-700 border border-teal-100 w-fit">Advancement</div>
                <h3 class="mt-4 text-xl font-semibold text-slate-900">Staff Notation</h3>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Move to international notation for wider repertoire and confident sight‑reading.
                </p>
                <ul class="mt-4 space-y-2 text-sm text-slate-700">
                    <li>• Note values & signatures</li>
                    <li>• Sight-reading drills</li>
                    <li>• Musical interpretation</li>
                </ul>
                <div class="mt-5 text-xs font-semibold text-emerald-700">Prerequisite: Sol-Fa completion</div>
            </div>

            <div class="soft-card p-7 reveal">
                <div class="pill bg-amber-50 text-amber-700 border border-amber-100 w-fit">Specialization</div>
                <h3 class="mt-4 text-xl font-semibold text-slate-900">Instrumental Training</h3>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Apply literacy to piano, guitar, or violin with hands-on coaching.
                </p>
                <ul class="mt-4 space-y-2 text-sm text-slate-700">
                    <li>• Technique & posture</li>
                    <li>• Repertoire for ministry</li>
                    <li>• Ensemble playing</li>
                </ul>
                <div class="mt-5 text-xs font-semibold text-emerald-700">Based on instrument availability</div>
            </div>

            <div class="soft-card p-7 reveal">
                <div class="pill bg-slate-50 text-slate-800 border border-slate-200 w-fit">Leadership</div>
                <h3 class="mt-4 text-xl font-semibold text-slate-900">Choir & Worship Leadership</h3>
                <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                    Build skills for conducting, rehearsal planning, and worship flow.
                </p>
                <ul class="mt-4 space-y-2 text-sm text-slate-700">
                    <li>• Conducting basics</li>
                    <li>• Song selection</li>
                    <li>• Team communication</li>
                </ul>
                <div class="mt-5 text-xs font-semibold text-emerald-700">For advanced cohorts</div>
            </div>
        </div>
    </section>

    {{-- PROGRESSION --}}
    <section class="bg-emerald-50/70 py-20">
        <div class="mx-auto max-w-7xl px-6">
            <div class="reveal text-center">
                <p class="text-sm font-semibold text-emerald-700">How it works</p>
                <h2 class="mt-2 text-3xl font-semibold text-slate-900">Learning progression</h2>
                <p class="mt-3 text-slate-600 max-w-2xl mx-auto">
                    Cohorts move together so no one is left behind. Each step unlocks the next level of ministry readiness.
                </p>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-3">
                <div class="soft-card p-8 bg-white reveal">
                    <div class="flex items-center gap-2 text-sm font-semibold text-emerald-700">
                        <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span> Step 1
                    </div>
                    <h3 class="mt-3 text-xl font-semibold text-slate-900">Sol-Fa Literacy</h3>
                    <p class="mt-3 text-slate-600">
                        Read and sing hymns correctly, master rhythm, and blend in SATB parts.
                    </p>
                </div>

                <div class="soft-card p-8 bg-white reveal">
                    <div class="flex items-center gap-2 text-sm font-semibold text-emerald-700">
                        <span class="h-2.5 w-2.5 rounded-full bg-teal-500"></span> Step 2
                    </div>
                    <h3 class="mt-3 text-xl font-semibold text-slate-900">Staff Notation</h3>
                    <p class="mt-3 text-slate-600">
                        Build true sight‑reading, key signatures, intervals, and interpretation.
                    </p>
                </div>

                <div class="soft-card p-8 bg-white reveal">
                    <div class="flex items-center gap-2 text-sm font-semibold text-emerald-700">
                        <span class="h-2.5 w-2.5 rounded-full bg-amber-500"></span> Step 3
                    </div>
                    <h3 class="mt-3 text-xl font-semibold text-slate-900">Instrument & Leadership</h3>
                    <p class="mt-3 text-slate-600">
                        Translate literacy to instruments, lead choirs, and serve confidently on stage.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- WEEKLY & COHORTS --}}
    <section class="mx-auto max-w-7xl px-6 py-20">
        <div class="grid gap-6 lg:grid-cols-[1.1fr_0.9fr]">
            <div class="soft-card p-10 reveal">
                <div class="flex items-center gap-2 text-sm font-semibold text-emerald-700">
                    Weekly rhythm
                </div>
                <h3 class="mt-3 text-2xl font-semibold text-slate-900">Learn with community</h3>
                <p class="mt-3 text-slate-600">
                    Classes are paced, structured, and interactive to keep every singer and instrumentalist engaged.
                </p>

                <div class="mt-6 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-2xl border border-emerald-100 bg-emerald-50/60 p-4">
                        <div class="text-sm font-semibold text-emerald-700">Schedule</div>
                        <p class="mt-1 text-sm text-slate-700">Saturdays • 2:00 PM — 5:00 PM</p>
                        <p class="text-xs text-slate-500">Extra rehearsals before events</p>
                    </div>
                    <div class="rounded-2xl border border-amber-100 bg-amber-50/60 p-4">
                        <div class="text-sm font-semibold text-amber-700">Location</div>
                        <p class="mt-1 text-sm text-slate-700">Kigali Bilingual Church (ASA UR Nyarugenge)</p>
                        <p class="text-xs text-slate-500">Quiet rooms for instrument practice</p>
                    </div>
                </div>

                <div class="mt-6 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                        <div class="text-xs font-semibold text-slate-500">Cohorts</div>
                        <div class="mt-1 text-lg font-semibold text-slate-900">30–40 learners</div>
                        <p class="text-xs text-slate-500">Small groups</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                        <div class="text-xs font-semibold text-slate-500">Mentors</div>
                        <div class="mt-1 text-lg font-semibold text-slate-900">6+ coaches</div>
                        <p class="text-xs text-slate-500">Choir & instruments</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                        <div class="text-xs font-semibold text-slate-500">Tuition</div>
                        <div class="mt-1 text-lg font-semibold text-slate-900">Free</div>
                        <p class="text-xs text-slate-500">Support is welcome</p>
                    </div>
                </div>

                <div class="mt-6 flex flex-wrap gap-3">
                    <x-ui.button href="{{ url('/register') }}" variant="primary" class="bg-emerald-700 hover:bg-emerald-600">
                        Register your spot
                    </x-ui.button>
                    <x-ui.button href="{{ route('contact') }}" variant="outline">
                        Ask about schedule
                    </x-ui.button>
                </div>
            </div>

            <div class="soft-card p-10 bg-gradient-to-br from-emerald-600 via-teal-600 to-emerald-700 text-white reveal">
                <div class="pill-dark">Outcomes & Impact</div>
                <h3 class="mt-4 text-3xl font-semibold">Serve with confidence</h3>
                <p class="mt-3 text-emerald-50">
                    We train leaders who serve in choirs, bands, and events across Rwanda.
                </p>

                <div class="mt-6 space-y-4 text-sm on-dark-body">
                    <div class="flex items-start gap-3">
                        <div class="pill-dark">01</div>
                        <div>
                            <div class="font-semibold on-dark-title">Lead worship</div>
                            <p>Conduct choirs, arrange setlists, and guide congregational singing.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="pill-dark">02</div>
                        <div>
                            <div class="font-semibold on-dark-title">Record & perform</div>
                            <p>Join studio sessions and live events with confident literacy.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="pill-dark">03</div>
                        <div>
                            <div class="font-semibold on-dark-title">Teach others</div>
                            <p>Multiply impact by training new choirs and instrumentalists.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-2 text-xs font-semibold on-dark-muted">
                    ABRSM pathway support available
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ / CTA --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="soft-card p-10 reveal">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div>
                    <p class="text-sm font-semibold text-emerald-700">Questions</p>
                    <h3 class="text-2xl font-semibold text-slate-900">What to expect</h3>
                </div>
                <x-ui.button href="{{ route('contact') }}" variant="outline">
                    Talk with a coordinator
                </x-ui.button>
            </div>

            <div class="mt-6 grid gap-4 md:grid-cols-2">
                <div class="timeline reveal">
                    <div class="timeline-item">
                        <div class="text-sm font-semibold text-slate-900">Do I need prior experience?</div>
                        <p class="mt-2 text-sm text-slate-600">
                            No. We start with Sol-Fa for everyone so beginners grow together.
                        </p>
                    </div>
                    <div class="timeline-item">
                        <div class="text-sm font-semibold text-slate-900">How long is each level?</div>
                        <p class="mt-2 text-sm text-slate-600">
                            Each level runs 6–9 months depending on cohort pace and instrument slots.
                        </p>
                    </div>
                    <div class="timeline-item">
                        <div class="text-sm font-semibold text-slate-900">Is there a fee?</div>
                        <p class="mt-2 text-sm text-slate-600">
                            Training is free; we welcome voluntary support to buy instruments and music.
                        </p>
                    </div>
                </div>

                <div class="rounded-3xl border border-teal-100 bg-gradient-to-br from-emerald-50 via-teal-50 to-amber-50 p-8 shadow-sm reveal">
                    <div class="pill bg-white border border-emerald-100 text-emerald-700">Join the next cohort</div>
                    <h4 class="mt-4 text-2xl font-semibold text-slate-900">Ready to learn?</h4>
                    <p class="mt-3 text-slate-600">
                        Save your seat for the upcoming class. We’ll confirm by email or phone.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-3">
                        <x-ui.button href="{{ url('/register') }}" variant="primary" class="bg-emerald-700 hover:bg-emerald-600">
                            Register now
                        </x-ui.button>
                        <x-ui.button href="{{ route('contact') }}" variant="glass">
                            Ask a question
                        </x-ui.button>
                    </div>
                    <div class="mt-4 text-xs text-slate-500">
                        Limited instrument slots; choir seats prioritized for Sol-Fa graduates.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
