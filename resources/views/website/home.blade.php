@extends('layouts.website')

@section('title', 'Amazing Grace Academy — Home')

@section('content')
    {{-- HERO --}}
    <section class="mx-auto max-w-7xl px-6 pt-16 pb-14">
        <div class="relative overflow-hidden rounded-[28px] border border-slate-200 bg-white shadow-[0_14px_40px_rgba(15,23,42,0.08)]">
            <div class="grid items-center gap-8 lg:grid-cols-2 px-6 py-10 sm:px-10 lg:px-12">
                <div class="reveal space-y-6">
                    <div class="inline-flex items-center gap-2 rounded-full border border-emerald-100 bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">
                        Sacred music academy • Since 2016
                    </div>

                    <h1 class="text-4xl sm:text-5xl font-bold tracking-tight text-slate-900 leading-tight">
                        Read, sing, and serve with confidence.
                    </h1>
                    <p class="text-lg text-slate-600 max-w-2xl">
                        Sol-Fa, staff notation, and instruments for worshippers in the Seventh-day Adventist Church.
                    </p>

                    <div class="flex flex-wrap gap-2 text-sm text-slate-700">
                        <span class="rounded-full border border-slate-200 px-3 py-1">Sol-Fa & staff literacy</span>
                        <span class="rounded-full border border-slate-200 px-3 py-1">Choir leadership</span>
                        <span class="rounded-full border border-slate-200 px-3 py-1">Piano • Guitar • Violin</span>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <x-ui.button href="{{ url('/register') }}" variant="primary">Join class</x-ui.button>
                        <x-ui.button href="{{ route('songs') }}" variant="outline">Shop music</x-ui.button>
                    </div>

                    <div class="flex gap-4 text-sm text-slate-600">
                        <div>
                            <div class="text-xl font-semibold text-slate-900">700+</div>
                            <div>Learners trained</div>
                        </div>
                        <div>
                            <div class="text-xl font-semibold text-slate-900">168</div>
                            <div>Sol-Fa graduates</div>
                        </div>
                        <div>
                            <div class="text-xl font-semibold text-slate-900">Rwanda</div>
                            <div>Ministry reach</div>
                        </div>
                    </div>
                </div>

                <div class="reveal relative">
                    <div class="relative rounded-[24px] overflow-hidden bg-slate-900 text-white shadow-xl border border-slate-800"
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
                                <img x-show="index === i"
                                    x-transition:enter="transition duration-700 ease-out"
                                    x-transition:enter-start="opacity-0 scale-105 translate-x-4"
                                    x-transition:enter-end="opacity-100 scale-100 translate-x-0"
                                    x-transition:leave="transition duration-600 ease-in"
                                    x-transition:leave-start="opacity-100 scale-100 translate-x-0"
                                    x-transition:leave-end="opacity-0 scale-95 -translate-x-4"
                                    :src="slide.src" alt=""
                                    class="absolute inset-0 h-full w-full object-cover will-change-transform">
                            </template>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>

                            <div class="absolute left-4 top-4 flex items-center gap-2 rounded-full bg-white/90 px-4 py-2 text-xs font-semibold text-emerald-700 shadow">
                                <span x-text="slides[index].label"></span>
                            </div>

                            <div class="absolute bottom-4 left-4 rounded-xl bg-white/90 px-4 py-3 shadow-lg border border-emerald-100 text-slate-900">
                                <div class="text-[11px] text-slate-500">Next cohort</div>
                                <div class="flex items-center gap-3 mt-1">
                                    <div class="text-base font-bold text-emerald-700">Class of 2026</div>
                                    <span class="text-xs text-slate-500">Register now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- QUICK LINKS SECTION --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal grid gap-4 md:grid-cols-3">
            <div class="soft-card p-8">
                <div class="text-xs font-semibold uppercase tracking-wide text-slate-700">Programs</div>
                <div class="mt-2 text-sm text-slate-600">
                    Sol-Fa, Staff Notation, and instruments designed for worship ministry.
                </div>
                <x-ui.button href="{{ route('programs') }}" variant="primary" class="mt-6 w-full">
                    View Programs
                </x-ui.button>
            </div>

            <div class="soft-card p-8">
                <div class="text-xs font-semibold uppercase tracking-wide text-slate-700">Our Music</div>
                <div class="mt-2 text-sm text-slate-600">
                    Hymns, arrangements, and teaching resources from the academy choir.
                </div>
                <x-ui.button href="{{ route('songs') }}" variant="outline" class="mt-6 w-full">
                    Explore Songs
                </x-ui.button>
            </div>

            <div class="soft-card p-8">
                <div class="text-xs font-semibold uppercase tracking-wide text-slate-700">Support</div>
                <div class="mt-2 text-sm text-slate-600">
                    Help us grow instruments, recordings, and opportunities for learners.
                </div>
                <x-ui.button href="{{ route('contact') }}#support" variant="ghost" class="mt-6 w-full">
                    Support the Academy
                </x-ui.button>
            </div>
        </div>
    </section>

    {{-- SERVICES SNAPSHOT --}}
    <section class="mx-auto max-w-7xl px-6 pb-16">
        <div class="reveal flex items-center justify-between gap-4">
            <div>
                <div class="section-label">Gentle Training for Worshippers</div>
                <h2 class="mt-3 text-3xl font-semibold text-slate-900">Skills that build harmony</h2>
                <p class="mt-2 text-slate-600 max-w-2xl">
                    Practical programs designed for singers, choir leaders, and instrumentalists who want to serve with
                    excellence.
                </p>
            </div>
            <a href="{{ route('programs') }}" class="btn btn-outline hidden sm:inline-flex">Explore Programs</a>
        </div>

        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <div class="soft-card overflow-hidden">
                <img src="{{ asset('images/Peterson_Studios(1).jpg') }}" alt="Sol-Fa class photo"
                    class="h-48 w-full object-cover">
                <div class="p-6 space-y-3">
                    <div class="pill-green">Sol-Fa Foundation</div>
                    <h3 class="text-xl font-semibold text-slate-900">Hymnal Notation & Choir Parts</h3>
                    <p class="text-sm text-slate-600">Learn to read and sing SATB parts correctly using church hymnals.</p>
                    <div class="flex gap-2">
                        <span class="pill bg-slate-50 text-slate-800 border border-slate-200">Sight-reading</span>
                        <span class="pill bg-slate-50 text-slate-800 border border-slate-200">Rhythm</span>
                    </div>
                </div>
            </div>

            <div class="soft-card overflow-hidden">
                <img src="{{ asset('images/Peterson_Studios(1).jpg') }}" alt="Staff notation session"
                    class="h-48 w-full object-cover">
                <div class="p-6 space-y-3">
                    <div class="pill-green">Staff Notation</div>
                    <h3 class="text-xl font-semibold text-slate-900">International Music Literacy</h3>
                    <p class="text-sm text-slate-600">Advance to international notation for choir, solo, and instrumental
                        work.</p>
                    <div class="flex gap-2">
                        <span class="pill bg-slate-50 text-slate-800 border border-slate-200">Interpretation</span>
                        <span class="pill bg-slate-50 text-slate-800 border border-slate-200">Analysis</span>
                    </div>
                </div>
            </div>

            <div class="soft-card overflow-hidden">
                <img src="{{ asset('images/Peterson_Studios(1).jpg') }}" alt="Instrument practice"
                    class="h-48 w-full object-cover">
                <div class="p-6 space-y-3">
                    <div class="pill-green">Instrumental Studio</div>
                    <h3 class="text-xl font-semibold text-slate-900">Piano, Guitar & Violin</h3>
                    <p class="text-sm text-slate-600">Apply music reading to instruments and worship performance.</p>
                    <div class="flex gap-2">
                        <span class="pill bg-slate-50 text-slate-800 border border-slate-200">Technique</span>
                        <span class="pill bg-slate-50 text-slate-800 border border-slate-200">Ensemble</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ROADMAP --}}
    <section class="mx-auto max-w-7xl px-6 pb-16">
        <div class="reveal">
            <div class="section-label">Learning Path</div>
            <h2 class="mt-3 text-3xl font-semibold text-slate-900">From first note to ministry</h2>
            <p class="mt-2 text-slate-600 max-w-3xl">A clear, paced journey with milestones and expected outcomes.</p>
        </div>

        <div class="mt-8 grid gap-4 md:grid-cols-3">
            <div class="soft-card p-5">
                <div class="flex items-center justify-between text-xs text-emerald-600 font-semibold">
                    <span>Step 1</span><span>6-8 weeks</span>
                </div>
                <h3 class="mt-2 text-lg font-semibold text-slate-900">Sol-Fa Foundations</h3>
                <ul class="mt-3 list-check">
                    <li><span class="dot"></span><span>Read SATB hymns accurately</span></li>
                    <li><span class="dot"></span><span>Rhythm, breathing, blend</span></li>
                </ul>
            </div>
            <div class="soft-card p-5">
                <div class="flex items-center justify-between text-xs text-sky-600 font-semibold">
                    <span>Step 2</span><span>8-10 weeks</span>
                </div>
                <h3 class="mt-2 text-lg font-semibold text-slate-900">Staff Notation</h3>
                <ul class="mt-3 list-check">
                    <li><span class="dot"></span><span>International notation literacy</span></li>
                    <li><span class="dot"></span><span>Sight-reading & analysis</span></li>
                </ul>
            </div>
            <div class="soft-card p-5">
                <div class="flex items-center justify-between text-xs text-purple-600 font-semibold">
                    <span>Step 3</span><span>Ongoing</span>
                </div>
                <h3 class="mt-2 text-lg font-semibold text-slate-900">Instruments & Ministry</h3>
                <ul class="mt-3 list-check">
                    <li><span class="dot"></span><span>Piano, Guitar, Violin studio</span></li>
                    <li><span class="dot"></span><span>Performance & worship leading</span></li>
                </ul>
            </div>
        </div>
    </section>

    {{-- EVENTS / COHORTS --}}
    <section class="mx-auto max-w-7xl px-6 pb-16">
        <div class="reveal flex items-center justify-between gap-4">
            <div>
                <div class="section-label">Upcoming</div>
                <h2 class="mt-3 text-3xl font-semibold text-slate-900">Cohorts & events</h2>
                <p class="mt-2 text-slate-600 max-w-2xl">Join the next intake or worship events across Rwanda.</p>
            </div>
            <a href="{{ route('contact') }}#join" class="btn btn-primary hidden sm:inline-flex">Register</a>
        </div>
        <div class="mt-6 timeline">
            <div class="timeline-item">
                <div class="flex items-center justify-between">
                    <div class="text-sm font-semibold text-slate-900">Class of 2026 Intake</div>
                    <span class="pill bg-slate-100 text-slate-800 border border-slate-200">Open</span>
                </div>
                <p class="mt-1 text-sm text-slate-600">Saturdays • Kigali Bilingual Church • Sol-Fa level starts.</p>
            </div>
            <div class="timeline-item">
                <div class="flex items-center justify-between">
                    <div class="text-sm font-semibold text-slate-900">Hymns Unveiled Live</div>
                    <span class="pill bg-slate-100 text-slate-800 border border-slate-200">February</span>
                </div>
                <p class="mt-1 text-sm text-slate-600">Teaching program recording • open choir participation.</p>
            </div>
            <div class="timeline-item">
                <div class="flex items-center justify-between">
                    <div class="text-sm font-semibold text-slate-900">Annual Choir Concert</div>
                    <span class="pill bg-slate-100 text-slate-800 border border-slate-200">June</span>
                </div>
                <p class="mt-1 text-sm text-slate-600">Showcasing graduates, choirs, and instrumental ensembles.</p>
            </div>
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section class="mx-auto max-w-7xl px-6 pb-16">
        <div class="reveal">
            <div class="section-label">Voices from the choir</div>
            <h2 class="mt-3 text-3xl font-semibold text-slate-900">Impact that sounds like family</h2>
        </div>
        <div class="mt-8 grid gap-6 md:grid-cols-2">
            <div class="soft-card p-6">
                <div class="flex items-center gap-3">
                    <div class="h-12 w-12 rounded-full bg-emerald-100"></div>
                    <div>
                        <div class="font-semibold text-slate-900">Ruth U.</div>
                        <div class="text-xs text-slate-500">Soprano • Sol-Fa graduate</div>
                    </div>
                </div>
                <p class="mt-4 text-slate-600 text-sm leading-relaxed">
                    “I joined with no background. Now I read hymns, lead choir rehearsals, and teach younger choristers.”
                </p>
            </div>
            <div class="soft-card p-6">
                <div class="flex items-center gap-3">
                    <div class="h-12 w-12 rounded-full bg-sky-100"></div>
                    <div>
                        <div class="font-semibold text-slate-900">Pastor M.</div>
                        <div class="text-xs text-slate-500">Church leader</div>
                    </div>
                </div>
                <p class="mt-4 text-slate-600 text-sm leading-relaxed">
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
                <h2 class="mt-3 text-3xl font-semibold text-slate-900">Albums, hymnals, and resources</h2>
                <p class="mt-2 text-slate-600 max-w-3xl">Support the choir and get materials for your church or group.</p>
            </div>
            <a href="{{ route('songs') }}" class="btn btn-outline hidden sm:inline-flex">Browse Music</a>
        </div>
        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <div class="shop-card">
                <div class="pill bg-slate-50 text-slate-800 border border-slate-200">Album</div>
                <h3 class="mt-3 text-xl font-semibold text-slate-900">“Hymns Renewed”</h3>
                <p class="mt-2 text-sm text-slate-600">Recorded arrangements by Amazing Grace Academy choir.</p>
                <div class="mt-4 text-lg font-bold text-slate-900">10,000 RWF</div>
                <x-ui.button href="{{ route('songs') }}" variant="primary" class="mt-4 w-full">Buy Album</x-ui.button>
            </div>
            <div class="shop-card">
                <div class="pill bg-slate-50 text-slate-800 border border-slate-200">Hymnal</div>
                <h3 class="mt-3 text-xl font-semibold text-slate-900">Sol-Fa Hymnal (SATB)</h3>
                <p class="mt-2 text-sm text-slate-600">Printed hymns with clear parts for choir practice.</p>
                <div class="mt-4 text-lg font-bold text-slate-900">8,000 RWF</div>
                <x-ui.button href="{{ route('contact') }}#support" variant="glass" class="mt-4 w-full">Order
                    Copy</x-ui.button>
            </div>
            <div class="shop-card">
                <div class="pill bg-slate-50 text-slate-800 border border-slate-200">Workbook</div>
                <h3 class="mt-3 text-xl font-semibold text-slate-900">Sight-Reading Drills</h3>
                <p class="mt-2 text-sm text-slate-600">Exercises for Sol-Fa and staff notation learners.</p>
                <div class="mt-4 text-lg font-bold text-slate-900">6,000 RWF</div>
                <x-ui.button href="{{ route('programs') }}" variant="outline" class="mt-4 w-full">View
                    Details</x-ui.button>
            </div>
        </div>
    </section>

    {{-- GALLERY --}}
    <section class="mx-auto max-w-7xl px-6 pb-16">
        <div class="reveal flex items-center justify-between gap-4">
            <div>
                <div class="section-label">Gallery</div>
                <h2 class="mt-3 text-3xl font-semibold text-slate-900">Choir moments</h2>
                <p class="mt-2 text-slate-600">Rehearsals, concerts, and worship services.</p>
            </div>
            <a href="{{ route('songs') }}" class="btn btn-outline hidden sm:inline-flex">See Performances</a>
        </div>
        <div class="mt-8 grid gap-4 lg:grid-cols-3">
            <div class="soft-card overflow-hidden">
                <img src="{{ asset('images/Peterson_Studios(1).jpg') }}" class="w-full h-64 object-cover"
                    alt="Choir concert">
                <div class="p-4">
                    <div class="text-sm font-semibold text-slate-900">Annual Concert</div>
                    <div class="text-xs text-slate-500">Kigali Bilingual Church</div>
                </div>
            </div>
            <div class="soft-card overflow-hidden">
                <img src="{{ asset('images/Peterson_Studios(1).jpg') }}" class="w-full h-64 object-cover"
                    alt="Choir rehearsal">
                <div class="p-4">
                    <div class="text-sm font-semibold text-slate-900">Sectional Rehearsal</div>
                    <div class="text-xs text-slate-500">Sabbath afternoon</div>
                </div>
            </div>
            <div class="soft-card overflow-hidden">
                <img src="{{ asset('images/Peterson_Studios(1).jpg') }}" class="w-full h-64 object-cover"
                    alt="Instrument class">
                <div class="p-4">
                    <div class="text-sm font-semibold text-slate-900">Instrumental Studio</div>
                    <div class="text-xs text-slate-500">Piano • Guitar • Violin</div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ + SUPPORT --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="grid gap-8 lg:grid-cols-3">
            <div class="lg:col-span-2 soft-card p-8">
                <div class="section-label">FAQ</div>
                <h2 class="mt-3 text-2xl font-semibold text-slate-900">Frequently asked</h2>
                <div class="mt-6 space-y-4">
                    <div class="border-b border-slate-200 pb-4">
                        <div class="text-sm font-semibold text-slate-900">Is the training really free?</div>
                        <p class="text-sm text-slate-600 mt-1">Yes. We serve the church; learners invest time and
                            commitment.</p>
                    </div>
                    <div class="border-b border-slate-200 pb-4">
                        <div class="text-sm font-semibold text-slate-900">Do I need prior music knowledge?</div>
                        <p class="text-sm text-slate-600 mt-1">No. We start from zero, including those who cannot read
                            notation.</p>
                    </div>
                    <div class="border-b border-slate-200 pb-4">
                        <div class="text-sm font-semibold text-slate-900">Can churches invite the academy?</div>
                        <p class="text-sm text-slate-600 mt-1">Yes. We support evangelism programs, concerts, and choir
                            training.</p>
                    </div>
                </div>
            </div>
            <div class="soft-card p-8 bg-gradient-to-br from-emerald-50 via-sky-50 to-purple-50 border border-emerald-100">
                <div class="section-label">Support the ministry</div>
                <h3 class="mt-3 text-xl font-semibold text-slate-900">Sponsor instruments & recordings</h3>
                <p class="mt-2 text-sm text-slate-600">
                    Contributions: <span class="font-semibold">Schimei IRATWUMVA</span> (Code 726096).
                </p>
                <div class="mt-4 space-y-2 text-sm text-slate-600">
                    <div class="flex items-center gap-2">
                        <span class="dot"></span><span>Fund guitars, violins, and keyboards</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="dot"></span><span>Recording and teaching resources</span>
                    </div>
                </div>
                <x-ui.button href="{{ route('contact') }}#support" variant="primary" class="mt-6 w-full">
                    Support Amazing Grace Academy
                </x-ui.button>
            </div>
        </div>
    </section>

    {{-- CHOIR FEEL / MINISTRY STRIP --}}
    <section class="border-y border-slate-200 bg-slate-50 py-10">
        <div
            class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 px-6 text-center md:flex-row md:text-left">
            <div class="reveal space-y-1">
                <div class="text-xs font-semibold uppercase tracking-[0.2em] text-emerald-700">
                    Voices United in Praise
                </div>
                <p class="text-sm text-slate-700 max-w-2xl">
                    Training choirs and individuals to read music, sing in harmony, and serve God with disciplined,
                    beautiful worship.
                </p>
            </div>
            <div class="reveal flex flex-wrap justify-center gap-3 text-xs text-slate-700">
                <div class="pill bg-white border border-slate-200 text-slate-800">
                    300+ choristers impacted
                </div>
                <div class="pill bg-white border border-slate-200 text-slate-800">
                    4+ albums & programs
                </div>
                <div class="pill bg-white border border-slate-200 text-slate-800">
                    Ministry across Rwanda
                </div>
            </div>
        </div>
    </section>
@endsection
