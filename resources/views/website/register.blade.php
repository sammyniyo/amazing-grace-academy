@extends('layouts.website')

@section('title', 'Class Registration — Amazing Grace Academy')

@section('content')
    {{-- Step strip: 1 Your details → 2 Course choice → 3 Review --}}
    @if ($registrationOpen ?? false)
        <section class="border-b border-ink-100 bg-white/80 backdrop-blur-sm sticky top-[72px] z-30"
            aria-label="Registration progress">
            <div class="mx-auto max-w-4xl px-4 py-3 sm:px-6">
                <div class="flex items-center justify-center gap-2 sm:gap-6 text-xs sm:text-sm font-medium text-ink-500">
                    <span class="flex items-center gap-2" id="step-indicator-1">
                        <span
                            class="registration-step flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-sage-600 text-white font-semibold"
                            data-step="1" aria-current="step">1</span>
                        <span class="text-ink-700">Your details</span>
                    </span>
                    <span class="text-ink-300" aria-hidden="true">→</span>
                    <span class="flex items-center gap-2" id="step-indicator-2">
                        <span
                            class="registration-step flex h-7 w-7 shrink-0 items-center justify-center rounded-full border-2 border-ink-200 text-ink-400"
                            data-step="2">2</span>
                        <span>Course choice</span>
                    </span>
                    <span class="text-ink-300" aria-hidden="true">→</span>
                    <span class="flex items-center gap-2" id="step-indicator-3">
                        <span
                            class="registration-step flex h-7 w-7 shrink-0 items-center justify-center rounded-full border-2 border-ink-200 text-ink-400"
                            data-step="3">3</span>
                        <span>Review & submit</span>
                    </span>
                </div>
            </div>
        </section>
    @endif

    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-14 pb-12">
        <div class="ui-hero-panel px-8 py-12 sm:px-12 lg:px-14">
            <div class="grid items-start gap-12 lg:grid-cols-[1fr_1fr] lg:gap-20 xl:gap-24">
                <div class="reveal space-y-6 lg:pr-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="section-label">Class Registration</span>
                        <span class="pill bg-gold-50 text-gold-700 border border-gold-200">Limited spots</span>
                    </div>
                    <h1
                        class="font-display text-3xl sm:text-4xl font-semibold tracking-tight text-ink-900 leading-tight pt-0.5">
                        Join the next cohort
                    </h1>
                    <p class="text-base leading-relaxed text-ink-600 max-w-xl">
                        Three short steps: your details, your course choice, then we confirm your place. Free training,
                        Saturdays at ASA UR Nyarugenge SDA.
                    </p>
                    <div class="flex flex-wrap gap-2 text-sm text-ink-600 pt-1">
                        <span class="pill bg-white/80 border border-sage-200 text-sage-700">Sol-Fa → Staff →
                            Instrument</span>
                        <span class="pill bg-white/80 border border-sage-200 text-sage-700">Choir & instruments</span>
                    </div>
                </div>

                <div
                    class="reveal soft-card p-6 sm:p-8 border-sage-100/80 hidden lg:block lg:border-l lg:border-sage-200/60 lg:pl-10 lg:ml-2">
                    <div class="flex items-center gap-4">
                        <div
                            class="h-12 w-12 rounded-2xl bg-sage-100 text-sage-600 flex items-center justify-center font-display font-bold text-lg shrink-0">
                            AG</div>
                        <div class="min-w-0">
                            <div class="text-sm font-semibold text-sage-700">Weekly rhythm</div>
                            <div class="font-display text-lg font-semibold text-ink-900">Sat 2:00–5:00 PM</div>
                            <p class="text-xs text-ink-500 mt-0.5">ASA UR Nyarugenge SDA</p>
                        </div>
                    </div>
                    <div class="mt-8 grid gap-4 text-sm text-ink-700">
                        <div class="rounded-xl border border-sage-200 bg-sage-50/70 p-4">
                            <span class="font-display font-semibold text-ink-900">Foundation</span> — Sol-Fa (required
                            start)
                        </div>
                        <div class="rounded-xl border border-sage-200 bg-sage-50/70 p-4">
                            <span class="font-display font-semibold text-ink-900">Advancement</span> — Staff notation
                        </div>
                        <div class="rounded-xl border border-gold-200 bg-gold-50/70 p-4">
                            <span class="font-display font-semibold text-ink-900">Specialization</span> — Instrument (slots
                            by availability)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- REGISTRATION: closed state --}}
    <section class="mx-auto max-w-3xl px-6 pb-20">
        <div
            class="reveal soft-card p-10 bg-gradient-to-br from-white via-sage-50/40 to-gold-50/30 border border-sage-200/80">
            @if (!$registrationOpen)
                @if (session('error'))
                    <div
                        class="mb-6 rounded-2xl border border-amber-200 bg-amber-50 px-4 py-3 text-sm text-amber-800 font-medium">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="rounded-2xl border border-amber-200 bg-amber-50 px-6 py-8 text-center">
                    <h2 class="text-amber-700 font-display text-xl font-semibold">Registration is currently closed</h2>
                    <p class="mt-2 text-sm text-amber-800 max-w-md mx-auto">
                        Class registration is closed for now. Ongoing classes are already in session, and new applications
                        are paused.
                    </p>
                    <p class="mt-2 text-sm text-amber-800 max-w-md mx-auto">
                        Please wait for the next intake. We will announce opening dates as soon as registration reopens.
                    </p>
                    <p class="mt-4 text-xs text-amber-600">
                        You can still <a href="{{ route('contact') }}"
                            class="font-semibold underline hover:no-underline focus:outline-none focus:ring-2 focus:ring-amber-400 rounded">contact
                            us</a> to express your interest.
                    </p>
                </div>
            @else
                {{-- Multi-step form --}}
                <form id="registration-form" class="mt-6" method="POST" action="{{ route('register.submit') }}">
                    @csrf

                    @if ($errors->any())
                        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                            <p class="font-semibold">Please fix the following:</p>
                            <ul class="list-disc list-inside mt-1 space-y-1">
                                @foreach ($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Step 1: Your details --}}
                    <div id="registration-step-1" class="registration-step-panel space-y-4" data-step="1">
                        <h2 class="text-lg font-display font-semibold text-ink-900">Step 1 — Your details</h2>
                        <p class="text-sm text-ink-600">We need at least one way to reach you (phone or email).</p>
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="sm:col-span-2">
                                <label for="reg-name" class="text-sm font-medium text-ink-900">Full name <span
                                        class="text-sage-600">*</span></label>
                                <input id="reg-name" name="name" type="text" required value="{{ old('name') }}"
                                    class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm text-ink-900 placeholder:text-ink-400 focus:ring-2 focus:ring-sage-400 focus:border-sage-400 @error('name') border-red-300 @enderror"
                                    placeholder="Your full name" autocomplete="name">
                                @error('name')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="reg-phone" class="text-sm font-medium text-ink-900">Phone</label>
                                <input id="reg-phone" name="phone" type="text" value="{{ old('phone') }}"
                                    class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm text-ink-900 placeholder:text-ink-400 focus:ring-2 focus:ring-sage-400 focus:border-sage-400 @error('phone') border-red-300 @enderror"
                                    placeholder="e.g. 0788 261 729" autocomplete="tel">
                                @error('phone')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="reg-email" class="text-sm font-medium text-ink-900">Email</label>
                                <input id="reg-email" name="email" type="email" value="{{ old('email') }}"
                                    class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm text-ink-900 placeholder:text-ink-400 focus:ring-2 focus:ring-sage-400 focus:border-sage-400"
                                    placeholder="your@email.com" autocomplete="email">
                                @error('email')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <p class="text-xs text-ink-500">Provide at least one of phone or email so we can confirm your
                            registration.</p>
                        <div class="pt-2">
                            <button type="button"
                                class="registration-next rounded-xl bg-sage-600 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-sage-700 focus:outline-none focus:ring-2 focus:ring-sage-500 focus:ring-offset-2"
                                data-next="2">Continue to course choice</button>
                        </div>
                    </div>

                    {{-- Step 2: Course choice --}}
                    <div id="registration-step-2" class="registration-step-panel hidden space-y-4" data-step="2">
                        <h2 class="text-lg font-display font-semibold text-ink-900">Step 2 — Course choice</h2>
                        <div>
                            <label for="reg-cohort" class="text-sm font-medium text-ink-900">Cohort</label>
                            <select id="reg-cohort" name="cohort_id"
                                class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm text-ink-900 focus:ring-2 focus:ring-sage-400 focus:border-sage-400">
                                <option value="">— Select cohort (optional) —</option>
                                @foreach ($cohorts as $cohort)
                                    @php
                                        $spots = $cohort->spotsLeft();
                                        $full = $spots === 0;
                                    @endphp
                                    <option value="{{ $cohort->id }}"
                                        {{ old('cohort_id') == $cohort->id ? 'selected' : '' }}
                                        data-spots="{{ $spots }}" data-full="{{ $full ? '1' : '0' }}">
                                        {{ $cohort->name }}{{ $cohort->start_date ? ' (' . $cohort->start_date->format('M Y') . ')' : '' }}
                                        — {{ $full ? 'Full (waitlist)' : $spots . ' spots left' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="reg-instrument" class="text-sm font-medium text-ink-900">Preferred instrument /
                                track</label>
                            <select id="reg-instrument" name="instrument_interest"
                                class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm text-ink-900 focus:ring-2 focus:ring-sage-400 focus:border-sage-400">
                                <option value="Sol-Fa & Choir"
                                    {{ old('instrument_interest') == 'Sol-Fa & Choir' ? 'selected' : '' }}>Sol-Fa & Choir
                                </option>
                                <option value="Staff Notation"
                                    {{ old('instrument_interest') == 'Staff Notation' ? 'selected' : '' }}>Staff Notation
                                </option>
                                <option value="Piano" {{ old('instrument_interest') == 'Piano' ? 'selected' : '' }}>Piano
                                </option>
                                <option value="Guitar" {{ old('instrument_interest') == 'Guitar' ? 'selected' : '' }}>
                                    Guitar</option>
                                <option value="Violin" {{ old('instrument_interest') == 'Violin' ? 'selected' : '' }}>
                                    Violin</option>
                            </select>
                        </div>
                        <div>
                            <label for="reg-message" class="text-sm font-medium text-ink-900">Message (optional)</label>
                            <textarea id="reg-message" name="message" rows="3" maxlength="1000"
                                placeholder="e.g. I’d like to start with Sol-Fa."
                                class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm text-ink-900 placeholder:text-ink-400 focus:ring-2 focus:ring-sage-400 focus:border-sage-400">{{ old('message') }}</textarea>
                            <p class="mt-1 text-xs text-ink-500">Max 1000 characters.</p>
                        </div>
                        <div class="flex flex-wrap gap-3 pt-2">
                            <button type="button"
                                class="registration-prev rounded-xl border border-ink-200 bg-white px-5 py-3 text-sm font-semibold text-ink-700 hover:bg-ink-50 focus:outline-none focus:ring-2 focus:ring-sage-500 focus:ring-offset-2"
                                data-prev="1">Back</button>
                            <button type="button"
                                class="registration-next rounded-xl bg-sage-600 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-sage-700 focus:outline-none focus:ring-2 focus:ring-sage-500 focus:ring-offset-2"
                                data-next="3">Continue to review</button>
                        </div>
                    </div>

                    {{-- Step 3: Review & submit --}}
                    <div id="registration-step-3" class="registration-step-panel hidden space-y-4" data-step="3">
                        <h2 class="text-lg font-display font-semibold text-ink-900">Step 3 — Review & submit</h2>
                        <div class="rounded-2xl border border-ink-100 bg-white p-5 space-y-3">
                            <p class="text-sm text-ink-600"><strong class="text-ink-900">Name:</strong> <span
                                    id="review-name">—</span></p>
                            <p class="text-sm text-ink-600"><strong class="text-ink-900">Contact:</strong> <span
                                    id="review-contact">—</span></p>
                            <p class="text-sm text-ink-600"><strong class="text-ink-900">Cohort:</strong> <span
                                    id="review-cohort">—</span></p>
                            <p class="text-sm text-ink-600"><strong class="text-ink-900">Track:</strong> <span
                                    id="review-instrument">—</span></p>
                            <p class="text-sm text-ink-600" id="review-message-wrap" style="display:none"><strong
                                    class="text-ink-900">Message:</strong> <span id="review-message"></span></p>
                        </div>
                        <div class="flex flex-wrap gap-3 pt-2">
                            <button type="button"
                                class="registration-prev rounded-xl border border-ink-200 bg-white px-5 py-3 text-sm font-semibold text-ink-700 hover:bg-ink-50 focus:outline-none focus:ring-2 focus:ring-sage-500 focus:ring-offset-2"
                                data-prev="2">Back</button>
                            <button type="submit"
                                class="rounded-xl bg-sage-600 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-sage-700 focus:outline-none focus:ring-2 focus:ring-sage-500 focus:ring-offset-2">
                                Submit registration
                            </button>
                        </div>
                    </div>
                </form>

                <div class="mt-10 grid gap-4 sm:grid-cols-3 text-sm text-ink-700">
                    <div class="rounded-2xl bg-white/80 p-4 border border-sage-100 shadow-sm">
                        <span class="text-xs font-semibold text-sage-700">Step 1</span>
                        <p class="font-display font-semibold text-ink-900 mt-1">Your details</p>
                        <p class="mt-1 text-xs text-ink-600">Name and at least one contact (phone or email).</p>
                    </div>
                    <div class="rounded-2xl bg-white/80 p-4 border border-gold-100 shadow-sm">
                        <span class="text-xs font-semibold text-gold-700">Step 2</span>
                        <p class="font-display font-semibold text-ink-900 mt-1">Course choice</p>
                        <p class="mt-1 text-xs text-ink-600">Pick a cohort (optional) and instrument track.</p>
                    </div>
                    <div class="rounded-2xl bg-white/80 p-4 border border-sage-100 shadow-sm">
                        <span class="text-xs font-semibold text-sage-700">Step 3</span>
                        <p class="font-display font-semibold text-ink-900 mt-1">We confirm</p>
                        <p class="mt-1 text-xs text-ink-600">We’ll confirm your place within 24 hours.</p>
                    </div>
                </div>
            @endif
        </div>
    </section>

    @if ($registrationOpen ?? false)
        @push('scripts')
            <script>
                (function() {
                    const form = document.getElementById('registration-form');
                    if (!form) return;
                    const panels = form.querySelectorAll('.registration-step-panel');
                    const indicators = document.querySelectorAll('.registration-step[data-step]');

                    function showStep(step) {
                        const s = String(step);
                        panels.forEach(function(el) {
                            el.classList.toggle('hidden', el.getAttribute('data-step') !== s);
                        });
                        indicators.forEach(function(el) {
                            const n = parseInt(el.getAttribute('data-step'), 10);
                            el.classList.remove('bg-sage-600', 'bg-sage-100', 'text-white', 'text-sage-700', 'border-2',
                                'border-ink-200', 'text-ink-400');
                            el.removeAttribute('aria-current');
                            if (n < step) {
                                el.classList.add('bg-sage-100', 'text-sage-700');
                            } else if (n === step) {
                                el.classList.add('bg-sage-600', 'text-white');
                                el.setAttribute('aria-current', 'step');
                            } else {
                                el.classList.add('border-2', 'border-ink-200', 'text-ink-400');
                            }
                        });
                        document.getElementById('step-indicator-' + s)?.scrollIntoView({
                            behavior: 'smooth',
                            block: 'nearest'
                        });
                    }

                    form.querySelectorAll('.registration-next').forEach(function(btn) {
                        btn.addEventListener('click', function() {
                            var next = parseInt(this.getAttribute('data-next'), 10);
                            if (next === 2) {
                                var name = (form.querySelector('#reg-name')?.value || '').trim();
                                var phone = (form.querySelector('#reg-phone')?.value || '').trim();
                                var email = (form.querySelector('#reg-email')?.value || '').trim();
                                if (!name) {
                                    form.querySelector('#reg-name')?.focus();
                                    return;
                                }
                                if (!phone && !email) {
                                    var contactMsg = form.querySelector('[data-contact-hint]') || document
                                        .createElement('p');
                                    if (!contactMsg.dataset.contactHint) {
                                        contactMsg.setAttribute('data-contact-hint', '1');
                                        contactMsg.className = 'text-sm text-amber-700 mt-2';
                                        contactMsg.textContent =
                                            'Please provide at least one of phone or email so we can confirm your registration.';
                                        form.querySelector('#registration-step-1')?.appendChild(contactMsg);
                                    }
                                    (form.querySelector('#reg-phone') || form.querySelector('#reg-email'))
                                    ?.focus();
                                    return;
                                }
                            }
                            if (next === 3) {
                                var sel = form.querySelector('#reg-cohort');
                                var opt = sel?.options[sel.selectedIndex];
                                var cohortText = opt ? opt.textContent : '—';
                                document.getElementById('review-name').textContent = (form.querySelector(
                                    '#reg-name')?.value || '').trim() || '—';
                                var ph = (form.querySelector('#reg-phone')?.value || '').trim();
                                var em = (form.querySelector('#reg-email')?.value || '').trim();
                                document.getElementById('review-contact').textContent = [ph, em].filter(Boolean)
                                    .join(' • ') || '—';
                                document.getElementById('review-cohort').textContent = cohortText;
                                document.getElementById('review-instrument').textContent = (form.querySelector(
                                    '#reg-instrument')?.options[form.querySelector('#reg-instrument')
                                    ?.selectedIndex]?.textContent || '').trim() || '—';
                                var msg = (form.querySelector('#reg-message')?.value || '').trim();
                                var msgWrap = document.getElementById('review-message-wrap');
                                var msgEl = document.getElementById('review-message');
                                if (msg) {
                                    msgWrap.style.display = '';
                                    msgEl.textContent = msg;
                                } else {
                                    msgWrap.style.display = 'none';
                                }
                            }
                            showStep(next);
                        });
                    });

                    form.querySelectorAll('.registration-prev').forEach(function(btn) {
                        btn.addEventListener('click', function() {
                            showStep(parseInt(this.getAttribute('data-prev'), 10));
                        });
                    });

                    showStep(1);
                })();
            </script>
        @endpush
    @endif
@endsection
