@extends('layouts.website')

@section('title', 'Amazing Grace Academy — Home')

@section('content')
    {{-- HERO --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 pt-4 sm:pt-6 pb-10 sm:pb-14">
        <div class="ui-hero-panel overflow-hidden">
            <div class="grid items-center gap-10 lg:gap-16 lg:grid-cols-2 px-6 py-10 sm:px-10 sm:py-12 lg:px-14">
                <div class="reveal space-y-5 sm:space-y-6 order-2 lg:order-1">
                    <p class="section-label w-fit">Sacred music academy • Since 2016</p>
                    <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl xl:text-[2.75rem] font-semibold tracking-tight text-ink-900 leading-[1.1]">
                        Read music. Sing with confidence. Serve with excellence.
                    </h1>
                    <p class="text-base sm:text-lg text-ink-600 max-w-xl leading-relaxed">
                        Sol-Fa, staff notation, and instruments for worshippers in the Seventh-day Adventist Church.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="pill border border-sage-200/80 bg-white/90 text-sage-800 text-xs">Sol-Fa & staff</span>
                        <span class="pill border border-sage-200/80 bg-white/90 text-sage-800 text-xs">Choir leadership</span>
                        <span class="pill border border-sage-200/80 bg-white/90 text-sage-800 text-xs">Piano • Guitar • Violin</span>
                    </div>
                    <div class="flex flex-wrap gap-3 pt-1">
                        <x-ui.button href="{{ url('/register') }}" variant="primary" class="rounded-full px-5 py-2.5 text-sm sm:px-6 sm:py-3 sm:text-base">Join class</x-ui.button>
                        <x-ui.button href="{{ route('songs') }}" variant="outline" class="rounded-full px-5 py-2.5 text-sm sm:px-6 sm:py-3 sm:text-base">Shop music</x-ui.button>
                    </div>
                    <div class="grid grid-cols-3 gap-2 sm:gap-3 pt-2">
                        <div class="rounded-xl border border-sage-100/80 bg-white/90 px-3 py-3 sm:px-4 sm:py-3.5 text-center transition-colors hover:bg-white hover:border-sage-200">
                            <div class="font-display text-xl sm:text-2xl font-semibold text-sage-700">700+</div>
                            <div class="text-[11px] sm:text-xs text-ink-500 mt-0.5">Learners</div>
                        </div>
                        <div class="rounded-xl border border-sage-100/80 bg-white/90 px-3 py-3 sm:px-4 sm:py-3.5 text-center transition-colors hover:bg-white hover:border-sage-200">
                            <div class="font-display text-xl sm:text-2xl font-semibold text-sage-700">168</div>
                            <div class="text-[11px] sm:text-xs text-ink-500 mt-0.5">Graduates</div>
                        </div>
                        <div class="rounded-xl border border-sage-100/80 bg-white/90 px-3 py-3 sm:px-4 sm:py-3.5 text-center transition-colors hover:bg-white hover:border-sage-200">
                            <div class="font-display text-xl sm:text-2xl font-semibold text-sage-700">Rwanda</div>
                            <div class="text-[11px] sm:text-xs text-ink-500 mt-0.5">Ministry</div>
                        </div>
                    </div>
                </div>

                <div class="reveal reveal-delay-1 relative order-1 lg:order-2">
                    <div class="relative rounded-2xl sm:rounded-[28px] overflow-hidden bg-white shadow-card-hover border border-sage-100/80"
                        x-data="{
                            slides: [
                                { src: '{{ asset('images/aga-girls.jpg') }}', label: 'Daily practice • Choir' },
                                { src: '{{ asset('images/aga-boys1.jpg') }}', label: 'Sectional rehearsal' },
                                { src: '{{ asset('images/aga_girls1.jpg') }}', label: 'Live performance' },
                                { src: '{{ asset('images/aga-boys2.jpg') }}', label: 'Live performance' },
                            ],
                            index: 0,
                            next() { this.index = (this.index + 1) % this.slides.length; },
                            init() { setInterval(() => this.next(), 4200); }
                        }">
                        <div class="aspect-[4/5] relative">
                            <template x-for="(slide, i) in slides" :key="i">
                                <img x-show="index === i" x-transition:enter="transition duration-700 ease-out"
                                    x-transition:enter-start="opacity-0 scale-105 translate-x-4"
                                    x-transition:enter-end="opacity-100 scale-100 translate-x-0"
                                    x-transition:leave="transition duration-600 ease-in"
                                    x-transition:leave-start="opacity-100 scale-100 translate-x-0"
                                    x-transition:leave-end="opacity-0 scale-95 -translate-x-4" :src="slide.src"
                                    :alt="slide.label" :loading="i === 0 ? 'eager' : 'lazy'"
                                    :fetchpriority="i === 0 ? 'high' : 'auto'"
                                    class="absolute inset-0 h-full w-full object-cover will-change-transform">
                            </template>
                            <div class="absolute inset-0 bg-gradient-to-t from-white/10 via-transparent to-transparent">
                            </div>

                            <div
                                class="absolute left-4 top-4 flex items-center gap-2 rounded-full bg-white/90 px-4 py-2 text-xs font-semibold text-slate-700 shadow">
                                <span x-text="slides[index].label"></span>
                            </div>

                            <div
                                class="absolute bottom-4 left-4 rounded-2xl bg-white/90 px-4 py-3 shadow-lg border border-sage-200/70 text-ink-900">
                                <div class="text-[11px] text-ink-500">Next cohort</div>
                                <div class="flex items-center gap-3 mt-1">
                                    <div class="text-base font-bold text-ink-900">Class of 2026</div>
                                    <span class="text-xs text-ink-500">Register now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- QUICK LINKS --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 pb-16 sm:pb-20">
        <div class="grid gap-4 sm:gap-6 md:grid-cols-3">
            <a href="{{ route('programs') }}" class="reveal soft-card p-6 sm:p-8 flex flex-col transition-all duration-300 hover:-translate-y-1 hover:shadow-card-hover group">
                <div class="h-10 w-10 rounded-xl bg-sage-100 text-sage-600 flex items-center justify-center mb-4 group-hover:bg-sage-200 transition-colors">
                    <i class="fas fa-book-open text-lg"></i>
                </div>
                <h2 class="font-display text-lg font-semibold text-ink-900">Programs</h2>
                <p class="mt-2 text-sm text-ink-600 leading-relaxed flex-1">Sol-Fa, Staff Notation, and instruments for worship ministry.</p>
                <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-sage-700 group-hover:gap-3 transition-all">View programs <i class="fas fa-arrow-right text-xs"></i></span>
            </a>
            <a href="{{ route('songs') }}" class="reveal reveal-delay-1 soft-card p-6 sm:p-8 flex flex-col transition-all duration-300 hover:-translate-y-1 hover:shadow-card-hover group">
                <div class="h-10 w-10 rounded-xl bg-gold-100 text-gold-700 flex items-center justify-center mb-4 group-hover:bg-gold-200 transition-colors">
                    <i class="fas fa-music text-lg"></i>
                </div>
                <h2 class="font-display text-lg font-semibold text-ink-900">Our Music</h2>
                <p class="mt-2 text-sm text-ink-600 leading-relaxed flex-1">Hymns, arrangements, and teaching resources from the academy choir.</p>
                <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-sage-700 group-hover:gap-3 transition-all">Explore songs <i class="fas fa-arrow-right text-xs"></i></span>
            </a>
            <a href="{{ route('support') }}" class="reveal reveal-delay-2 soft-card p-6 sm:p-8 flex flex-col transition-all duration-300 hover:-translate-y-1 hover:shadow-card-hover group">
                <div class="h-10 w-10 rounded-xl bg-sage-100 text-sage-600 flex items-center justify-center mb-4 group-hover:bg-sage-200 transition-colors">
                    <i class="fas fa-heart text-lg"></i>
                </div>
                <h2 class="font-display text-lg font-semibold text-ink-900">Support</h2>
                <p class="mt-2 text-sm text-ink-600 leading-relaxed flex-1">Help us grow instruments, recordings, and opportunities for learners.</p>
                <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-sage-700 group-hover:gap-3 transition-all">Support us <i class="fas fa-arrow-right text-xs"></i></span>
            </a>
        </div>
    </section>

    {{-- PROGRAMS SNAPSHOT --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 pb-16 sm:pb-20">
        <div class="reveal flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
            <div>
                <p class="section-label w-fit">Gentle training for worshippers</p>
                <h2 class="mt-3 font-display text-2xl sm:text-3xl font-semibold text-ink-900">Skills that build harmony</h2>
                <p class="mt-2 text-ink-600 max-w-2xl leading-relaxed text-sm sm:text-base">
                    Practical programs for singers, choir leaders, and instrumentalists who want to serve with excellence.
                </p>
            </div>
            <x-ui.button href="{{ route('programs') }}" variant="outline" class="rounded-full w-fit hidden sm:inline-flex">Explore programs</x-ui.button>
        </div>
        <div class="mt-8 sm:mt-10 grid gap-4 sm:gap-6 md:grid-cols-3">
            <a href="{{ route('programs') }}#sol-fa" class="reveal soft-card overflow-hidden group block">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('images/aga-girls.jpg') }}" alt="Sol-Fa class"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                        loading="lazy" width="400" height="300">
                </div>
                <div class="p-5 sm:p-6 space-y-3">
                    <span class="pill-green">Sol-Fa Foundation</span>
                    <h3 class="font-display text-lg font-semibold text-ink-900">Hymnal notation & choir parts</h3>
                    <p class="text-sm text-ink-600 leading-relaxed">Read and sing SATB parts using church hymnals.</p>
                    <div class="flex gap-2 flex-wrap">
                        <span class="pill border border-sage-200 bg-sage-50/80 text-sage-800 text-xs">Sight-reading</span>
                        <span class="pill border border-sage-200 bg-sage-50/80 text-sage-800 text-xs">Rhythm</span>
                    </div>
                </div>
            </a>
            <a href="{{ route('programs') }}#staff" class="reveal reveal-delay-1 soft-card overflow-hidden group block">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('images/aga-boys1.jpg') }}" alt="Staff notation"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                        loading="lazy" width="400" height="300">
                </div>
                <div class="p-5 sm:p-6 space-y-3">
                    <span class="pill-green">Staff Notation</span>
                    <h3 class="font-display text-lg font-semibold text-ink-900">International music literacy</h3>
                    <p class="text-sm text-ink-600 leading-relaxed">International notation for choir, solo, and instruments.</p>
                    <div class="flex gap-2 flex-wrap">
                        <span class="pill border border-sage-200 bg-sage-50/80 text-sage-800 text-xs">Interpretation</span>
                        <span class="pill border border-sage-200 bg-sage-50/80 text-sage-800 text-xs">Analysis</span>
                    </div>
                </div>
            </a>
            <a href="{{ route('programs') }}#instruments" class="reveal reveal-delay-2 soft-card overflow-hidden group block">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('images/aga-boys2.jpg') }}" alt="Instruments"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                        loading="lazy" width="400" height="300">
                </div>
                <div class="p-5 sm:p-6 space-y-3">
                    <span class="pill border border-gold-200 bg-gold-50/80 text-gold-800 text-xs font-semibold">Instrumental</span>
                    <h3 class="font-display text-lg font-semibold text-ink-900">Piano, guitar & violin</h3>
                    <p class="text-sm text-ink-600 leading-relaxed">Apply music reading to instruments and worship.</p>
                    <div class="flex gap-2 flex-wrap">
                        <span class="pill border border-sage-200 bg-sage-50/80 text-sage-800 text-xs">Technique</span>
                        <span class="pill border border-sage-200 bg-sage-50/80 text-sage-800 text-xs">Ensemble</span>
                    </div>
                </div>
            </a>
        </div>
    </section>

    {{-- LEARNING PATH --}}
    <section class="bg-sage-50/40 border-y border-sage-100/80 py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
            <div class="reveal text-center max-w-2xl mx-auto">
                <p class="section-label w-fit mx-auto">Learning path</p>
                <h2 class="mt-3 font-display text-2xl sm:text-3xl font-semibold text-ink-900">From first note to ministry</h2>
                <p class="mt-2 text-ink-600 leading-relaxed text-sm sm:text-base">A clear, paced journey with milestones and outcomes.</p>
            </div>
            <div class="mt-10 grid gap-4 sm:gap-6 md:grid-cols-3">
                <div class="reveal soft-card p-6 sm:p-7 hover:border-sage-200 hover:shadow-card transition-all duration-300">
                    <div class="flex items-center gap-3">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-sage-200/80 text-sage-800 font-display font-bold text-lg">1</span>
                        <span class="text-xs text-sage-600 font-semibold">6–8 weeks</span>
                    </div>
                    <h3 class="mt-4 font-display text-lg font-semibold text-ink-900">Sol-Fa foundations</h3>
                    <ul class="mt-4 list-check space-y-2">
                        <li><span class="dot"></span><span>Read SATB hymns accurately</span></li>
                        <li><span class="dot"></span><span>Rhythm, breathing, blend</span></li>
                    </ul>
                </div>
                <div class="reveal reveal-delay-1 soft-card p-6 sm:p-7 hover:border-sage-200 hover:shadow-card transition-all duration-300">
                    <div class="flex items-center gap-3">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-sage-200/80 text-sage-800 font-display font-bold text-lg">2</span>
                        <span class="text-xs text-sage-600 font-semibold">8–10 weeks</span>
                    </div>
                    <h3 class="mt-4 font-display text-lg font-semibold text-ink-900">Staff notation</h3>
                    <ul class="mt-4 list-check space-y-2">
                        <li><span class="dot"></span><span>International notation literacy</span></li>
                        <li><span class="dot"></span><span>Sight-reading & analysis</span></li>
                    </ul>
                </div>
                <div class="reveal reveal-delay-2 soft-card p-6 sm:p-7 hover:border-gold-200 hover:shadow-card transition-all duration-300">
                    <div class="flex items-center gap-3">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gold-200/80 text-gold-800 font-display font-bold text-lg">3</span>
                        <span class="text-xs text-gold-700 font-semibold">Ongoing</span>
                    </div>
                    <h3 class="mt-4 font-display text-lg font-semibold text-ink-900">Instruments & ministry</h3>
                    <ul class="mt-4 list-check space-y-2">
                        <li><span class="dot"></span><span>Piano, guitar, violin studio</span></li>
                        <li><span class="dot"></span><span>Performance & worship leading</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- EVENTS / COHORTS --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 pb-16 sm:pb-20">
        <div class="reveal flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
            <div>
                <p class="section-label w-fit">Upcoming</p>
                <h2 class="mt-3 font-display text-2xl sm:text-3xl font-semibold text-ink-900">Cohorts & events</h2>
                <p class="mt-2 text-ink-600 max-w-xl leading-relaxed text-sm sm:text-base">Join the next intake or worship events across Rwanda.</p>
            </div>
            <div class="flex items-center gap-2 flex-shrink-0">
                <x-ui.button href="{{ route('events') }}" variant="outline" class="rounded-full text-sm">View all</x-ui.button>
                <x-ui.button href="{{ url('/register') }}" variant="primary" class="rounded-full text-sm">Register</x-ui.button>
            </div>
        </div>
        <div class="mt-8 timeline">
            @forelse ($upcomingEvents as $event)
                <div class="timeline-item">
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-semibold text-ink-900">{{ $event->title }}</div>
                        <span
                            class="pill bg-sage-50 text-sage-800 border border-sage-200">{{ $event->status ?? ($event->event_date ? $event->event_date->format('M j') : 'Event') }}</span>
                    </div>
                    <p class="mt-1 text-sm text-ink-600">
                        {{ Str::limit($event->description ?? ($event->location ?? 'Join us for this event.'), 80) }}</p>
                </div>
            @empty
                <div class="timeline-item">
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-semibold text-ink-900">Class of 2026 Intake</div>
                        <span class="pill bg-sage-50 text-sage-800 border border-sage-200">Open</span>
                    </div>
                    <p class="mt-1 text-sm text-ink-600">Saturdays • Kigali Bilingual Church • Sol-Fa level starts.</p>
                </div>
                <div class="timeline-item">
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-semibold text-ink-900">Hymns Unveiled Live</div>
                        <span class="pill bg-sage-50 text-sage-800 border border-sage-200">February</span>
                    </div>
                    <p class="mt-1 text-sm text-ink-600">Teaching program recording • open choir participation.</p>
                </div>
                <div class="timeline-item">
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-semibold text-ink-900">Annual Choir Concert</div>
                        <span class="pill bg-sage-50 text-sage-800 border border-sage-200">June</span>
                    </div>
                    <p class="mt-1 text-sm text-ink-600">Showcasing graduates, choirs, and instrumental ensembles.</p>
                </div>
            @endforelse
        </div>
        <div class="mt-6">
            <x-ui.button href="{{ route('events') }}" variant="ghost" class="rounded-full text-sm">View all events →</x-ui.button>
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section class="bg-white/60 border-y border-ink-100 py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
            <div class="reveal text-center max-w-xl mx-auto">
                <p class="section-label w-fit mx-auto">Voices from the choir</p>
                <h2 class="mt-3 font-display text-2xl sm:text-3xl font-semibold text-ink-900">Impact that sounds like family</h2>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-2 max-w-4xl mx-auto">
                <div class="reveal soft-card p-6 sm:p-8 relative">
                    <span class="absolute top-6 right-6 text-4xl font-display text-sage-200/80 leading-none">"</span>
                    <div class="flex items-center gap-4">
                        <div class="h-12 w-12 rounded-full bg-sage-100 flex items-center justify-center text-sage-600 font-display font-semibold">R</div>
                        <div>
                            <div class="font-semibold text-ink-900">Ruth U.</div>
                            <div class="text-xs text-ink-500">Soprano • Sol-Fa graduate</div>
                        </div>
                    </div>
                    <p class="mt-5 text-ink-600 text-sm sm:text-base leading-relaxed pl-0">
                        I joined with no background. Now I read hymns, lead choir rehearsals, and teach younger choristers.
                    </p>
                </div>
                <div class="reveal reveal-delay-1 soft-card p-6 sm:p-8 relative">
                    <span class="absolute top-6 right-6 text-4xl font-display text-sage-200/80 leading-none">"</span>
                    <div class="flex items-center gap-4">
                        <div class="h-12 w-12 rounded-full bg-gold-100 flex items-center justify-center text-gold-700 font-display font-semibold">M</div>
                        <div>
                            <div class="font-semibold text-ink-900">Pastor M.</div>
                            <div class="text-xs text-ink-500">Church leader</div>
                        </div>
                    </div>
                    <p class="mt-5 text-ink-600 text-sm sm:text-base leading-relaxed pl-0">
                        The academy lifted our worship quality. Members read music, harmonize confidently, and train others.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- MUSIC SHOP --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 pb-16 sm:pb-20">
        <div class="reveal flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
            <div>
                <p class="section-label w-fit">Music shop</p>
                <h2 class="mt-3 font-display text-2xl sm:text-3xl font-semibold text-ink-900">Albums, hymnals & resources</h2>
                <p class="mt-2 text-ink-600 max-w-xl text-sm sm:text-base">Support the choir and get materials for your church or group.</p>
            </div>
            <x-ui.button href="{{ route('songs') }}" variant="outline" class="rounded-full w-fit hidden sm:inline-flex">Browse music</x-ui.button>
        </div>
        <div class="mt-8 grid gap-4 sm:gap-6 md:grid-cols-3">
            <div class="reveal shop-card p-6">
                <span class="pill border border-sage-200 bg-sage-50/90 text-sage-800 text-xs">Album</span>
                <h3 class="mt-4 font-display text-lg font-semibold text-ink-900">“Hymns Renewed</h3>
                <p class="mt-2 text-sm text-ink-600">Recorded arrangements by the academy choir.</p>
                <p class="mt-4 font-display text-xl font-bold text-ink-900">10,000 RWF</p>
                <x-ui.button href="{{ route('songs') }}" variant="primary" class="mt-4 w-full rounded-xl text-sm">Buy album</x-ui.button>
            </div>
            <div class="reveal reveal-delay-1 shop-card p-6">
                <span class="pill border border-sage-200 bg-sage-50/90 text-sage-800 text-xs">Hymnal</span>
                <h3 class="mt-4 font-display text-lg font-semibold text-ink-900">Sol-Fa Hymnal (SATB)</h3>
                <p class="mt-2 text-sm text-ink-600 leading-relaxed">Printed hymns with clear parts for choir practice.</p>
                <p class="mt-4 font-display text-xl font-bold text-ink-900">8,000 RWF</p>
                <x-ui.button href="{{ route('support') }}" variant="outline" class="mt-4 w-full rounded-xl text-sm">Order copy</x-ui.button>
            </div>
            <div class="reveal reveal-delay-2 shop-card p-6">
                <span class="pill border border-gold-200 bg-gold-50/80 text-gold-800 text-xs">Workbook</span>
                <h3 class="mt-4 font-display text-lg font-semibold text-ink-900">Sight-Reading Drills</h3>
                <p class="mt-2 text-sm text-ink-600 leading-relaxed">Exercises for Sol-Fa and staff notation learners.</p>
                <p class="mt-4 font-display text-xl font-bold text-ink-900">6,000 RWF</p>
                <x-ui.button href="{{ route('programs') }}" variant="outline" class="mt-4 w-full rounded-xl text-sm">View details</x-ui.button>
            </div>
        </div>
    </section>

    {{-- GALLERY --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 pb-16 sm:pb-20">
        <div class="reveal flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
            <div>
                <p class="section-label w-fit">Gallery</p>
                <h2 class="mt-3 font-display text-2xl sm:text-3xl font-semibold text-ink-900">Choir moments</h2>
                <p class="mt-2 text-ink-600 leading-relaxed text-sm sm:text-base">Rehearsals, concerts, and worship services.</p>
            </div>
            <x-ui.button href="{{ route('songs') }}" variant="outline" class="rounded-full w-fit hidden sm:inline-flex">See performances</x-ui.button>
        </div>
        <div class="mt-8 sm:mt-10 grid gap-4 sm:gap-6 lg:grid-cols-3">
            <div class="reveal soft-card overflow-hidden group">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/aga_girls1.jpg') }}"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105"
                        alt="Choir concert" loading="lazy" width="400" height="256">
                </div>
                <div class="p-5">
                    <div class="font-display text-base font-semibold text-ink-900">Annual Concert</div>
                    <div class="text-xs text-ink-500 mt-0.5">Kigali Bilingual Church</div>
                </div>
            </div>
            <div class="reveal reveal-delay-1 soft-card overflow-hidden group">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/aga-boys1.jpg') }}"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105"
                        alt="Choir rehearsal" loading="lazy" width="400" height="256">
                </div>
                <div class="p-5">
                    <div class="font-display text-base font-semibold text-ink-900">Sectional Rehearsal</div>
                    <div class="text-xs text-ink-500 mt-0.5">Sabbath afternoon</div>
                </div>
            </div>
            <div class="reveal reveal-delay-2 soft-card overflow-hidden group">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/aga-boys2.jpg') }}"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105"
                        alt="Instrument class" loading="lazy" width="400" height="256">
                </div>
                <div class="p-5">
                    <div class="font-display text-base font-semibold text-ink-900">Instrumental Studio</div>
                    <div class="text-xs text-ink-500 mt-0.5">Piano • Guitar • Violin</div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ + SUPPORT CTA --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 pb-20 sm:pb-24">
        <div class="grid gap-6 lg:grid-cols-3 lg:gap-8">
            <div class="lg:col-span-2 reveal soft-card p-6 sm:p-8">
                <p class="section-label w-fit">FAQ</p>
                <h2 class="mt-3 font-display text-xl sm:text-2xl font-semibold text-ink-900">Frequently asked</h2>
                <dl class="mt-6 space-y-5">
                    <div class="border-b border-ink-100 pb-5">
                        <dt class="text-sm font-semibold text-ink-900">Is the training really free?</dt>
                        <dd class="text-sm text-ink-600 mt-1 leading-relaxed">Yes. We serve the church; learners invest time and commitment.</dd>
                    </div>
                    <div class="border-b border-ink-100 pb-5">
                        <dt class="text-sm font-semibold text-ink-900">Do I need prior music knowledge?</dt>
                        <dd class="text-sm text-ink-600 mt-1 leading-relaxed">No. We start from zero, including those who cannot read notation.</dd>
                    </div>
                    <div class="pb-0">
                        <dt class="text-sm font-semibold text-ink-900">Can churches invite the academy?</dt>
                        <dd class="text-sm text-ink-600 mt-1 leading-relaxed">Yes. We support evangelism programs, concerts, and choir training.</dd>
                    </div>
                </dl>
            </div>
            <div class="reveal reveal-delay-1 soft-card p-6 sm:p-8 bg-gradient-to-br from-sage-50/90 via-white to-gold-50/40 border border-sage-200/80">
                <p class="section-label w-fit">Support the ministry</p>
                <h3 class="mt-3 font-display text-lg font-semibold text-ink-900">Sponsor instruments & recordings</h3>
                <p class="mt-2 text-sm text-ink-600 leading-relaxed">Give via bank or mobile money. All details on our support page.</p>
                <ul class="mt-4 list-check space-y-2">
                    <li><span class="dot"></span><span>Fund guitars, violins, keyboards</span></li>
                    <li><span class="dot"></span><span>Recording and teaching resources</span></li>
                </ul>
                <x-ui.button href="{{ route('support') }}" variant="primary" class="mt-6 w-full rounded-xl text-sm">Support us</x-ui.button>
            </div>
        </div>
    </section>

    {{-- MINISTRY STRIP --}}
    <section class="border-t border-ink-100 bg-sage-50/30 py-12 sm:py-14">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 flex flex-col md:flex-row md:items-center md:justify-between gap-8">
            <div class="reveal text-center md:text-left">
                <p class="text-xs font-semibold uppercase tracking-widest text-sage-600">Voices united in praise</p>
                <p class="mt-2 text-sm sm:text-base text-ink-700 max-w-2xl leading-relaxed">
                    Training choirs and individuals to read music, sing in harmony, and serve God with disciplined, beautiful worship.
                </p>
            </div>
            <div class="reveal flex flex-wrap justify-center md:justify-end gap-2">
                <span class="pill border border-sage-200/80 bg-white/90 text-sage-800 text-xs font-medium">300+ choristers</span>
                <span class="pill border border-sage-200/80 bg-white/90 text-sage-800 text-xs font-medium">4+ albums & programs</span>
                <span class="pill border border-sage-200/80 bg-white/90 text-sage-800 text-xs font-medium">Rwanda ministry</span>
            </div>
        </div>
    </section>
@endsection
