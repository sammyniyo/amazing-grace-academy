@extends('layouts.website')

@section('title', 'About — Amazing Grace Academy')
@section('meta_description',
    'The story of Amazing Grace Academy — from a choir asking "How do we read these hymns?" to
    a school for worship and excellence in Rwanda.')

@section('content')
    {{-- Opening — the first line of the story --}}
    <section class="mx-auto max-w-4xl px-4 sm:px-6 pt-12 sm:pt-16 pb-10 sm:pb-14">
        <div class="reveal text-center space-y-4 sm:space-y-6">
            <span class="pill bg-sage-50 text-sage-700 border border-sage-200">Our story</span>
            <h1
                class="font-display text-3xl sm:text-4xl md:text-5xl font-semibold tracking-tight text-ink-900 leading-tight">
                A choir asked a question.<br class="sm:hidden"> The answer became a school.
            </h1>
            <p class="text-base sm:text-lg text-ink-600 max-w-2xl mx-auto leading-relaxed">
                In October 2016, a handful of singers stayed after vespers. They opened a hymnal and wondered: <em>How do we
                    really read this?</em> That moment started everything.
            </p>
        </div>
    </section>

    {{-- Chapter 1: The beginning --}}
    <section class="mx-auto max-w-4xl px-4 sm:px-6 py-10 sm:py-14">
        <div class="reveal soft-card rounded-2xl sm:rounded-3xl p-6 sm:p-8 md:p-10 border border-sage-100/80">
            <p class="text-ink-600 text-base sm:text-lg leading-relaxed">
                What began as a free, church-based experiment in hymn literacy soon grew. Sol-Fa syllables turned into
                sight-reading. Sight-reading turned into harmony, rehearsal discipline, and the quiet confidence that comes
                when a choir reads together.
            </p>
            <p class="mt-4 sm:mt-6 text-ink-600 text-base sm:text-lg leading-relaxed">
                Today that path extends to Piano, Guitar, and Violin — each instrument woven into the same literacy-first
                story. We are a music school within the <strong>Seventh-day Adventist Church</strong> (ASSA Kigali, ASA UR
                Nyarugenge), at <strong>ASA UR Nyarugenge SDA</strong>. But at heart we are still that choir: learning,
                then leading.
            </p>
        </div>
    </section>

    {{-- The journey — three beats --}}
    <section class="mx-auto max-w-4xl px-4 sm:px-6 py-10 sm:py-14">
        <h2 class="reveal font-display text-2xl sm:text-3xl font-semibold text-ink-900 text-center mb-8 sm:mb-10">
            The journey in three chapters
        </h2>
        <div class="grid gap-4 sm:gap-6 sm:grid-cols-3">
            <div class="reveal soft-card rounded-2xl p-5 sm:p-6 border border-sage-100/80 text-center sm:text-left">
                <div
                    class="inline-flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-sage-100 text-sage-700 mb-3 sm:mb-4">
                    <i class="fa-solid fa-music text-lg sm:text-xl" aria-hidden="true"></i>
                </div>
                <h3 class="font-display text-lg sm:text-xl font-semibold text-ink-900">Sol-Fa</h3>
                <p class="mt-2 text-sm sm:text-base text-ink-600 leading-relaxed">The language that started everything —
                    church hymnal notation, sung and read with meaning.</p>
            </div>
            <div class="reveal soft-card rounded-2xl p-5 sm:p-6 border border-sage-100/80 text-center sm:text-left">
                <div
                    class="inline-flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-gold-100 text-gold-700 mb-3 sm:mb-4">
                    <i class="fa-solid fa-book-open text-lg sm:text-xl" aria-hidden="true"></i>
                </div>
                <h3 class="font-display text-lg sm:text-xl font-semibold text-ink-900">Staff notation</h3>
                <p class="mt-2 text-sm sm:text-base text-ink-600 leading-relaxed">International notation (Muhundwanota),
                    sight-reading, and harmony — so every score becomes a shared story.</p>
            </div>
            <div class="reveal soft-card rounded-2xl p-5 sm:p-6 border border-sage-100/80 text-center sm:text-left">
                <div
                    class="inline-flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-sage-100 text-sage-700 mb-3 sm:mb-4">
                    <i class="fa-solid fa-guitar text-lg sm:text-xl" aria-hidden="true"></i>
                </div>
                <h3 class="font-display text-lg sm:text-xl font-semibold text-ink-900">Instruments</h3>
                <p class="mt-2 text-sm sm:text-base text-ink-600 leading-relaxed">Piano, Guitar, Violin — taught on the same
                    foundation so the story travels farther.</p>
            </div>
        </div>
    </section>

    {{-- Why it matters — mission & vision --}}
    <section class="py-12 sm:py-16 bg-gradient-to-b from-sage-50/60 to-cream-100/80">
        <div class="mx-auto max-w-4xl px-4 sm:px-6">
            <div class="grid gap-6 sm:gap-8 sm:grid-cols-2">
                <div class="reveal soft-card rounded-2xl p-6 sm:p-8 bg-white/90 border border-sage-100/80">
                    <span class="pill bg-sage-50 text-sage-700 border border-sage-200">Mission</span>
                    <p class="mt-4 text-ink-700 text-base sm:text-lg leading-relaxed">
                        Teach music through proper sight-reading and notation so every hymn can be sung with meaning and
                        unity — wherever our learners serve.
                    </p>
                </div>
                <div class="reveal soft-card rounded-2xl p-6 sm:p-8 bg-white/90 border border-sage-100/80">
                    <span class="pill bg-gold-50 text-gold-700 border border-gold-200">Vision</span>
                    <p class="mt-4 text-ink-700 text-base sm:text-lg leading-relaxed">
                        Every learner able to pick up any piece — Sol-Fa or staff — sing it, teach it, or play it, and shape
                        a choir with excellence.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Impact — the story so far --}}
    <section class="mx-auto max-w-4xl px-4 sm:px-6 py-12 sm:py-16">
        <h2 class="reveal font-display text-2xl sm:text-3xl font-semibold text-ink-900 text-center mb-8 sm:mb-10">
            The story so far
        </h2>
        <div class="grid grid-cols-3 gap-3 sm:gap-6">
            <div class="reveal soft-card rounded-2xl p-4 sm:p-6 text-center border border-sage-100/80">
                <span class="font-display text-2xl sm:text-3xl font-semibold text-sage-700">700+</span>
                <p class="mt-1 text-xs sm:text-sm text-ink-600">Learners since 2016</p>
            </div>
            <div class="reveal soft-card rounded-2xl p-4 sm:p-6 text-center border border-sage-100/80">
                <span class="font-display text-2xl sm:text-3xl font-semibold text-sage-700">168</span>
                <p class="mt-1 text-xs sm:text-sm text-ink-600">Sol-Fa graduates</p>
            </div>
            <div class="reveal soft-card rounded-2xl p-4 sm:p-6 text-center border border-sage-100/80">
                <span class="font-display text-2xl sm:text-3xl font-semibold text-gold-600">15+</span>
                <p class="mt-1 text-xs sm:text-sm text-ink-600">ABRSM certificates</p>
            </div>
        </div>
        <p class="reveal mt-6 sm:mt-8 text-center text-ink-600 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
            Graduates now lead hymn recordings, radio music education, and new music schools — the story retold in many
            voices.
        </p>
        <div class="reveal mt-8 sm:mt-10 flex flex-wrap justify-center gap-3">
            <x-ui.button href="{{ route('programs') }}" variant="primary"
                class="rounded-xl text-sm sm:text-base px-5 py-2.5 sm:py-3">View programs</x-ui.button>
            <x-ui.button href="{{ route('register') }}" variant="outline"
                class="rounded-xl text-sm sm:text-base px-5 py-2.5 sm:py-3">Join a class</x-ui.button>
        </div>
    </section>

    {{-- Closing line --}}
    <section class="mx-auto max-w-4xl px-4 sm:px-6 pb-16 sm:pb-20">
        <div class="reveal text-center soft-card rounded-2xl p-6 sm:p-8 border border-sage-100/80 bg-white/80">
            <p class="font-display text-xl sm:text-2xl text-ink-800 italic leading-relaxed">
                "Make a joyful noise to the Lord, all the earth."
            </p>
            <p class="mt-2 text-sage-600 font-semibold text-sm sm:text-base">— Psalm 100:1</p>
        </div>
    </section>
@endsection
