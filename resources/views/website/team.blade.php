@extends('layouts.website')

@section('title', 'Team Leadership - Amazing Grace Academy')

@section('content')
    @php
        $teamSections = [
            [
                'title' => 'Core Leadership',
                'description' => 'Nominating committee structure elected on December 28, 2025.',
                'teams' => [
                    [
                        'name' => 'Chairman',
                        'members' => [['role' => 'Chairman', 'name' => 'Ephrem TUGANIMANA']],
                    ],
                    [
                        'name' => 'AGA Head',
                        'members' => [
                            ['role' => 'HoD', 'name' => 'Thomas NIYITEGEKA'],
                            ['role' => 'Deputy HoD', 'name' => 'Elizaphan TUYIZERE'],
                        ],
                    ],
                    [
                        'name' => 'Secretariat',
                        'members' => [
                            ['role' => 'Secretary', 'name' => 'Frank NIYONIZERA'],
                            ['role' => 'Deputy Secretary', 'name' => 'Dinah YANKURIJE'],
                        ],
                    ],
                    [
                        'name' => 'Treasury',
                        'members' => [
                            ['role' => 'Treasurer', 'name' => 'IRAKIZA Umutoniwase Jeovanie'],
                            ['role' => 'Deputy Treasurer', 'name' => 'Miriam DUSHIMIMANA'],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Departments & Teams',
                'description' => 'Operational and ministry teams serving worship, communication, and growth.',
                'teams' => [
                    [
                        'name' => 'AGA Choral Department',
                        'members' => [
                            ['role' => 'President', 'name' => 'NIZIGIYIMANA Fiston DM'],
                            ['role' => 'Vice President', 'name' => 'Gloria UWIMBABAZI'],
                        ],
                    ],
                    [
                        'name' => 'Coach',
                        'members' => [
                            ['role' => 'Coach', 'name' => 'Enoch NDAYISHIMYE'],
                            ['role' => 'Assistant Coach', 'name' => 'Peace Robert ISHIMWE'],
                            ['role' => 'Assistant Coach', 'name' => 'Schimei IRATWUMVA'],
                        ],
                    ],
                    [
                        'name' => 'AGA Development',
                        'members' => [
                            ['role' => 'Leader', 'name' => 'NDATIMANA Emmanuel'],
                            ['role' => 'Assistant Leader', 'name' => 'Simeon NIYOYITA'],
                        ],
                    ],
                    [
                        'name' => 'Discipline & Spiritualism',
                        'members' => [
                            ['role' => 'Leader', 'name' => 'Isaac HITIMANA'],
                            ['role' => 'Assistant Leader', 'name' => 'Francine UWIMBABAZI'],
                            ['role' => 'Assistant Leader', 'name' => 'Telesphore UWABERA'],
                        ],
                    ],
                    [
                        'name' => 'Fellowship',
                        'members' => [
                            ['role' => 'Leader', 'name' => 'UWUMUTIMA DM Heureuse'],
                            ['role' => 'Assistant Leader', 'name' => 'MWONGEREZA Bernice'],
                            ['role' => 'Assistant Leader', 'name' => 'Keren ISHIMWE'],
                        ],
                    ],
                    [
                        'name' => 'Communication',
                        'members' => [
                            ['role' => 'Leader', 'name' => 'NDANYUZWE CYIZA Alexandre'],
                            ['role' => 'Assistant Leader', 'name' => 'Dewelly Daniella MUTIMUTUJE'],
                        ],
                    ],
                    [
                        'name' => 'Social Media',
                        'members' => [
                            ['role' => 'Manager', 'name' => 'Ibrahim UFITIMANA'],
                            ['role' => 'Assistant', 'name' => 'Samuel NIYOMUHOZA'],
                        ],
                    ],
                    [
                        'name' => 'Fashion',
                        'members' => [
                            ['role' => 'Coordinator', 'name' => 'Samuel NIYIBIZI'],
                            ['role' => 'Coordinator', 'name' => 'Vivine IMANZI'],
                        ],
                    ],
                    [
                        'name' => 'AGA Worship Department',
                        'members' => [
                            ['role' => 'Coordinator', 'name' => 'Claudine NIYIGENA'],
                            ['role' => 'Deputy Coordinator', 'name' => 'TUYIZERE Elizaphan'],
                        ],
                    ],
                    [
                        'name' => 'AGA Teaching Department',
                        'members' => [['role' => 'Director', 'name' => 'Enock UWIRINGIYIMANA']],
                    ],
                    [
                        'name' => 'AGA Chief Instrumentalist',
                        'members' => [['role' => 'Chief', 'name' => 'Schimei IRATWUMVA']],
                    ],
                    [
                        'name' => 'Kits Management',
                        'members' => [
                            ['role' => 'Coordinator', 'name' => 'NZANYWAYIMPAYE Aimee'],
                            ['role' => 'Coordinator', 'name' => 'Enock NIYOMUGABO'],
                            ['role' => 'Coordinator', 'name' => 'Pacific NIYONSHUTI'],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Advisors',
                'description' => 'Guidance and counsel for long-term ministry strength.',
                'teams' => [
                    [
                        'name' => 'Advisory Board',
                        'members' => [
                            ['role' => 'Advisor', 'name' => 'Eliab MWISENEZA'],
                            ['role' => 'Advisor', 'name' => 'Theogene NIYONAMAMAZA'],
                            ['role' => 'Advisor', 'name' => 'Benie Solange DUSABIMANA'],
                            ['role' => 'Advisor', 'name' => 'Emmanuel NKURUNZIZA'],
                            ['role' => 'Advisor', 'name' => 'MAAJABU Alleluia Tito'],
                        ],
                    ],
                ],
            ],
        ];

        $teamsCount = collect($teamSections)->flatMap(fn($section) => $section['teams'])->count();

        $membersCount = collect($teamSections)
            ->flatMap(fn($section) => $section['teams'])
            ->flatMap(fn($team) => $team['members'])
            ->count();

        $uniquePeopleCount = collect($teamSections)
            ->flatMap(fn($section) => $section['teams'])
            ->flatMap(fn($team) => $team['members'])
            ->pluck('name')
            ->unique()
            ->count();
    @endphp

    <section class="mx-auto max-w-7xl px-6 pt-20 pb-8">
        <div class="page-hero px-6 py-8 sm:px-10 sm:py-10">
            <div class="reveal grid gap-6 lg:grid-cols-[1.2fr_0.8fr] lg:items-end">
                <div>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="section-label">AGA Team Directory 2026</span>
                        <span class="pill bg-white border border-gold-200 text-amber-700">Nominating Committee</span>
                    </div>

                    <h1
                        class="mt-4 text-3xl sm:text-4xl lg:text-[2.7rem] font-semibold tracking-tight text-slate-900 leading-tight">
                        Leadership and department teams in one place
                    </h1>

                    <p class="mt-3 text-base leading-relaxed text-slate-600 max-w-3xl">
                        Compact team cards with initials-based image placeholders for every member.
                    </p>

                    <div class="mt-4 flex flex-wrap gap-2 text-xs">
                        <span class="pill bg-white border border-sage-100 text-sage-700">Elected: December 28, 2025</span>
                        <span class="pill bg-white border border-slate-200 text-slate-700">Service Year: 2026</span>
                        <span class="pill bg-white border border-slate-200 text-slate-700">Amazing Grace Academy</span>
                    </div>
                </div>

                <div class="rounded-2xl border border-white/80 bg-white/80 backdrop-blur p-4 sm:p-5 shadow-sm">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-sage-700">Quick Summary</p>
                    <div class="mt-3 grid grid-cols-3 gap-2">
                        <div class="rounded-xl border border-sage-100 bg-sage-50/70 px-3 py-2 text-center">
                            <p class="text-[11px] font-semibold text-sage-700">Teams</p>
                            <p class="mt-1 text-lg font-semibold text-slate-900">{{ $teamsCount }}</p>
                        </div>
                        <div class="rounded-xl border border-amber-100 bg-amber-50/70 px-3 py-2 text-center">
                            <p class="text-[11px] font-semibold text-amber-700">Roles</p>
                            <p class="mt-1 text-lg font-semibold text-slate-900">{{ $membersCount }}</p>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-slate-50/80 px-3 py-2 text-center">
                            <p class="text-[11px] font-semibold text-slate-600">People</p>
                            <p class="mt-1 text-lg font-semibold text-slate-900">{{ $uniquePeopleCount }}</p>
                        </div>
                    </div>
                    <p class="mt-3 text-xs text-slate-500">
                        Initials are placeholders and can be replaced with real profile photos later.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 pb-20 space-y-10">
        @foreach ($teamSections as $sectionIndex => $section)
            <div class="reveal {{ $sectionIndex > 0 ? 'reveal-delay-1' : '' }}">
                <div class="mb-4 flex flex-col gap-1 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <h2 class="text-2xl font-semibold text-slate-900">{{ $section['title'] }}</h2>
                        <p class="text-sm text-slate-600">{{ $section['description'] }}</p>
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($section['teams'] as $team)
                        <article class="soft-card p-4 sm:p-5">
                            <div class="flex items-center justify-between gap-2">
                                <h3 class="text-base font-semibold text-slate-900">{{ $team['name'] }}</h3>
                                <span class="text-[11px] text-slate-500">{{ count($team['members']) }} members</span>
                            </div>

                            <div class="mt-3 space-y-2.5">
                                @foreach ($team['members'] as $member)
                                    @php
                                        $parts = preg_split('/\s+/', trim($member['name']));
                                        $initials = collect($parts)
                                            ->filter()
                                            ->map(fn($word) => strtoupper(substr($word, 0, 1)))
                                            ->take(2)
                                            ->implode('');
                                        $initials = $initials !== '' ? $initials : 'NA';
                                    @endphp
                                    <div
                                        class="flex items-center gap-3 rounded-xl border border-slate-100 bg-slate-50/70 px-3 py-2">
                                        <div
                                            class="h-9 w-9 shrink-0 rounded-full border border-sage-200 bg-white text-[11px] font-semibold text-sage-700 grid place-items-center">
                                            {{ $initials }}
                                        </div>
                                        <div class="min-w-0">
                                            <p class="text-xs font-semibold text-slate-700">{{ $member['role'] }}</p>
                                            <p class="text-sm text-slate-900 truncate">{{ $member['name'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        @endforeach
    </section>
@endsection
