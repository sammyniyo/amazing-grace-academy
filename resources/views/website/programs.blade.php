@extends('layouts.website')

@section('title', 'Programs — Amazing Grace Academy')

@section('content')
    {{-- HERO --}}
    <section class="mx-auto max-w-6xl px-6 pt-16 pb-12">
        <div class="reveal text-center max-w-3xl mx-auto">
            <span class="section-label">Programs</span>
            <h1 class="mt-4 font-display text-3xl sm:text-4xl font-semibold tracking-tight text-ink-900">
                A simple path to musical excellence
            </h1>
            <p class="mt-4 text-base sm:text-lg text-ink-600 leading-relaxed">
                We train learners from Sol-Fa fundamentals to staff notation and instruments, with practical worship focus.
            </p>
            <div class="mt-6 flex flex-wrap items-center justify-center gap-3">
                <x-ui.button href="{{ route('register') }}" variant="primary">Register for class</x-ui.button>
                <x-ui.button href="{{ route('contact') }}" variant="outline">Ask a question</x-ui.button>
            </div>
        </div>
    </section>

    {{-- CORE PROGRAMS --}}
    <section class="mx-auto max-w-6xl px-6 pb-14">
        <div class="grid gap-8 md:grid-cols-3 md:gap-6 lg:gap-8">
            <article class="reveal soft-card p-6 text-center">
                <span class="pill bg-sage-50 text-sage-700 border border-sage-200">Foundation</span>
                <h2 class="mt-4 font-display text-xl font-semibold text-ink-900">Tonic Sol-Fa</h2>
                <p class="mt-3 text-sm text-ink-600 leading-relaxed">
                    Learn hymn reading, rhythm, and confident SATB singing.
                </p>
            </article>

            <article class="reveal reveal-delay-1 soft-card p-6 text-center">
                <span class="pill bg-gold-50 text-gold-700 border border-gold-200">Advancement</span>
                <h2 class="mt-4 font-display text-xl font-semibold text-ink-900">Staff Notation</h2>
                <p class="mt-3 text-sm text-ink-600 leading-relaxed">
                    Build sight-reading skills using international notation.
                </p>
            </article>

            <article class="reveal reveal-delay-2 soft-card p-6 text-center">
                <span class="pill bg-sage-50 text-sage-700 border border-sage-200">Specialization</span>
                <h2 class="mt-4 font-display text-xl font-semibold text-ink-900">Instruments</h2>
                <p class="mt-3 text-sm text-ink-600 leading-relaxed">
                    Apply literacy to Piano, Guitar, or Violin with guided practice.
                </p>
            </article>
        </div>
    </section>

    {{-- CLASS DETAILS --}}
    <section class="mx-auto max-w-6xl px-6 pb-14">
        <div class="reveal soft-card p-6 sm:p-8 mt-4 sm:mt-6 mb-4 sm:mb-6">
            <h2 class="font-display text-2xl font-semibold text-ink-900 text-center">Class Details</h2>
            <div class="mt-8 grid gap-5 sm:grid-cols-3 sm:gap-6">
                <div class="rounded-2xl border border-sage-100 bg-sage-50/50 p-4 text-center">
                    <p class="text-xs font-semibold text-sage-700">Schedule</p>
                    <p class="mt-1 text-sm text-ink-700">Saturday, 2:00 PM - 5:00 PM</p>
                </div>
                <div class="rounded-2xl border border-sage-100 bg-sage-50/50 p-4 text-center">
                    <p class="text-xs font-semibold text-sage-700">Location</p>
                    <p class="mt-1 text-sm text-ink-700">ASA UR Nyarugenge SDA</p>
                </div>
                <div class="rounded-2xl border border-sage-100 bg-sage-50/50 p-4 text-center">
                    <p class="text-xs font-semibold text-sage-700">Tuition</p>
                    <p class="mt-1 text-sm text-ink-700">Free (support welcome)</p>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ + CTA --}}
    <section class="mx-auto max-w-6xl px-6 pb-20">
        <div class="grid gap-6 lg:grid-cols-2">
            <div class="reveal soft-card p-6 sm:p-8">
                <h2 class="font-display text-2xl font-semibold text-ink-900">Quick Answers</h2>
                <div class="mt-4 space-y-4 text-sm text-ink-600">
                    <div>
                        <p class="font-semibold text-ink-900">Do I need experience?</p>
                        <p class="mt-1">No. Beginners start with Sol-Fa.</p>
                    </div>
                    <div>
                        <p class="font-semibold text-ink-900">How long is each level?</p>
                        <p class="mt-1">Usually 6-9 months, depending on class progress.</p>
                    </div>
                    <div>
                        <p class="font-semibold text-ink-900">Can I study instruments directly?</p>
                        <p class="mt-1">Instrument tracks follow literacy foundations and available slots.</p>
                    </div>
                </div>
            </div>

            <div class="reveal soft-card p-6 sm:p-8 text-center flex flex-col justify-center">
                <span class="pill bg-sage-50 text-sage-700 border border-sage-200 mx-auto">Next Intake</span>
                <h2 class="mt-4 font-display text-2xl font-semibold text-ink-900">Ready to join?</h2>
                <p class="mt-3 text-sm text-ink-600 leading-relaxed max-w-md mx-auto">
                    Register now to be considered for the next cohort. We will confirm by phone or email.
                </p>
                <div class="mt-6 flex flex-wrap items-center justify-center gap-3">
                    <x-ui.button href="{{ route('register') }}" variant="primary">Register now</x-ui.button>
                    <x-ui.button href="{{ route('contact') }}" variant="outline">Contact coordinator</x-ui.button>
                </div>
            </div>
        </div>
    </section>
@endsection
