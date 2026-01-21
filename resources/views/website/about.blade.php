@extends('layouts.website')

@section('title', 'About — Amazing Grace Academy')

@section('content')
    {{-- HERO --}}
    <section class="mx-auto max-w-7xl px-6 pt-20 pb-16">
        <div class="rounded-[36px] overflow-hidden bg-gradient-to-br from-slate-50 via-teal-50 to-emerald-100/60 border border-teal-100 shadow-[0_24px_60px_rgba(15,118,110,0.12)]">
            <div class="grid items-center gap-10 lg:grid-cols-2 px-6 py-10 sm:px-10 lg:px-12">
                <div class="reveal space-y-6">
                    <div class="flex flex-wrap items-center gap-3 text-sm text-teal-700">
                        <span class="pill bg-white border border-teal-100 text-teal-700 shadow-sm">About the Academy</span>
                        <span class="pill bg-white border border-amber-100 text-amber-700 shadow-sm">Founded 2016</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl font-semibold tracking-tight text-slate-900 leading-tight">
                        Choir-based music training for worship and excellence.
                    </h1>

                    <p class="text-lg text-slate-600 max-w-2xl">
                        We teach Sol-Fa, staff notation, and instruments within the Seventh-day Adventist Church —
                        preparing singers and leaders to read, teach, and serve with confidence.
                    </p>

                    <ul class="space-y-2 text-sm text-slate-700">
                        <li class="flex items-center gap-2"><span class="dot"></span> Free church-based program</li>
                        <li class="flex items-center gap-2"><span class="dot"></span> Sight-reading, harmony, and rehearsal methods</li>
                        <li class="flex items-center gap-2"><span class="dot"></span> Piano, Guitar, Violin guided by literacy</li>
                    </ul>

                    <div class="flex flex-wrap gap-3">
                        <x-ui.button href="{{ route('programs') }}" variant="primary">
                            View Programs
                        </x-ui.button>
                        <x-ui.button href="{{ url('/register') }}" variant="outline">
                            Class Register
                        </x-ui.button>
                    </div>

                    <div class="flex flex-wrap gap-3 text-sm text-slate-600">
                        <span class="pill bg-white border border-teal-100 text-teal-700">700+ learners</span>
                        <span class="pill bg-white border border-amber-100 text-amber-700">168 Sol-Fa grads</span>
                        <span class="pill bg-white border border-slate-200 text-slate-700">ABRSM certificates</span>
                    </div>
                </div>

                <div class="reveal relative">
                    <div class="absolute -inset-4 rounded-[30px] bg-gradient-to-r from-emerald-200/30 via-teal-200/20 to-amber-200/30 blur-2xl"></div>
                    <div class="relative rounded-[30px] overflow-hidden bg-white shadow-2xl border border-teal-100">
                        <div class="aspect-[4/5] relative">
                            <img src="https://placehold.co/640x800/e0f2fe/0f172a?text=Choir+&+Class" alt=""
                                class="h-full w-full object-cover">
                            <div class="absolute left-4 top-4 flex items-center gap-2 rounded-full bg-white/90 px-4 py-2 text-xs font-semibold text-teal-700 shadow">
                                Choir rehearsal • Kigali
                            </div>
                            <div class="absolute bottom-4 left-4 rounded-2xl bg-white/90 px-4 py-3 shadow-lg border border-emerald-100">
                                <div class="text-[11px] text-slate-500">Learning Path</div>
                                <div class="flex items-center gap-3 mt-1">
                                    <div class="text-2xl font-bold text-emerald-700">Sol-Fa → Staff → Instruments</div>
                                </div>
                            </div>
                            <div class="absolute -right-4 top-10 rounded-2xl bg-emerald-600 text-white px-4 py-3 shadow-lg">
                                <div class="text-xs">Next Cohort</div>
                                <div class="text-base font-semibold">Class of 2026</div>
                                <div class="text-[11px] text-emerald-100">Limited spots</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WHO / WHAT --}}
    <section class="mx-auto max-w-7xl px-6 pb-24">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="soft-card p-10 reveal">
                <h2 class="text-2xl font-semibold text-slate-900">Who We Are</h2>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Amazing Grace Academy is a music school within the <strong>Seventh-day Adventist Church</strong>, under <strong>ASSA Kigali</strong>, at <strong>ASA UR Nyarugenge</strong>, Kigali Bilingual Church.
                </p>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Founded in <strong>October 2016</strong>, we welcome beginners and experienced singers alike, offering free training grounded in worship and ministry.
                </p>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    We value discipline, harmony, and service — preparing learners to read, lead, and inspire choirs across Rwanda.
                </p>
            </div>

            <div class="soft-card p-10 reveal">
                <h2 class="text-2xl font-semibold text-slate-900">What We Teach</h2>
                <ul class="mt-6 space-y-3 text-slate-700 text-sm">
                    <li>• Tonic Sol-Fa (church hymnal notation)</li>
                    <li>• International Staff Notation (Muhundwanota)</li>
                    <li>• Sight-reading, harmony, hymn analysis</li>
                    <li>• Instrumental training (Piano, Guitar, Violin)</li>
                </ul>
                <p class="mt-6 text-slate-600 leading-relaxed">
                    Learners advance from Sol-Fa to international notation and instruments, equipped for choir leadership and performance.
                </p>
            </div>
        </div>
    </section>

    {{-- MISSION / VISION --}}
    <section class="py-24 bg-gradient-to-r from-teal-50 via-white to-amber-50">
        <div class="mx-auto max-w-7xl px-6">
            <div class="grid gap-8 lg:grid-cols-2">
                <div class="soft-card p-10 bg-white reveal">
                    <div class="pill bg-white border border-teal-100 text-teal-700 shadow-sm inline-flex">Mission</div>
                    <p class="mt-4 text-lg leading-relaxed text-slate-800">
                        To teach music through proper sight-reading and notation, equipping learners with skills that transform music ministry wherever they serve.
                    </p>
                    <p class="mt-3 text-slate-600">
                        We aim to strengthen music standards in churches across Rwanda, ensuring hymns are sung correctly and consistently.
                    </p>
                </div>
                <div class="soft-card p-10 bg-white reveal">
                    <div class="pill bg-white border border-teal-100 text-teal-700 shadow-sm inline-flex">Vision</div>
                    <p class="mt-4 text-lg leading-relaxed text-slate-800">
                        To train learners until they can independently sing or play any piece written in Sol-Fa or staff notation, and lead choirs with excellence.
                    </p>
                    <p class="mt-3 text-slate-600">
                        To promote quality choral singing in Rwanda and internationally.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- PILLARS --}}
    <section class="mx-auto max-w-7xl px-6 py-24">
        <div class="reveal">
            <h2 class="text-3xl font-semibold text-slate-900 text-center">Our Pillars</h2>
            <p class="mt-2 text-slate-600 text-center max-w-2xl mx-auto">
                The foundations that guide every rehearsal, class, and ministry engagement.
            </p>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
            <div class="soft-card p-7 reveal">
                <div class="pill bg-white border border-emerald-100 text-emerald-700 shadow-sm inline-flex">Literacy</div>
                <h3 class="mt-3 text-lg font-semibold text-slate-900">Music Literacy</h3>
                <p class="mt-2 text-sm text-slate-600">Sight-reading, hymn rules, harmony, and disciplined rehearsal methods.</p>
            </div>
            <div class="soft-card p-7 reveal">
                <div class="pill bg-white border border-amber-100 text-amber-700 shadow-sm inline-flex">Ministry</div>
                <h3 class="mt-3 text-lg font-semibold text-slate-900">Ministry Focus</h3>
                <p class="mt-2 text-sm text-slate-600">Training for worship leadership, evangelism programs, and church service.</p>
            </div>
            <div class="soft-card p-7 reveal">
                <div class="pill bg-white border border-slate-200 text-slate-700 shadow-sm inline-flex">Excellence</div>
                <h3 class="mt-3 text-lg font-semibold text-slate-900">Excellence & Care</h3>
                <p class="mt-2 text-sm text-slate-600">Mentorship, ensemble discipline, and performance readiness.</p>
            </div>
        </div>
    </section>

    {{-- ACHIEVEMENTS --}}
    <section class="mx-auto max-w-7xl px-6 pb-24">
        <h2 class="text-3xl font-semibold text-center text-slate-900 reveal">
            Impact & Achievements
        </h2>

        <div class="mt-10 grid gap-6 md:grid-cols-3">
            <div class="soft-card p-8 text-center reveal">
                <div class="text-3xl font-semibold text-emerald-700">700+</div>
                <div class="mt-2 text-sm text-slate-600">Students trained since 2016</div>
            </div>

            <div class="soft-card p-8 text-center reveal">
                <div class="text-3xl font-semibold text-emerald-700">168</div>
                <div class="mt-2 text-sm text-slate-600">Sol-Fa graduates</div>
            </div>

            <div class="soft-card p-8 text-center reveal">
                <div class="text-3xl font-semibold text-emerald-700">15+</div>
                <div class="mt-2 text-sm text-slate-600">ABRSM international certificates</div>
            </div>
        </div>

        <p class="mt-8 max-w-3xl mx-auto text-center text-slate-600 reveal">
            Graduates contribute to hymn recordings, radio music education programs, and establish music schools in their home churches.
        </p>
    </section>

    {{-- AFFILIATIONS --}}
    <section class="mx-auto max-w-7xl px-6 pb-24">
        <div class="soft-card p-10 reveal">
            <h2 class="text-2xl font-semibold text-slate-900">Affiliations & Structure</h2>
            <p class="mt-3 text-slate-600 leading-relaxed">
                Amazing Grace Academy operates under the Seventh-day Adventist Church structure, with support and collaboration from:
            </p>
            <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4 text-sm text-slate-800">
                <div>ASA UR Nyarugenge</div>
                <div>ASSA Kigali</div>
                <div>ECRF</div>
                <div>Rwanda Union Mission (RUM)</div>
            </div>
        </div>
    </section>
@endsection
