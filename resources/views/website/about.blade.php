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
                        A choir story that grew into a school for worship and excellence.
                    </h1>

                    <p class="text-lg text-slate-600 max-w-2xl">
                        In October 2016 a handful of singers gathered after vespers to crack open Sol-Fa syllables.
                        The joy of reading hymns together sparked a journey that now welcomes hundreds to learn, lead,
                        and serve with confidence.
                    </p>

                    <ul class="space-y-2 text-sm text-slate-700">
                        <li class="flex items-center gap-2"><span class="dot"></span> Began as a free, church-based experiment in hymn literacy</li>
                        <li class="flex items-center gap-2"><span class="dot"></span> Grew into structured sight-reading, harmony, and rehearsal craft</li>
                        <li class="flex items-center gap-2"><span class="dot"></span> Now guides Piano, Guitar, Violin through the same literacy-first path</li>
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
                        <span class="pill bg-white border border-teal-100 text-teal-700">700+ learners invited into the story</span>
                        <span class="pill bg-white border border-amber-100 text-amber-700">168 Sol-Fa grads turned mentors</span>
                        <span class="pill bg-white border border-slate-200 text-slate-700">ABRSM certificates earned along the way</span>
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
                    In <strong>October 2016</strong> we were simply a choir asking, “How do we read these hymns well?” A borrowed classroom became our first rehearsal hall and the church bulletin became our invitation.
                </p>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Each cohort since has added a stanza to the story — beginners beside seasoned choristers — all learning discipline, harmony, and service so they can return to their churches ready to lead.
                </p>
            </div>

            <div class="soft-card p-10 reveal">
                <h2 class="text-2xl font-semibold text-slate-900">What We Teach</h2>
                <ul class="mt-6 space-y-3 text-slate-700 text-sm">
                    <li>• Chapter 1: Tonic Sol-Fa (church hymnal notation) — the language that started everything</li>
                    <li>• Chapter 2: International Staff Notation (Muhundwanota) — translating faith into universal score</li>
                    <li>• Chapter 3: Sight-reading, harmony, hymn analysis — habits that keep choirs together</li>
                    <li>• Chapter 4: Piano, Guitar, Violin — instruments woven into the same literacy-first path</li>
                </ul>
                <p class="mt-6 text-slate-600 leading-relaxed">
                    Learners move through these chapters like a narrative arc — from decoding syllables to interpreting scores, then carrying instruments that let the story travel farther.
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
                        This is the “why” of our first gathering: teach music through proper sight-reading and notation so every hymn can be sung with meaning and unity wherever our learners serve.
                    </p>
                    <p class="mt-3 text-slate-600">
                        It remains our compass — strengthening music standards in churches across Rwanda, ensuring hymns are sung correctly and consistently.
                    </p>
                </div>
                <div class="soft-card p-10 bg-white reveal">
                    <div class="pill bg-white border border-teal-100 text-teal-700 shadow-sm inline-flex">Vision</div>
                    <p class="mt-4 text-lg leading-relaxed text-slate-800">
                        The next chapters imagine every learner able to pick up any piece — Sol-Fa or staff — sing it, teach it, or play it, and then shape a choir with excellence.
                    </p>
                    <p class="mt-3 text-slate-600">
                        We see choirs across Rwanda (and beyond) sounding aligned, confident, and joyful because someone from this story stood in front of them.
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
                Three pillars hold the narrative steady in every rehearsal, class, and ministry moment.
            </p>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
            <div class="soft-card p-7 reveal">
                <div class="pill bg-white border border-emerald-100 text-emerald-700 shadow-sm inline-flex">Literacy</div>
                <h3 class="mt-3 text-lg font-semibold text-slate-900">Music Literacy</h3>
                <p class="mt-2 text-sm text-slate-600">Sight-reading, hymn rules, harmony, and disciplined rehearsal methods — the grammar of our story.</p>
            </div>
            <div class="soft-card p-7 reveal">
                <div class="pill bg-white border border-amber-100 text-amber-700 shadow-sm inline-flex">Ministry</div>
                <h3 class="mt-3 text-lg font-semibold text-slate-900">Ministry Focus</h3>
                <p class="mt-2 text-sm text-slate-600">Training for worship leadership, evangelism programs, and church service — why the story matters.</p>
            </div>
            <div class="soft-card p-7 reveal">
                <div class="pill bg-white border border-slate-200 text-slate-700 shadow-sm inline-flex">Excellence</div>
                <h3 class="mt-3 text-lg font-semibold text-slate-900">Excellence & Care</h3>
                <p class="mt-2 text-sm text-slate-600">Mentorship, ensemble discipline, and performance readiness — turning chapters into lasting testimony.</p>
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
            Graduates now lead hymn recordings, radio music education, and new music schools — proof that the story is being retold in many voices.
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
