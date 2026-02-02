@extends('layouts.website')

@section('title', 'Amazing Grace Academy — Home')

@section('content')
    {{-- HERO --}}
    <section class="mx-auto max-w-7xl px-6 pt-6 pb-12">
        <div class="ui-hero-panel">
            <div class="grid items-center gap-12 lg:grid-cols-2 px-8 py-12 sm:px-12 lg:px-14">
                <div class="reveal space-y-6">
                    <div class="inline-flex items-center gap-2 rounded-full border border-sage-200/80 bg-white/90 px-4 py-1.5 text-xs font-semibold text-sage-700 tracking-wide shadow-sm">
                        Sacred music academy • Since 2016
                    </div>

                    <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-semibold tracking-tight text-ink-900 leading-[1.08]">
                        Read music. Sing with confidence. Serve with excellence.
                    </h1>
                    <p class="text-lg text-ink-600 max-w-2xl leading-relaxed">
                        Sol-Fa, staff notation, and instruments for worshippers in the Seventh-day Adventist Church.
                    </p>

                    <div class="flex flex-wrap gap-2 text-sm text-ink-700">
                        <span class="rounded-full border border-sage-200/80 bg-white/80 px-3.5 py-1.5 font-medium">Sol-Fa & staff literacy</span>
                        <span class="rounded-full border border-sage-200/80 bg-white/80 px-3.5 py-1.5 font-medium">Choir leadership</span>
                        <span class="rounded-full border border-sage-200/80 bg-white/80 px-3.5 py-1.5 font-medium">Piano • Guitar • Violin</span>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <x-ui.button href="{{ url('/register') }}" variant="primary" class="rounded-full px-6 py-3">Join class</x-ui.button>
                        <x-ui.button href="{{ route('songs') }}" variant="outline" class="rounded-full px-6 py-3">Shop music</x-ui.button>
                    </div>

                    <div class="grid gap-3 sm:grid-cols-3 text-sm text-ink-600">
                        <div class="rounded-2xl border border-sage-100 bg-white/80 px-4 py-3.5 shadow-sm transition-shadow hover:shadow-card">
                            <div class="font-display text-2xl font-semibold text-sage-700">700+</div>
                            <div>Learners trained</div>
                        </div>
                        <div class="rounded-2xl border border-sage-100 bg-white/80 px-4 py-3.5 shadow-sm transition-shadow hover:shadow-card">
                            <div class="font-display text-2xl font-semibold text-sage-700">168</div>
                            <div>Sol-Fa graduates</div>
                        </div>
                        <div class="rounded-2xl border border-sage-100 bg-white/80 px-4 py-3.5 shadow-sm transition-shadow hover:shadow-card">
                            <div class="font-display text-2xl font-semibold text-sage-700">Rwanda</div>
                            <div>Ministry reach</div>
                        </div>
                    </div>
                </div>

                <div class="reveal reveal-delay-1 relative">
                    <div class="relative rounded-[28px] overflow-hidden bg-white shadow-card-hover border border-sage-100/80"
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
                                    :alt="slide.label"
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

    {{-- QUICK LINKS SECTION --}}
    <section class="mx-auto max-w-7xl px-6 pb-24">
        <div class="grid gap-6 md:grid-cols-3">
            <div class="reveal soft-card p-8 transition-all duration-300 hover:-translate-y-0.5">
                <div class="section-label">Programs</div>
                <p class="mt-3 text-sm text-ink-600 leading-relaxed">
                    Sol-Fa, Staff Notation, and instruments designed for worship ministry.
                </p>
                <x-ui.button href="{{ route('programs') }}" variant="primary" class="mt-6 w-full rounded-xl">View Programs</x-ui.button>
            </div>
            <div class="reveal reveal-delay-1 soft-card p-8 transition-all duration-300 hover:-translate-y-0.5">
                <div class="section-label">Our Music</div>
                <p class="mt-3 text-sm text-ink-600 leading-relaxed">
                    Hymns, arrangements, and teaching resources from the academy choir.
                </p>
                <x-ui.button href="{{ route('songs') }}" variant="outline" class="mt-6 w-full rounded-xl">Explore Songs</x-ui.button>
            </div>
            <div class="reveal reveal-delay-2 soft-card p-8 transition-all duration-300 hover:-translate-y-0.5">
                <div class="section-label">Support</div>
                <p class="mt-3 text-sm text-ink-600 leading-relaxed">
                    Help us grow instruments, recordings, and opportunities for learners.
                </p>
                <x-ui.button href="{{ route('contact') }}#support" variant="ghost" class="mt-6 w-full rounded-xl">Support the Academy</x-ui.button>
            </div>
        </div>
    </section>

    {{-- SERVICES SNAPSHOT --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal flex items-center justify-between gap-6 flex-wrap">
            <div>
                <div class="section-label">Gentle Training for Worshippers</div>
                <h2 class="mt-3 font-display text-3xl font-semibold text-ink-900">Skills that build harmony</h2>
                <p class="mt-2 text-ink-600 max-w-2xl leading-relaxed">
                    Practical programs designed for singers, choir leaders, and instrumentalists who want to serve with excellence.
                </p>
            </div>
            <x-ui.button href="{{ route('programs') }}" variant="outline" class="rounded-full hidden sm:inline-flex">Explore Programs</x-ui.button>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-3">
            <div class="reveal soft-card overflow-hidden group">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/aga-girls.jpg') }}" alt="Sol-Fa class photo" class="h-52 w-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="p-6 space-y-3">
                    <div class="pill-green">Sol-Fa Foundation</div>
                    <h3 class="font-display text-xl font-semibold text-ink-900">Hymnal Notation & Choir Parts</h3>
                    <p class="text-sm text-ink-600 leading-relaxed">Learn to read and sing SATB parts correctly using church hymnals.</p>
                    <div class="flex gap-2 flex-wrap">
                        <span class="pill bg-sage-50 text-sage-800 border border-sage-200">Sight-reading</span>
                        <span class="pill bg-sage-50 text-sage-800 border border-sage-200">Rhythm</span>
                    </div>
                </div>
            </div>
            <div class="reveal reveal-delay-1 soft-card overflow-hidden group">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/aga-boys1.jpg') }}" alt="Staff notation session" class="h-52 w-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="p-6 space-y-3">
                    <div class="pill-green">Staff Notation</div>
                    <h3 class="font-display text-xl font-semibold text-ink-900">International Music Literacy</h3>
                    <p class="text-sm text-ink-600 leading-relaxed">Advance to international notation for choir, solo, and instrumental work.</p>
                    <div class="flex gap-2 flex-wrap">
                        <span class="pill bg-sage-50 text-sage-800 border border-sage-200">Interpretation</span>
                        <span class="pill bg-sage-50 text-sage-800 border border-sage-200">Analysis</span>
                    </div>
                </div>
            </div>
            <div class="reveal reveal-delay-2 soft-card overflow-hidden group">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/aga-boys2.jpg') }}" alt="Instrument practice" class="h-52 w-full object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="p-6 space-y-3">
                    <div class="pill-green">Instrumental Studio</div>
                    <h3 class="font-display text-xl font-semibold text-ink-900">Piano, Guitar & Violin</h3>
                    <p class="text-sm text-ink-600 leading-relaxed">Apply music reading to instruments and worship performance.</p>
                    <div class="flex gap-2 flex-wrap">
                        <span class="pill bg-sage-50 text-sage-800 border border-sage-200">Technique</span>
                        <span class="pill bg-sage-50 text-sage-800 border border-sage-200">Ensemble</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ROADMAP --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal">
            <div class="section-label">Learning Path</div>
            <h2 class="mt-3 font-display text-3xl font-semibold text-ink-900">From first note to ministry</h2>
            <p class="mt-2 text-ink-600 max-w-3xl leading-relaxed">A clear, paced journey with milestones and expected outcomes.</p>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-3">
            <div class="reveal soft-card p-6 hover:border-sage-200 transition-colors">
                <div class="flex items-center justify-between text-xs text-sage-600 font-semibold">
                    <span>Step 1</span><span>6-8 weeks</span>
                </div>
                <h3 class="mt-3 font-display text-lg font-semibold text-ink-900">Sol-Fa Foundations</h3>
                <ul class="mt-4 list-check">
                    <li><span class="dot"></span><span>Read SATB hymns accurately</span></li>
                    <li><span class="dot"></span><span>Rhythm, breathing, blend</span></li>
                </ul>
            </div>
            <div class="reveal reveal-delay-1 soft-card p-6 hover:border-sage-200 transition-colors">
                <div class="flex items-center justify-between text-xs text-sage-500 font-semibold">
                    <span>Step 2</span><span>8-10 weeks</span>
                </div>
                <h3 class="mt-3 font-display text-lg font-semibold text-ink-900">Staff Notation</h3>
                <ul class="mt-4 list-check">
                    <li><span class="dot"></span><span>International notation literacy</span></li>
                    <li><span class="dot"></span><span>Sight-reading & analysis</span></li>
                </ul>
            </div>
            <div class="reveal reveal-delay-2 soft-card p-6 hover:border-gold-200 transition-colors">
                <div class="flex items-center justify-between text-xs text-gold-600 font-semibold">
                    <span>Step 3</span><span>Ongoing</span>
                </div>
                <h3 class="mt-3 font-display text-lg font-semibold text-ink-900">Instruments & Ministry</h3>
                <ul class="mt-4 list-check">
                    <li><span class="dot"></span><span>Piano, Guitar, Violin studio</span></li>
                    <li><span class="dot"></span><span>Performance & worship leading</span></li>
                </ul>
            </div>
        </div>
    </section>

    {{-- EVENTS / COHORTS --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal flex items-center justify-between gap-6 flex-wrap">
            <div>
                <div class="section-label">Upcoming</div>
                <h2 class="mt-3 font-display text-3xl font-semibold text-ink-900">Cohorts & events</h2>
                <p class="mt-2 text-ink-600 max-w-2xl leading-relaxed">Join the next intake or worship events across Rwanda.</p>
            </div>
            <div class="flex items-center gap-2">
                <x-ui.button href="{{ route('events') }}" variant="outline"
                    class="rounded-full hidden sm:inline-flex">View all</x-ui.button>
                <x-ui.button href="{{ url('/register') }}" variant="primary"
                    class="rounded-full hidden sm:inline-flex">Register</x-ui.button>
            </div>
        </div>
        <div class="mt-6 timeline">
            @forelse ($upcomingEvents as $event)
                <div class="timeline-item">
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-semibold text-ink-900">{{ $event->title }}</div>
                        <span class="pill bg-sage-50 text-sage-800 border border-sage-200">{{ $event->status ?? ($event->event_date ? $event->event_date->format('M j') : 'Event') }}</span>
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
        <div class="mt-6 text-center sm:text-left">
            <x-ui.button href="{{ route('events') }}" variant="ghost" class="rounded-full">View all events
                →</x-ui.button>
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section class="mx-auto max-w-7xl px-6 pb-16">
        <div class="reveal">
            <div class="section-label">Voices from the choir</div>
            <h2 class="mt-3 font-display text-3xl font-semibold text-ink-900">Impact that sounds like family</h2>
        </div>
        <div class="mt-8 grid gap-6 md:grid-cols-2">
            <div class="soft-card p-6">
                <div class="flex items-center gap-3">
                    <div class="h-12 w-12 rounded-full bg-emerald-100"></div>
                    <div>
                        <div class="font-semibold text-ink-900">Ruth U.</div>
                        <div class="text-xs text-ink-500">Soprano • Sol-Fa graduate</div>
                    </div>
                </div>
                <p class="mt-4 text-ink-600 text-sm leading-relaxed">
                    “I joined with no background. Now I read hymns, lead choir rehearsals, and teach younger choristers.”
                </p>
            </div>
            <div class="soft-card p-6">
                <div class="flex items-center gap-3">
                    <div class="h-12 w-12 rounded-full bg-sky-100"></div>
                    <div>
                        <div class="font-semibold text-ink-900">Pastor M.</div>
                        <div class="text-xs text-ink-500">Church leader</div>
                    </div>
                </div>
                <p class="mt-4 text-ink-600 text-sm leading-relaxed">
                    “The academy lifted our worship quality. Members read music, harmonize confidently, and train others.”
                </p>
            </div>
        </div>
    </section>

    {{-- MUSIC SHOP --}}
    <section class="mx-auto max-w-7xl px-6 pb-16">
        <div class="reveal flex items-center justify-between gap-4">
            <div>
                <div class="section-label">Music Shop</div>
                <h2 class="mt-3 text-3xl font-semibold text-ink-900">Albums, hymnals, and resources</h2>
                <p class="mt-2 text-ink-600 max-w-3xl">Support the choir and get materials for your church or group.</p>
            </div>
            <a href="{{ route('songs') }}" class="btn btn-outline hidden sm:inline-flex">Browse Music</a>
        </div>
        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <div class="shop-card">
                <div class="pill bg-sage-50 text-sage-800 border border-sage-200">Album</div>
                <h3 class="mt-3 text-xl font-semibold text-ink-900">“Hymns Renewed”</h3>
                <p class="mt-2 text-sm text-ink-600">Recorded arrangements by Amazing Grace Academy choir.</p>
                <div class="mt-4 text-lg font-bold text-ink-900">10,000 RWF</div>
                <x-ui.button href="{{ route('songs') }}" variant="primary" class="mt-4 w-full">Buy Album</x-ui.button>
            </div>
            <div class="shop-card">
                <div class="pill bg-sage-50 text-sage-800 border border-sage-200">Hymnal</div>
                <h3 class="mt-3 text-xl font-semibold text-ink-900">Sol-Fa Hymnal (SATB)</h3>
                <p class="mt-2 text-sm text-ink-600">Printed hymns with clear parts for choir practice.</p>
                <div class="mt-4 text-lg font-bold text-ink-900">8,000 RWF</div>
                <x-ui.button href="{{ route('contact') }}#support" variant="glass" class="mt-4 w-full">Order
                    Copy</x-ui.button>
            </div>
            <div class="shop-card">
                <div class="pill bg-sage-50 text-sage-800 border border-sage-200">Workbook</div>
                <h3 class="mt-3 text-xl font-semibold text-ink-900">Sight-Reading Drills</h3>
                <p class="mt-2 text-sm text-ink-600">Exercises for Sol-Fa and staff notation learners.</p>
                <div class="mt-4 text-lg font-bold text-ink-900">6,000 RWF</div>
                <x-ui.button href="{{ route('programs') }}" variant="outline" class="mt-4 w-full">View
                    Details</x-ui.button>
            </div>
        </div>
    </section>

    {{-- GALLERY --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal flex items-center justify-between gap-6 flex-wrap">
            <div>
                <div class="section-label">Gallery</div>
                <h2 class="mt-3 font-display text-3xl font-semibold text-ink-900">Choir moments</h2>
                <p class="mt-2 text-ink-600 leading-relaxed">Rehearsals, concerts, and worship services.</p>
            </div>
            <x-ui.button href="{{ route('songs') }}" variant="outline" class="rounded-full hidden sm:inline-flex">See Performances</x-ui.button>
        </div>
        <div class="mt-10 grid gap-6 lg:grid-cols-3">
            <div class="reveal soft-card overflow-hidden group">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/aga_girls1.jpg') }}" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105" alt="Choir concert">
                </div>
                <div class="p-5">
                    <div class="font-display text-base font-semibold text-ink-900">Annual Concert</div>
                    <div class="text-xs text-ink-500 mt-0.5">Kigali Bilingual Church</div>
                </div>
            </div>
            <div class="reveal reveal-delay-1 soft-card overflow-hidden group">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/aga-boys1.jpg') }}" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105" alt="Choir rehearsal">
                </div>
                <div class="p-5">
                    <div class="font-display text-base font-semibold text-ink-900">Sectional Rehearsal</div>
                    <div class="text-xs text-ink-500 mt-0.5">Sabbath afternoon</div>
                </div>
            </div>
            <div class="reveal reveal-delay-2 soft-card overflow-hidden group">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/aga-boys2.jpg') }}" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105" alt="Instrument class">
                </div>
                <div class="p-5">
                    <div class="font-display text-base font-semibold text-ink-900">Instrumental Studio</div>
                    <div class="text-xs text-ink-500 mt-0.5">Piano • Guitar • Violin</div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ + SUPPORT --}}
    <section class="mx-auto max-w-7xl px-6 pb-24">
        <div class="grid gap-8 lg:grid-cols-3">
            <div class="lg:col-span-2 reveal soft-card p-8">
                <div class="section-label">FAQ</div>
                <h2 class="mt-3 font-display text-2xl font-semibold text-ink-900">Frequently asked</h2>
                <div class="mt-6 space-y-5">
                    <div class="border-b border-ink-100 pb-5">
                        <div class="text-sm font-semibold text-ink-900">Is the training really free?</div>
                        <p class="text-sm text-ink-600 mt-1 leading-relaxed">Yes. We serve the church; learners invest time and commitment.</p>
                    </div>
                    <div class="border-b border-ink-100 pb-5">
                        <div class="text-sm font-semibold text-ink-900">Do I need prior music knowledge?</div>
                        <p class="text-sm text-ink-600 mt-1 leading-relaxed">No. We start from zero, including those who cannot read notation.</p>
                    </div>
                    <div class="pb-2">
                        <div class="text-sm font-semibold text-ink-900">Can churches invite the academy?</div>
                        <p class="text-sm text-ink-600 mt-1 leading-relaxed">Yes. We support evangelism programs, concerts, and choir training.</p>
                    </div>
                </div>
            </div>
            <div class="reveal reveal-delay-1 soft-card p-8 bg-gradient-to-br from-sage-50/80 via-cream-50 to-gold-50/50 border border-sage-200/80">
                <div class="section-label">Support the ministry</div>
                <h3 class="mt-3 font-display text-xl font-semibold text-ink-900">Sponsor instruments & recordings</h3>
                <p class="mt-2 text-sm text-ink-600 leading-relaxed">
                    Contributions: <span class="font-semibold text-sage-700">Schimei IRATWUMVA</span> (Code 726096).
                </p>
                <ul class="mt-4 list-check space-y-2">
                    <li><span class="dot"></span><span>Fund guitars, violins, and keyboards</span></li>
                    <li><span class="dot"></span><span>Recording and teaching resources</span></li>
                </ul>
                <x-ui.button href="{{ route('contact') }}#support" variant="primary" class="mt-6 w-full rounded-xl">Support Amazing Grace Academy</x-ui.button>
            </div>
        </div>
    </section>

    {{-- CHOIR FEEL / MINISTRY STRIP --}}
    <section class="border-y border-ink-100 bg-cream-200/50 py-12">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-8 px-6 text-center md:flex-row md:text-left">
            <div class="reveal space-y-2">
                <div class="text-xs font-semibold uppercase tracking-[0.2em] text-sage-700">
                    Voices United in Praise
                </div>
                <p class="text-sm text-ink-700 max-w-2xl leading-relaxed font-sans">
                    Training choirs and individuals to read music, sing in harmony, and serve God with disciplined, beautiful worship.
                </p>
            </div>
            <div class="reveal flex flex-wrap justify-center gap-3 text-xs text-ink-700">
                <span class="pill bg-white/90 border border-sage-200/80 text-sage-800 font-medium">300+ choristers impacted</span>
                <span class="pill bg-white/90 border border-sage-200/80 text-sage-800 font-medium">4+ albums & programs</span>
                <span class="pill bg-white/90 border border-sage-200/80 text-sage-800 font-medium">Ministry across Rwanda</span>
            </div>
        </div>
    </section>
@endsection
