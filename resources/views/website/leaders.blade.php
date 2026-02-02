@extends('layouts.website')

@section('title', 'Leadership — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-20 pb-16">
        <div class="page-hero px-6 py-10 sm:px-10 lg:px-12">
            <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] items-center">
                <div class="reveal space-y-5">
                    <div class="flex flex-wrap items-center gap-3 text-sm text-teal-700">
                        <span class="pill bg-white border border-emerald-100 text-emerald-700 shadow-sm">
                            Leadership & Administration
                        </span>
                        <span class="pill bg-white border border-amber-100 text-amber-700 shadow-sm">
                            Committed to excellence
                        </span>
                    </div>
                    <div class="space-y-3">
                        <h1 class="text-4xl sm:text-5xl font-semibold tracking-tight text-slate-900 leading-tight">
                            The leaders guiding Amazing Grace Academy
                        </h1>
                        <p class="text-lg leading-relaxed text-slate-600 max-w-2xl">
                            Our directors, trainers, and coordinators steward the mission, coach learners, and keep every
                            cohort on track.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <x-ui.button href="{{ route('contact') }}" variant="primary">
                            Contact leadership
                        </x-ui.button>
                        <x-ui.button href="{{ url('/register') }}" variant="outline">
                            Join as a learner
                        </x-ui.button>
                    </div>
                </div>

                <div
                    class="reveal soft-card p-8 bg-white/90 backdrop-blur shadow-[0_18px_50px_rgba(15,23,42,0.12)] border border-emerald-100">
                    <div class="flex items-center gap-3">
                        <div
                            class="h-12 w-12 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold">
                            AG
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-emerald-700">Leadership Snapshot</div>
                            <div class="text-slate-900 font-semibold">Mentors • Directors • Coordinators</div>
                        </div>
                    </div>
                    <div class="mt-6 grid gap-4 sm:grid-cols-3">
                        <div class="rounded-2xl border border-emerald-100 bg-emerald-50/70 p-4">
                            <div class="text-xs font-semibold text-emerald-700">Music Trainers</div>
                            <div class="text-lg font-bold text-slate-900">6</div>
                            <p class="text-xs text-slate-600">Choir & instruments</p>
                        </div>
                        <div class="rounded-2xl border border-amber-100 bg-amber-50/70 p-4">
                            <div class="text-xs font-semibold text-amber-700">Coordinators</div>
                            <div class="text-lg font-bold text-slate-900">4</div>
                            <p class="text-xs text-slate-600">Cohort care</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-4">
                            <div class="text-xs font-semibold text-slate-600">Experience</div>
                            <div class="text-lg font-bold text-slate-900">15+ yrs</div>
                            <p class="text-xs text-slate-600">Ministry service</p>
                        </div>
                    </div>
                    <div class="mt-5 text-xs text-slate-500">
                        Seventh-day Adventist • ASA UR Nyarugenge • ASSA Kigali • ECRF • RUM
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- LEADERS GRID --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal flex flex-wrap items-center justify-between gap-3 mb-8">
            <div>
                <p class="text-sm font-semibold text-emerald-700">Meet the team</p>
                <h2 class="text-3xl font-semibold text-slate-900">People behind the academy</h2>
            </div>
            <div class="pill bg-white border border-slate-200 text-slate-700">Open to mentors & volunteers</div>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            {{-- MUSIC TRAINER --}}
            <div class="soft-card p-8 reveal">
                <div class="flex items-start justify-between">
                    <span class="text-xs font-semibold text-emerald-700">
                        Lead Music Trainer
                    </span>
                    <span class="pill bg-emerald-50 text-emerald-700 border border-emerald-100 text-[11px]">
                        Sol-Fa • Staff • ABRSM
                    </span>
                </div>

                <div class="mt-6 flex items-center gap-3">
                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-800 text-lg font-semibold">
                        MG
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-slate-900">
                            Muhayimana Gerald
                        </h2>
                        <p class="text-sm text-slate-600">Choir & Instrument Coach</p>
                    </div>
                </div>

                <p class="mt-4 text-sm text-slate-600 leading-relaxed">
                    Leads Sol-Fa and staff notation, coaches piano/guitar/violin, and prepares learners for international
                    certifications.
                </p>
                <div class="mt-5 flex gap-2 text-xs text-emerald-700 font-semibold">
                    <span class="pill bg-white border border-emerald-100">Sight-reading</span>
                    <span class="pill bg-white border border-emerald-100">Conducting</span>
                </div>
            </div>

            {{-- DIRECTOR --}}
            <div class="soft-card p-8 reveal">
                <div class="flex items-start justify-between">
                    <span class="text-xs font-semibold text-emerald-700">
                        Academy Director
                    </span>
                    <span class="pill bg-teal-50 text-teal-700 border border-teal-100 text-[11px]">
                        Strategy • Oversight
                    </span>
                </div>

                <div class="mt-6 flex items-center gap-3">
                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-teal-100 text-teal-800 text-lg font-semibold">
                        AD
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-slate-900">
                            Academy Director
                        </h2>
                        <p class="text-sm text-slate-600">Leadership & Coordination</p>
                    </div>
                </div>

                <p class="mt-4 text-sm text-slate-600 leading-relaxed">
                    Oversees vision, partnerships with church bodies, enrollment, and strategic growth for sustainable
                    ministry impact.
                </p>
                <div class="mt-5 flex gap-2 text-xs text-teal-700 font-semibold">
                    <span class="pill bg-white border border-teal-100">Church liaison</span>
                    <span class="pill bg-white border border-teal-100">Programs</span>
                </div>
            </div>

            {{-- COORDINATION --}}
            <div class="soft-card p-8 reveal">
                <div class="flex items-start justify-between">
                    <span class="text-xs font-semibold text-emerald-700">
                        Coordinators
                    </span>
                    <span class="pill bg-amber-50 text-amber-700 border border-amber-100 text-[11px]">
                        Cohorts • Care
                    </span>
                </div>

                <div class="mt-6 flex items-center gap-3">
                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-amber-100 text-amber-800 text-lg font-semibold">
                        AC
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-slate-900">
                            Academy Coordinators
                        </h2>
                        <p class="text-sm text-slate-600">Program & Student Support</p>
                    </div>
                </div>

                <p class="mt-4 text-sm text-slate-600 leading-relaxed">
                    Track attendance, communicate schedules, and ensure every learner has what they need for weekly
                    progress.
                </p>
                <div class="mt-5 flex gap-2 text-xs text-amber-700 font-semibold">
                    <span class="pill bg-white border border-amber-100">Follow-up</span>
                    <span class="pill bg-white border border-amber-100">Logistics</span>
                </div>
            </div>

            {{-- MEDIA --}}
            <div class="soft-card p-8 reveal">
                <div class="flex items-start justify-between">
                    <span class="text-xs font-semibold text-emerald-700">
                        Media & Production
                    </span>
                    <span class="pill bg-slate-50 text-slate-800 border border-slate-200 text-[11px]">
                        Audio • Video
                    </span>
                </div>

                <div class="mt-6 flex items-center gap-3">
                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-slate-800 text-lg font-semibold">
                        MP
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-slate-900">
                            Media Production Team
                        </h2>
                        <p class="text-sm text-slate-600">Recording & Events</p>
                    </div>
                </div>

                <p class="mt-4 text-sm text-slate-600 leading-relaxed">
                    Captures rehearsals and events, manages recordings, and supports live sound for ministry engagements.
                </p>
                <div class="mt-5 flex gap-2 text-xs text-slate-700 font-semibold">
                    <span class="pill bg-white border border-slate-200">Audio</span>
                    <span class="pill bg-white border border-slate-200">Video</span>
                </div>
            </div>

            {{-- ADMIN --}}
            <div class="soft-card p-8 reveal">
                <div class="flex items-start justify-between">
                    <span class="text-xs font-semibold text-emerald-700">
                        Administration
                    </span>
                    <span class="pill bg-emerald-50 text-emerald-700 border border-emerald-100 text-[11px]">
                        Finance • Support
                    </span>
                </div>

                <div class="mt-6 flex items-center gap-3">
                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-800 text-lg font-semibold">
                        FA
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-slate-900">
                            Finance & Admin
                        </h2>
                        <p class="text-sm text-slate-600">Operations & Stewardship</p>
                    </div>
                </div>

                <p class="mt-4 text-sm text-slate-600 leading-relaxed">
                    Handles finances, budgeting for instruments, and logistics for events and concerts.
                </p>
                <div class="mt-5 flex gap-2 text-xs text-emerald-700 font-semibold">
                    <span class="pill bg-white border border-emerald-100">Budget</span>
                    <span class="pill bg-white border border-emerald-100">Procurement</span>
                </div>
            </div>

        </div>
    </section>

    {{-- GOVERNANCE --}}
    <section class="bg-emerald-50/70 py-20">
        <div class="mx-auto max-w-7xl px-6">
            <div class="reveal text-center">
                <p class="text-sm font-semibold text-emerald-700">Governance & Oversight</p>
                <h2 class="mt-2 text-3xl font-semibold text-slate-900">
                    Anchored in the Adventist structure
                </h2>
                <p class="mt-4 max-w-3xl mx-auto text-slate-600 leading-relaxed">
                    Amazing Grace Academy operates within the Seventh-day Adventist Church family and benefits from guidance
                    and collaboration with recognized bodies.
                </p>
            </div>

            <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4 reveal">
                <div class="soft-card p-5 text-center">ASA UR Nyarugenge</div>
                <div class="soft-card p-5 text-center">ASSA Kigali</div>
                <div class="soft-card p-5 text-center">ECRF</div>
                <div class="soft-card p-5 text-center">Rwanda Union Mission (RUM)</div>
            </div>
        </div>
    </section>

    {{-- CALL TO ACTION --}}
    <section class="mx-auto max-w-7xl px-6 py-20">
        <div class="soft-card p-10 text-center reveal">
            <div class="pill bg-white border border-emerald-100 text-emerald-700 inline-flex">
                Serve with us
            </div>
            <h2 class="mt-4 text-2xl font-semibold text-slate-900">
                Passionate about music ministry?
            </h2>

            <p class="mt-4 text-slate-600 max-w-2xl mx-auto leading-relaxed">
                We welcome leaders, trainers, and volunteers who want to shape the next generation of worship leaders.
            </p>

            <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center">
                <x-ui.button href="{{ route('contact') }}" variant="primary" class="w-full sm:w-auto">
                    Contact the academy
                </x-ui.button>
                <x-ui.button href="{{ url('/register') }}" variant="outline" class="w-full sm:w-auto">
                    Join a cohort
                </x-ui.button>
            </div>
        </div>
    </section>
@endsection
