@extends('layouts.website')

@section('title', 'Support the Academy — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-20 pb-16">
        <div class="page-hero px-6 py-10 sm:px-10 lg:px-12">
            <div class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr] items-center">
                <div class="reveal space-y-5">
                    <div class="flex flex-wrap items-center gap-3 text-sm text-teal-700">
                        <span class="pill bg-white border border-emerald-100 text-emerald-700 shadow-sm">
                            Support the Academy
                        </span>
                        <span class="pill bg-white border border-amber-100 text-amber-700 shadow-sm">
                            Free training • Community impact
                        </span>
                    </div>

                    <div class="space-y-3">
                        <h1 class="text-4xl sm:text-5xl font-semibold tracking-tight text-slate-900 leading-tight">
                            Fuel free music education for choir and instruments.
                        </h1>
                        <p class="text-lg leading-relaxed text-slate-600 max-w-3xl">
                            Your giving helps us buy instruments, print hymnals, produce resources, and keep every learner in class without tuition.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <x-ui.button href="#give" variant="primary" class="bg-emerald-700 hover:bg-emerald-600">
                            Give support
                        </x-ui.button>
                        <x-ui.button href="{{ route('contact') }}" variant="outline">
                            Talk to the team
                        </x-ui.button>
                    </div>
                </div>

                <div class="reveal soft-card p-8 bg-white/90 backdrop-blur shadow-[0_18px_50px_rgba(15,23,42,0.12)] border border-emerald-100">
                    <div class="flex items-center gap-3">
                        <div class="h-12 w-12 rounded-2xl bg-emerald-100 text-emerald-800 grid place-items-center font-bold">
                            AG
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-emerald-700">Impact snapshot</div>
                            <div class="text-slate-900 font-semibold">Free training since 2016</div>
                            <p class="text-xs text-slate-500">Choir, Sol-Fa, Staff, instruments</p>
                        </div>
                    </div>
                    <div class="mt-6 grid gap-3 sm:grid-cols-3 text-sm text-slate-700">
                        <div class="rounded-2xl border border-emerald-100 bg-emerald-50/70 p-3">
                            <div class="text-xs font-semibold text-emerald-700">Learners</div>
                            <div class="text-lg font-bold text-slate-900">700+</div>
                            <p class="text-[11px] text-slate-500">Across cohorts</p>
                        </div>
                        <div class="rounded-2xl border border-amber-100 bg-amber-50/70 p-3">
                            <div class="text-xs font-semibold text-amber-700">Instruments</div>
                            <div class="text-lg font-bold text-slate-900">Growing</div>
                            <p class="text-[11px] text-slate-500">Needs funding</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-3">
                            <div class="text-xs font-semibold text-slate-600">Training</div>
                            <div class="text-lg font-bold text-slate-900">Free</div>
                            <p class="text-[11px] text-slate-500">Your support fuels it</p>
                        </div>
                    </div>
                    <p class="mt-4 text-xs text-slate-500">
                        Seventh-day Adventist • ASA UR Nyarugenge • ASSA Kigali • ECRF • RUM
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- GIVING OPTIONS --}}
    <section id="give" class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal text-center">
            <p class="text-sm font-semibold text-emerald-700">Ways to give</p>
            <h2 class="mt-2 text-3xl font-semibold text-slate-900">Support channels</h2>
            <p class="mt-3 text-slate-600 max-w-2xl mx-auto">
                Choose how you want to help: finances, instruments, volunteering, or prayer and mentorship.
            </p>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-2">
            <div class="soft-card p-8 bg-white reveal">
                <div class="pill bg-emerald-50 text-emerald-700 border border-emerald-100 w-fit">Financial Support</div>
                <p class="mt-4 text-slate-600">Contributions can be sent to:</p>
                <p class="mt-3 text-lg font-semibold text-slate-900">Schimei IRATWUMVA</p>
                <p class="text-slate-600">Code: 726096</p>
                <p class="mt-3 text-sm text-slate-600">Funds go to instruments, hymnals, rehearsal materials, and class logistics.</p>
                <div class="mt-4 flex flex-wrap gap-2 text-xs text-slate-500">
                    <span class="pill bg-white border border-slate-200 text-slate-700">Mobile money</span>
                    <span class="pill bg-white border border-slate-200 text-slate-700">Cash/Bank (contact us)</span>
                </div>
            </div>

            <div class="soft-card p-8 bg-white reveal">
                <div class="pill bg-amber-50 text-amber-700 border border-amber-100 w-fit">Other Support</div>
                <p class="mt-4 text-slate-600">
                    You can also support the academy through prayers, advice, volunteering,
                    or providing musical instruments (piano, guitar, violin).
                </p>
                <div class="mt-4 grid gap-3 sm:grid-cols-2 text-sm text-slate-700">
                    <div class="rounded-2xl border border-slate-200 bg-white/80 p-4 shadow-sm">
                        <div class="text-xs font-semibold text-emerald-700">Volunteer</div>
                        <p class="mt-1 text-slate-600">Mentor musicians, help logistics, or media support.</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white/80 p-4 shadow-sm">
                        <div class="text-xs font-semibold text-emerald-700">Instruments</div>
                        <p class="mt-1 text-slate-600">Donate or lend instruments to expand slots.</p>
                    </div>
                </div>
                <div class="mt-4">
                    <x-ui.button href="{{ route('contact') }}" variant="primary" class="bg-emerald-700 hover:bg-emerald-600">
                        Coordinate a donation
                    </x-ui.button>
                </div>
            </div>
        </div>
    </section>

    {{-- IMPACT --}}
    <section class="bg-emerald-50/70 py-20">
        <div class="mx-auto max-w-7xl px-6">
            <div class="reveal text-center">
                <p class="text-sm font-semibold text-emerald-700">Impact</p>
                <h2 class="mt-2 text-3xl font-semibold text-slate-900">Where your support goes</h2>
            </div>
            <div class="mt-10 grid gap-4 md:grid-cols-4">
                <div class="soft-card p-5 text-center reveal">
                    <div class="text-xs font-semibold text-emerald-700">Instruments</div>
                    <div class="mt-2 text-lg font-semibold text-slate-900">Piano • Guitar • Violin</div>
                    <p class="text-xs text-slate-500 mt-1">More learners get slots</p>
                </div>
                <div class="soft-card p-5 text-center reveal">
                    <div class="text-xs font-semibold text-emerald-700">Hymnals & Workbooks</div>
                    <div class="mt-2 text-lg font-semibold text-slate-900">Sol-Fa • Staff</div>
                    <p class="text-xs text-slate-500 mt-1">Printed & digital</p>
                </div>
                <div class="soft-card p-5 text-center reveal">
                    <div class="text-xs font-semibold text-emerald-700">Events</div>
                    <div class="mt-2 text-lg font-semibold text-slate-900">Concerts & ministry</div>
                    <p class="text-xs text-slate-500 mt-1">Outreach & practice</p>
                </div>
                <div class="soft-card p-5 text-center reveal">
                    <div class="text-xs font-semibold text-emerald-700">Learner care</div>
                    <div class="mt-2 text-lg font-semibold text-slate-900">Tuition-free</div>
                    <p class="text-xs text-slate-500 mt-1">Sustaining free classes</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="mx-auto max-w-7xl px-6 py-20">
        <div class="soft-card p-10 text-center reveal">
            <div class="pill bg-white border border-emerald-100 text-emerald-700 inline-flex">
                Thank you for partnering with us
            </div>
            <h2 class="mt-4 text-2xl font-semibold text-slate-900">Ready to give or talk?</h2>
            <p class="mt-3 text-slate-600 max-w-2xl mx-auto">
                Call, email, or message us and we’ll coordinate your support quickly.
            </p>
            <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center">
                <x-ui.button href="tel:+250788261729" variant="primary" class="w-full sm:w-auto bg-emerald-700 hover:bg-emerald-600">
                    Call us
                </x-ui.button>
                <x-ui.button href="{{ route('contact') }}" variant="outline" class="w-full sm:w-auto">
                    Message us
                </x-ui.button>
            </div>
        </div>
    </section>
@endsection
