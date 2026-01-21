@extends('layouts.website')

@section('title', 'Music Shop — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-20 pb-16">
        <div class="page-hero px-6 py-10 sm:px-10 lg:px-12">
            <div class="grid items-center gap-10 lg:grid-cols-[1.1fr_0.9fr]">
                <div class="reveal space-y-4">
                    <div class="flex flex-wrap items-center gap-3 text-sm text-teal-700">
                        <span class="pill bg-white border border-teal-100 text-teal-700 shadow-sm">
                            Music Shop
                        </span>
                        <span class="pill bg-white border border-amber-100 text-amber-700 shadow-sm">
                            Albums • Hymnals • Bundles
                        </span>
                    </div>

                    <div class="space-y-3">
                        <h1 class="text-4xl sm:text-5xl font-semibold tracking-tight text-slate-900">
                            Equip your choir and support the mission.
                        </h1>
                        <p class="text-lg leading-relaxed text-slate-600 max-w-2xl">
                            Buy albums with beautiful covers, Sol-Fa hymnals, sight‑reading workbooks, and church bundles that fund new instruments.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-3 text-sm text-slate-600">
                        <span class="pill bg-white border border-teal-100 text-teal-700">Digital & Physical</span>
                        <span class="pill bg-white border border-amber-100 text-amber-700">Instant downloads</span>
                        <span class="pill bg-white border border-slate-200 text-slate-700">Local pickup</span>
                    </div>
                </div>

                <div class="reveal relative">
                    <div class="absolute -inset-5 rounded-[32px] bg-gradient-to-r from-emerald-200/35 via-teal-200/25 to-amber-200/35 blur-2xl"></div>
                    <div class="relative rounded-[28px] overflow-hidden bg-white shadow-[0_18px_50px_rgba(15,23,42,0.14)] border border-emerald-100">
                        <div class="aspect-[4/5] relative">
                            <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?auto=format&fit=crop&w=900&q=80" alt="Featured album" class="h-full w-full object-cover">
                            <div class="absolute left-4 top-4 flex items-center gap-2 rounded-full bg-white/90 px-4 py-2 text-xs font-semibold text-teal-700 shadow">
                                Featured Album • “Hymns Renewed”
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 grid gap-3 sm:grid-cols-2">
                                <div class="rounded-2xl bg-white/90 px-4 py-3 shadow-lg border border-emerald-100">
                                    <div class="text-[11px] text-slate-500">Format</div>
                                    <div class="flex items-center justify-between text-sm text-slate-700 mt-1">
                                        <span class="font-semibold text-emerald-700">MP3 + PDF</span>
                                        <span class="text-slate-500">10,000 RWF</span>
                                    </div>
                                </div>
                                <div class="rounded-2xl bg-emerald-700 text-white px-4 py-3 shadow-lg">
                                    <div class="text-xs">Supports instruments fund</div>
                                    <div class="text-base font-semibold">Every purchase</div>
                                    <div class="text-[11px] text-emerald-100">Helps buy guitars & violins</div>
                                </div>
                            </div>
                            <div class="absolute -right-3 top-10 rounded-full bg-white shadow-lg border border-teal-100">
                                <div class="flex items-center gap-2 px-4 py-2 text-xs font-semibold text-teal-700">
                                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                    In stock
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SHOP GRID --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal flex flex-wrap items-center justify-between gap-4 mb-6">
            <div class="flex flex-wrap gap-2 text-sm text-slate-600">
                <span class="pill bg-white border border-slate-200 text-slate-700">All</span>
                <span class="pill bg-white border border-slate-200 text-slate-700">Albums</span>
                <span class="pill bg-white border border-slate-200 text-slate-700">Hymnals</span>
                <span class="pill bg-white border border-slate-200 text-slate-700">Workbooks</span>
                <span class="pill bg-white border border-slate-200 text-slate-700">Bundles</span>
            </div>
            <div class="text-sm text-slate-500">Instant downloads • Local pickup in Kigali</div>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            {{-- PRODUCT --}}
            <div class="shop-card reveal">
                <img src="https://images.unsplash.com/photo-1483412033650-1015ddeb83d1?auto=format&fit=crop&w=900&q=80" class="w-full h-52 rounded-2xl object-cover mb-4" alt="Album cover">
                <div class="text-xs font-semibold text-emerald-700">Album</div>
                <h2 class="mt-2 text-xl font-semibold text-slate-900">“Hymns Renewed”</h2>
                <p class="mt-2 text-sm text-slate-600">
                    Recorded arrangements by Amazing Grace Academy choir with warm harmonies.
                </p>
                <div class="mt-4 flex items-center justify-between text-sm text-slate-600">
                    <span class="font-bold text-slate-900 text-lg">10,000 RWF</span>
                    <span>MP3 + PDF booklet</span>
                </div>
                <div class="mt-4 flex gap-2">
                    <x-ui.button variant="primary" class="w-full bg-emerald-700 hover:bg-emerald-600">Buy Album</x-ui.button>
                    <x-ui.button variant="glass" class="w-full">Preview</x-ui.button>
                </div>
            </div>

            {{-- PRODUCT --}}
            <div class="shop-card reveal">
                <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?auto=format&fit=crop&w=900&q=80" class="w-full h-52 rounded-2xl object-cover mb-4" alt="Hymnal cover">
                <div class="text-xs font-semibold text-emerald-700">Hymnal</div>
                <h2 class="mt-2 text-xl font-semibold text-slate-900">Sol-Fa Hymnal (SATB)</h2>
                <p class="mt-2 text-sm text-slate-600">
                    Printed hymns with clear parts for choir practice plus digital download.
                </p>
                <div class="mt-4 flex items-center justify-between text-sm text-slate-600">
                    <span class="font-bold text-slate-900 text-lg">8,000 RWF</span>
                    <span>Print + PDF</span>
                </div>
                <div class="mt-4 flex gap-2">
                    <x-ui.button variant="primary" class="w-full bg-emerald-700 hover:bg-emerald-600">Order Copy</x-ui.button>
                    <x-ui.button variant="outline" class="w-full">Details</x-ui.button>
                </div>
            </div>

            {{-- PRODUCT --}}
            <div class="shop-card reveal">
                <img src="https://images.unsplash.com/photo-1513863323964-24ae1b9b0909?auto=format&fit=crop&w=900&q=80" class="w-full h-52 rounded-2xl object-cover mb-4" alt="Workbook cover">
                <div class="text-xs font-semibold text-emerald-700">Workbook</div>
                <h2 class="mt-2 text-xl font-semibold text-slate-900">Sight-Reading Drills</h2>
                <p class="mt-2 text-sm text-slate-600">
                    Exercises for Sol-Fa and staff notation learners with matching audio.
                </p>
                <div class="mt-4 flex items-center justify-between text-sm text-slate-600">
                    <span class="font-bold text-slate-900 text-lg">6,000 RWF</span>
                    <span>PDF + Audio</span>
                </div>
                <div class="mt-4 flex gap-2">
                    <x-ui.button variant="primary" class="w-full bg-emerald-700 hover:bg-emerald-600">Buy Workbook</x-ui.button>
                    <x-ui.button variant="glass" class="w-full">Preview</x-ui.button>
                </div>
            </div>

            {{-- PRODUCT --}}
            <div class="shop-card reveal">
                <img src="https://images.unsplash.com/photo-1483412033650-1015ddeb83d1?auto=format&fit=crop&w=900&q=80" class="w-full h-52 rounded-2xl object-cover mb-4" alt="Album cover">
                <div class="text-xs font-semibold text-emerald-700">Album</div>
                <h2 class="mt-2 text-xl font-semibold text-slate-900">“Voices of Grace”</h2>
                <p class="mt-2 text-sm text-slate-600">
                    Live choir recordings from concerts and ministry trips.
                </p>
                <div class="mt-4 flex items-center justify-between text-sm text-slate-600">
                    <span class="font-bold text-slate-900 text-lg">12,000 RWF</span>
                    <span>MP3 + Lyric PDF</span>
                </div>
                <div class="mt-4 flex gap-2">
                    <x-ui.button variant="primary" class="w-full bg-emerald-700 hover:bg-emerald-600">Buy Album</x-ui.button>
                    <x-ui.button variant="glass" class="w-full">Preview</x-ui.button>
                </div>
            </div>

            {{-- PRODUCT --}}
            <div class="shop-card reveal">
                <img src="https://images.unsplash.com/photo-1470229538611-16ba8c7ffbd7?auto=format&fit=crop&w=900&q=80" class="w-full h-52 rounded-2xl object-cover mb-4" alt="Bundle cover">
                <div class="text-xs font-semibold text-emerald-700">Bundle</div>
                <h2 class="mt-2 text-xl font-semibold text-slate-900">Choir Starter Pack</h2>
                <p class="mt-2 text-sm text-slate-600">
                    1 album + 3 hymnals + workbook to launch a new choir section.
                </p>
                <div class="mt-4 flex items-center justify-between text-sm text-slate-600">
                    <span class="font-bold text-slate-900 text-lg">20,000 RWF</span>
                    <span>Best value</span>
                </div>
                <div class="mt-4 flex gap-2">
                    <x-ui.button variant="primary" class="w-full bg-emerald-700 hover:bg-emerald-600">Add Bundle</x-ui.button>
                    <x-ui.button variant="outline" class="w-full">Details</x-ui.button>
                </div>
            </div>

        </div>
    </section>

    {{-- BUNDLES / FEATURED --}}
    <section class="bg-gradient-to-r from-teal-50 via-white to-amber-50 py-20">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between reveal">
                <div>
                    <p class="text-sm font-semibold text-emerald-700">Bundle offers</p>
                    <h2 class="text-3xl font-semibold text-slate-900">
                        Equip choirs and churches
                    </h2>
                    <p class="mt-2 text-slate-600">Bundle options for choir leaders, youth groups, and worship teams.</p>
                </div>
                <div class="flex gap-3 text-sm text-slate-600">
                    <span class="pill bg-white border border-slate-200 text-slate-700">Best value</span>
                    <span class="pill bg-white border border-slate-200 text-slate-700">Delivered</span>
                </div>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-2">

                <div class="soft-card p-8 bg-white reveal hover:shadow-[0_22px_50px_rgba(15,23,42,0.12)] transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xs font-semibold text-emerald-700">Church Pack</span>
                            <h3 class="mt-2 text-xl font-semibold text-slate-900">
                                Hymns Renewed + Hymnal Set
                            </h3>
                        </div>
                        <div class="text-lg font-bold text-slate-900">22,000 RWF</div>
                    </div>
                    <p class="mt-3 text-slate-600">
                        Album plus 5 Sol-Fa hymnals for choir leaders and sections.
                    </p>
                    <div class="mt-4 flex gap-2">
                        <x-ui.button variant="primary" class="w-full bg-emerald-700 hover:bg-emerald-600">Add Bundle</x-ui.button>
                        <x-ui.button variant="glass" class="w-full">Details</x-ui.button>
                    </div>
                </div>

                <div class="soft-card p-8 bg-white reveal hover:shadow-[0_22px_50px_rgba(15,23,42,0.12)] transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xs font-semibold text-emerald-700">Learner Pack</span>
                            <h3 class="mt-2 text-xl font-semibold text-slate-900">
                                Workbook + Audio Drills
                            </h3>
                        </div>
                        <div class="text-lg font-bold text-slate-900">9,500 RWF</div>
                    </div>
                    <p class="mt-3 text-slate-600">
                        Sight-reading drills with downloadable audio tracks for practice.
                    </p>
                    <div class="mt-4 flex gap-2">
                        <x-ui.button variant="primary" class="w-full bg-emerald-700 hover:bg-emerald-600">Add Bundle</x-ui.button>
                        <x-ui.button variant="glass" class="w-full">Preview Audio</x-ui.button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="mx-auto max-w-7xl px-6 py-20">
        <div class="soft-card p-10 text-center reveal">
            <div class="pill bg-white border border-emerald-100 text-emerald-700 inline-flex">
                Need something special?
            </div>
            <h2 class="mt-4 text-2xl font-semibold text-slate-900">
                Bulk hymnals or custom arrangements
            </h2>

            <p class="mt-4 text-slate-600 leading-relaxed max-w-2xl mx-auto">
                Reach out for church orders, bulk hymnals, or a special choir arrangement tailored to your program.
            </p>
            <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center">
                <x-ui.button href="{{ route('contact') }}#support" variant="primary" class="w-full sm:w-auto bg-emerald-700 hover:bg-emerald-600">
                    Contact Music Shop
                </x-ui.button>
                <x-ui.button href="{{ route('contact') }}" variant="outline" class="w-full sm:w-auto">
                    Talk to a lead
                </x-ui.button>
            </div>
        </div>
    </section>
@endsection
