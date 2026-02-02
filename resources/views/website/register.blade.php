@extends('layouts.website')

@section('title', 'Class Registration — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-16 pb-12">
        <div class="ui-hero-panel px-8 py-12 sm:px-12 lg:px-14">
            <div class="grid items-center gap-10 lg:grid-cols-[1.1fr_0.9fr]">
                <div class="reveal space-y-5">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="section-label">Class Registration</span>
                        <span class="pill bg-gold-50 text-gold-700 border border-gold-200">Class of 2026 • Limited
                            spots</span>
                    </div>
                    <h1 class="font-display text-4xl sm:text-5xl font-semibold tracking-tight text-ink-900 leading-tight">
                        Register for the next cohort
                    </h1>
                    <p class="text-lg leading-relaxed text-ink-600 max-w-2xl">
                        Share your details to join the academy. We’ll confirm your schedule, level, and instrument slot.
                    </p>
                    <div class="flex flex-wrap gap-2 text-sm text-ink-600">
                        <span class="pill bg-white/80 border border-sage-200 text-sage-700">Free training</span>
                        <span class="pill bg-white/80 border border-sage-200 text-sage-700">Saturdays • Kigali</span>
                        <span class="pill bg-white/80 border border-sage-200 text-sage-700">Choir & instruments</span>
                    </div>
                </div>

                <div class="reveal soft-card p-8 border-sage-100/80">
                    <div class="flex items-center gap-3">
                        <div
                            class="h-12 w-12 rounded-2xl bg-sage-100 text-sage-600 flex items-center justify-center font-display font-bold text-lg">
                            AG</div>
                        <div>
                            <div class="text-sm font-semibold text-sage-700">Weekly rhythm</div>
                            <div class="font-display text-lg font-semibold text-ink-900">Sat 2:00–5:00 PM</div>
                            <p class="text-xs text-ink-500">Kigali Bilingual Church</p>
                        </div>
                    </div>
                    <div class="mt-5 grid gap-3 sm:grid-cols-3 text-sm text-ink-700">
                        <div class="rounded-2xl border border-sage-200 bg-sage-50/70 p-3">
                            <div class="text-xs font-semibold text-sage-700">Foundation</div>
                            <div class="font-display text-lg font-semibold text-ink-900">Sol-Fa</div>
                            <p class="text-[11px] text-ink-500">Required start</p>
                        </div>
                        <div class="rounded-2xl border border-sage-200 bg-sage-50/70 p-3">
                            <div class="text-xs font-semibold text-sage-700">Advancement</div>
                            <div class="font-display text-lg font-semibold text-ink-900">Staff</div>
                            <p class="text-[11px] text-ink-500">After Sol-Fa</p>
                        </div>
                        <div class="rounded-2xl border border-gold-200 bg-gold-50/70 p-3">
                            <div class="text-xs font-semibold text-gold-700">Specialization</div>
                            <div class="font-display text-lg font-semibold text-ink-900">Instrument</div>
                            <p class="text-[11px] text-ink-500">Slots based on gear</p>
                        </div>
                    </div>
                    <p class="mt-4 text-xs text-ink-500">
                        We prioritize Sol-Fa → Staff progression to keep cohorts together.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- REGISTRATION FORM --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div
            class="reveal soft-card p-10 bg-gradient-to-br from-white via-sage-50/40 to-gold-50/30 border border-sage-200/80">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <div class="section-label">Reserve your seat</div>
                    <h2 class="mt-3 font-display text-2xl font-semibold text-ink-900">Class registration</h2>
                    <p class="mt-1 text-sm text-ink-600">Fill in your details; we’ll confirm your cohort within 24h.</p>
                </div>
                <div class="rounded-full bg-sage-600 px-4 py-2 text-xs font-semibold text-white shadow-sm">
                    30 seats per cohort
                </div>
            </div>

            <form class="mt-8 grid gap-4 md:grid-cols-2" method="POST" action="{{ route('register.submit') }}">
                @csrf
                @if (session('success'))
                    <div
                        class="md:col-span-2 rounded-2xl border border-sage-200 bg-sage-50 px-4 py-3 text-sm text-sage-800 font-medium">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="md:col-span-2 rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                        <ul class="list-disc list-inside space-y-1">
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                    <label class="text-sm font-medium text-ink-900">Full name <span class="text-sage-600">*</span></label>
                    <input name="name" type="text" required value="{{ old('name') }}"
                        class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm text-ink-900 placeholder:text-ink-400 focus:ring-2 focus:ring-sage-400 focus:border-sage-400 @error('name') border-red-300 @enderror"
                        placeholder="Your full name">
                    @error('name')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="text-sm font-medium text-ink-900">Phone number</label>
                    <input name="phone" type="text" value="{{ old('phone') }}"
                        class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm text-ink-900 placeholder:text-ink-400 focus:ring-2 focus:ring-sage-400 focus:border-sage-400 @error('phone') border-red-300 @enderror"
                        placeholder="e.g. 0788 261 729">
                    @error('phone')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="text-sm font-medium text-ink-900">Email (optional)</label>
                    <input name="email" type="email" value="{{ old('email') }}"
                        class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm text-ink-900 placeholder:text-ink-400 focus:ring-2 focus:ring-sage-400 focus:border-sage-400"
                        placeholder="your@email.com">
                </div>
                <div>
                    <label class="text-sm font-medium text-ink-900">Cohort (optional)</label>
                    <select name="cohort_id"
                        class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm text-ink-900 focus:ring-2 focus:ring-sage-400 focus:border-sage-400">
                        <option value="">— Select cohort —</option>
                        @foreach ($cohorts as $cohort)
                            <option value="{{ $cohort->id }}" {{ old('cohort_id') == $cohort->id ? 'selected' : '' }}>
                                {{ $cohort->name }}{{ $cohort->start_date ? ' (' . $cohort->start_date->format('M Y') . ')' : '' }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="text-sm font-medium text-ink-900">Preferred instrument / track</label>
                    <select name="instrument_interest"
                        class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm text-ink-900 focus:ring-2 focus:ring-sage-400 focus:border-sage-400">
                        <option value="Sol-Fa & Choir"
                            {{ old('instrument_interest') == 'Sol-Fa & Choir' ? 'selected' : '' }}>Sol-Fa & Choir</option>
                        <option value="Staff Notation"
                            {{ old('instrument_interest') == 'Staff Notation' ? 'selected' : '' }}>Staff Notation</option>
                        <option value="Piano" {{ old('instrument_interest') == 'Piano' ? 'selected' : '' }}>Piano</option>
                        <option value="Guitar" {{ old('instrument_interest') == 'Guitar' ? 'selected' : '' }}>Guitar
                        </option>
                        <option value="Violin" {{ old('instrument_interest') == 'Violin' ? 'selected' : '' }}>Violin
                        </option>
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label class="text-sm font-medium text-ink-900">Message (optional)</label>
                    <textarea name="message" rows="4" placeholder="e.g. I want to join Class of 2026, Sol-Fa level"
                        class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm text-ink-900 placeholder:text-ink-400 focus:ring-2 focus:ring-sage-400 focus:border-sage-400">{{ old('message') }}</textarea>
                </div>

                <div class="md:col-span-2 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex items-center gap-2 text-xs text-ink-500">
                        <span class="h-2 w-2 rounded-full bg-sage-500"></span> Free training • Saturdays • Kigali Bilingual
                        Church
                    </div>
                    <x-ui.button type="submit" variant="primary" class="w-full sm:w-auto rounded-xl">
                        Register now
                    </x-ui.button>
                </div>
            </form>

            <div class="mt-8 grid gap-4 md:grid-cols-3 text-sm text-ink-700">
                <div class="rounded-2xl bg-white/80 p-4 border border-sage-100 shadow-sm">
                    <div class="text-xs font-semibold text-sage-700">Step 1</div>
                    <div class="font-display font-semibold text-ink-900 mt-1">Submit details</div>
                    <p class="mt-1 text-xs text-ink-600">Tell us your level and instrument interest.</p>
                </div>
                <div class="rounded-2xl bg-white/80 p-4 border border-gold-100 shadow-sm">
                    <div class="text-xs font-semibold text-gold-700">Step 2</div>
                    <div class="font-display font-semibold text-ink-900 mt-1">Schedule</div>
                    <p class="mt-1 text-xs text-ink-600">We confirm your cohort and rehearsal time.</p>
                </div>
                <div class="rounded-2xl bg-white/80 p-4 border border-sage-100 shadow-sm">
                    <div class="text-xs font-semibold text-sage-700">Step 3</div>
                    <div class="font-display font-semibold text-ink-900 mt-1">Start class</div>
                    <p class="mt-1 text-xs text-ink-600">Join Saturday sessions and begin practice.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
