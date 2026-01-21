@extends('layouts.website')

@section('title', 'Class Registration — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-20 pb-16">
        <div class="page-hero px-6 py-10 sm:px-10 lg:px-12">
            <div class="grid items-center gap-8 lg:grid-cols-[1.1fr_0.9fr]">
                <div class="reveal space-y-5">
                    <div class="flex flex-wrap items-center gap-3 text-sm text-teal-700">
                        <span class="pill bg-white border border-teal-100 text-teal-700 shadow-sm">
                            Class Registration
                        </span>
                        <span class="pill bg-white border border-amber-100 text-amber-700 shadow-sm">
                            Class of 2026 • Limited spots
                        </span>
                    </div>
                    <div class="space-y-3">
                        <h1 class="text-4xl sm:text-5xl font-semibold tracking-tight text-slate-900 leading-tight">
                            Register for the next cohort
                        </h1>
                        <p class="text-lg leading-relaxed text-slate-600 max-w-2xl">
                            Share your details to join the academy. We’ll confirm your schedule, level, and instrument slot.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-2 text-sm text-slate-600">
                        <span class="pill bg-white border border-slate-200 text-slate-700">Free training</span>
                        <span class="pill bg-white border border-teal-100 text-teal-700">Saturdays • Kigali</span>
                        <span class="pill bg-white border border-amber-100 text-amber-700">Choir & instruments</span>
                    </div>
                </div>

                <div class="reveal soft-card p-8 bg-white/90 backdrop-blur shadow-[0_18px_50px_rgba(15,23,42,0.12)] border border-emerald-100">
                    <div class="flex items-center gap-3">
                        <div class="h-12 w-12 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold">
                            AG
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-emerald-700">Weekly rhythm</div>
                            <div class="text-slate-900 font-semibold">Sat 2:00–5:00 PM</div>
                            <p class="text-xs text-slate-500">Kigali Bilingual Church</p>
                        </div>
                    </div>
                    <div class="mt-5 grid gap-3 sm:grid-cols-3 text-sm text-slate-700">
                        <div class="rounded-2xl border border-emerald-100 bg-emerald-50/70 p-3">
                            <div class="text-xs font-semibold text-emerald-700">Foundation</div>
                            <div class="text-lg font-bold text-slate-900">Sol-Fa</div>
                            <p class="text-[11px] text-slate-500">Required start</p>
                        </div>
                        <div class="rounded-2xl border border-teal-100 bg-teal-50/70 p-3">
                            <div class="text-xs font-semibold text-teal-700">Advancement</div>
                            <div class="text-lg font-bold text-slate-900">Staff</div>
                            <p class="text-[11px] text-slate-500">After Sol-Fa</p>
                        </div>
                        <div class="rounded-2xl border border-amber-100 bg-amber-50/70 p-3">
                            <div class="text-xs font-semibold text-amber-700">Specialization</div>
                            <div class="text-lg font-bold text-slate-900">Instrument</div>
                            <p class="text-[11px] text-slate-500">Slots based on gear</p>
                        </div>
                    </div>
                    <p class="mt-4 text-xs text-slate-500">
                        We prioritize Sol-Fa → Staff progression to keep cohorts together.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- REGISTRATION FORM --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="soft-card p-10 reveal bg-gradient-to-br from-white via-emerald-50/60 to-amber-50/60 border border-teal-100">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-xs font-semibold text-emerald-700 uppercase">Class Registration</p>
                    <h2 class="text-2xl font-semibold text-slate-900">Reserve your seat</h2>
                    <p class="text-sm text-slate-600">Fill in your details; we’ll confirm your cohort within 24h.</p>
                </div>
                <div class="rounded-full bg-emerald-700 px-4 py-2 text-xs font-semibold text-white shadow-sm">
                    30 seats per cohort
                </div>
            </div>

            <form class="mt-6 grid gap-4 md:grid-cols-2">
                <div>
                    <label class="text-sm font-medium text-slate-900">Full Name</label>
                    <input type="text"
                        class="mt-1 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-teal-300 focus:ring focus:ring-teal-100">
                </div>
                <div>
                    <label class="text-sm font-medium text-slate-900">Phone Number</label>
                    <input type="text"
                        class="mt-1 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-teal-300 focus:ring focus:ring-teal-100">
                </div>

                <div>
                    <label class="text-sm font-medium text-slate-900">Email (optional)</label>
                    <input type="email"
                        class="mt-1 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-teal-300 focus:ring focus:ring-teal-100">
                </div>
                <div>
                    <label class="text-sm font-medium text-slate-900">Preferred Instrument</label>
                    <select class="mt-1 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 focus:border-teal-300 focus:ring focus:ring-teal-100">
                        <option>Sol-Fa & Choir</option>
                        <option>Staff Notation</option>
                        <option>Piano</option>
                        <option>Guitar</option>
                        <option>Violin</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label class="text-sm font-medium text-slate-900">Message</label>
                    <textarea rows="4"
                        class="mt-1 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-teal-300 focus:ring focus:ring-teal-100"
                        placeholder="e.g. I want to join Class of 2026, Sol-Fa level"></textarea>
                </div>

                <div class="md:col-span-2 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex items-center gap-2 text-xs text-slate-500">
                        <span class="h-2 w-2 rounded-full bg-teal-500"></span> Free training • Saturdays • Kigali Bilingual Church
                    </div>
                    <x-ui.button variant="primary" class="w-full sm:w-auto bg-emerald-700 hover:bg-emerald-600">
                        Register Now
                    </x-ui.button>
                </div>
            </form>

            <div class="mt-6 grid gap-3 md:grid-cols-3 text-sm text-slate-700">
                <div class="rounded-2xl bg-white/80 p-4 border border-white/60 shadow-sm">
                    <div class="text-xs font-semibold text-emerald-700">Step 1</div>
                    <div class="font-semibold text-slate-900 mt-1">Submit details</div>
                    <p class="mt-1 text-xs text-slate-600">Tell us your level and instrument interest.</p>
                </div>
                <div class="rounded-2xl bg-white/80 p-4 border border-white/60 shadow-sm">
                    <div class="text-xs font-semibold text-amber-700">Step 2</div>
                    <div class="font-semibold text-slate-900 mt-1">Schedule</div>
                    <p class="mt-1 text-xs text-slate-600">We confirm your cohort and rehearsal time.</p>
                </div>
                <div class="rounded-2xl bg-white/80 p-4 border border-white/60 shadow-sm">
                    <div class="text-xs font-semibold text-slate-900">Step 3</div>
                    <div class="font-semibold text-slate-900 mt-1">Start class</div>
                    <p class="mt-1 text-xs text-slate-600">Join Saturday sessions and begin practice.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
