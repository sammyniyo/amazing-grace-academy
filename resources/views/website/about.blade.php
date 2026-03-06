@extends('layouts.website')

@section('title', 'About — Amazing Grace Academy')
@section('meta_description',
    'Amazing Grace Academy began in 2016 as a choir literacy circle and grew into a worship-centered music school in Kigali.')

@section('content')
    <div class="about-page pb-16 sm:pb-24">
        <section class="mx-auto max-w-7xl px-4 sm:px-6 pt-10 sm:pt-14">
            <div class="about-hero reveal relative overflow-hidden rounded-[2rem] border border-sage-100/80 bg-white/90 shadow-card">
                <div class="grid lg:grid-cols-12 gap-6 sm:gap-8 p-6 sm:p-8 lg:p-10 items-center">
                    <div class="lg:col-span-7 space-y-5 sm:space-y-6">
                        <span class="section-label">About Amazing Grace Academy</span>
                        <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight text-ink-900">
                            A choir question in 2016 became a school for worship excellence.
                        </h1>
                        <p class="text-ink-600 text-base sm:text-lg leading-relaxed max-w-2xl">
                            We started at ASA UR Nyarugenge SDA when singers asked, "How do we read these hymns well?" That single
                            question shaped our mission: teach music literacy that serves the church with confidence, unity, and meaning.
                        </p>
                        <div class="flex flex-wrap gap-3 pt-1">
                            <x-ui.button href="{{ route('programs') }}" variant="primary" class="rounded-full px-5 py-2.5 text-sm">
                                Explore programs
                            </x-ui.button>
                            <x-ui.button href="{{ route('register') }}" variant="outline" class="rounded-full px-5 py-2.5 text-sm">
                                Join a class
                            </x-ui.button>
                        </div>
                    </div>

                    <div class="lg:col-span-5">
                        <div class="relative rounded-3xl overflow-hidden border border-sage-100/80 shadow-card">
                            <img src="{{ asset('images/aga-choir-group.png') }}" alt="Amazing Grace Academy choir group"
                                class="h-72 sm:h-80 lg:h-[28rem] w-full object-cover" loading="eager" decoding="async">
                            <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-ink-900/70 via-ink-900/30 to-transparent p-5">
                                <p class="text-white text-sm sm:text-base font-semibold">Sacred music training rooted in literacy and service</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-7xl px-4 sm:px-6 mt-6 sm:mt-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4">
                <div class="reveal soft-card p-4 sm:p-5 text-center border border-sage-100/80">
                    <p class="font-display text-2xl sm:text-3xl font-semibold text-sage-700">2016</p>
                    <p class="mt-1 text-xs sm:text-sm text-ink-600">Founded</p>
                </div>
                <div class="reveal reveal-delay-1 soft-card p-4 sm:p-5 text-center border border-sage-100/80">
                    <p class="font-display text-2xl sm:text-3xl font-semibold text-sage-700">700+</p>
                    <p class="mt-1 text-xs sm:text-sm text-ink-600">Learners trained</p>
                </div>
                <div class="reveal reveal-delay-2 soft-card p-4 sm:p-5 text-center border border-sage-100/80">
                    <p class="font-display text-2xl sm:text-3xl font-semibold text-sage-700">168</p>
                    <p class="mt-1 text-xs sm:text-sm text-ink-600">Sol-Fa graduates</p>
                </div>
                <div class="reveal reveal-delay-3 soft-card p-4 sm:p-5 text-center border border-gold-100/80">
                    <p class="font-display text-2xl sm:text-3xl font-semibold text-gold-600">15+</p>
                    <p class="mt-1 text-xs sm:text-sm text-ink-600">ABRSM certificates</p>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-7xl px-4 sm:px-6 pt-12 sm:pt-16">
            <div class="grid lg:grid-cols-12 gap-6 sm:gap-8 items-start">
                <div class="lg:col-span-5 reveal soft-card p-6 sm:p-8 border border-sage-100/80">
                    <span class="pill bg-sage-50 text-sage-700 border border-sage-200">Our journey</span>
                    <h2 class="mt-4 font-display text-2xl sm:text-3xl font-semibold text-ink-900">From hymn literacy to full music formation</h2>
                    <p class="mt-3 text-ink-600 leading-relaxed">
                        We began with Sol-Fa in church choirs, expanded into staff notation, and now train learners in Piano,
                        Guitar, and Violin. Every class still follows one principle: literacy before complexity.
                    </p>
                    <p class="mt-3 text-ink-600 leading-relaxed">
                        Our learners now serve in choirs, recordings, broadcasts, and local ministry leadership across Rwanda.
                    </p>
                </div>

                <div class="lg:col-span-7">
                    <div class="timeline space-y-4 sm:space-y-5">
                        <article class="reveal timeline-item">
                            <p class="text-xs font-semibold uppercase tracking-wide text-sage-700">Chapter 1</p>
                            <h3 class="mt-1 font-display text-xl font-semibold text-ink-900">Sol-Fa foundation</h3>
                            <p class="mt-2 text-sm sm:text-base text-ink-600 leading-relaxed">Reading and singing hymnal notation with clarity, timing, and shared understanding.</p>
                        </article>
                        <article class="reveal reveal-delay-1 timeline-item">
                            <p class="text-xs font-semibold uppercase tracking-wide text-sage-700">Chapter 2</p>
                            <h3 class="mt-1 font-display text-xl font-semibold text-ink-900">Staff notation mastery</h3>
                            <p class="mt-2 text-sm sm:text-base text-ink-600 leading-relaxed">Sight-reading, harmony, and score interpretation through Muhundwanota and structured rehearsal discipline.</p>
                        </article>
                        <article class="reveal reveal-delay-2 timeline-item">
                            <p class="text-xs font-semibold uppercase tracking-wide text-sage-700">Chapter 3</p>
                            <h3 class="mt-1 font-display text-xl font-semibold text-ink-900">Instrument pathways</h3>
                            <p class="mt-2 text-sm sm:text-base text-ink-600 leading-relaxed">Piano, Guitar, and Violin taught on the same literacy-first foundation for long-term ministry impact.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-7xl px-4 sm:px-6 pt-12 sm:pt-16">
            <div class="grid lg:grid-cols-12 gap-4 sm:gap-6">
                <article class="reveal lg:col-span-6 soft-card p-6 sm:p-8 border border-sage-100/80">
                    <span class="pill bg-sage-50 text-sage-700 border border-sage-200">Mission</span>
                    <h3 class="mt-4 font-display text-2xl font-semibold text-ink-900">Teach music with literacy, precision, and worship purpose</h3>
                    <p class="mt-3 text-ink-600 leading-relaxed">
                        We train learners to read, sing, and play music with understanding so church worship can be led with unity
                        and excellence.
                    </p>
                </article>
                <article class="reveal reveal-delay-1 lg:col-span-6 soft-card p-6 sm:p-8 border border-gold-100/80">
                    <span class="pill bg-gold-50 text-gold-700 border border-gold-200">Vision</span>
                    <h3 class="mt-4 font-display text-2xl font-semibold text-ink-900">Every learner ready to lead music anywhere</h3>
                    <p class="mt-3 text-ink-600 leading-relaxed">
                        From Sol-Fa to staff notation and instruments, we want each graduate to serve choirs, schools, and ministries
                        as a confident music leader.
                    </p>
                </article>
            </div>
        </section>

        <section class="mx-auto max-w-5xl px-4 sm:px-6 pt-12 sm:pt-16">
            <div class="reveal rounded-[1.75rem] border border-sage-100/80 bg-gradient-to-r from-sage-50 via-white to-gold-50 p-7 sm:p-10 text-center shadow-card">
                <p class="font-display text-xl sm:text-2xl text-ink-800 italic leading-relaxed">
                    "Make a joyful noise to the Lord, all the earth."
                </p>
                <p class="mt-2 text-sage-600 font-semibold text-sm sm:text-base">Psalm 100:1</p>
                <div class="mt-6 flex flex-wrap items-center justify-center gap-3">
                    <x-ui.button href="{{ route('register') }}" variant="primary" class="rounded-full px-5 py-2.5 text-sm">
                        Join a class
                    </x-ui.button>
                    <x-ui.button href="{{ route('contact') }}" variant="outline" class="rounded-full px-5 py-2.5 text-sm">
                        Talk to us
                    </x-ui.button>
                </div>
            </div>
        </section>
    </div>
@endsection
