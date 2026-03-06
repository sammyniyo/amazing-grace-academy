@extends('layouts.website')

@section('title', 'Events — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-16 pb-12">
        <div class="ui-hero-panel px-8 py-12 sm:px-12 lg:px-14">
            <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] items-center">
                <div class="reveal space-y-5">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="section-label">Cohorts & events</span>
                        <span class="pill bg-gold-50 text-gold-700 border border-gold-200">Concerts • Training •
                            Intakes</span>
                    </div>
                    <h1 class="font-display text-4xl sm:text-5xl font-semibold tracking-tight text-ink-900 leading-tight">
                        Join the next intake or worship events
                    </h1>
                    <p class="text-lg text-ink-600 max-w-2xl leading-relaxed">
                        Concerts, choir training, and cohort intakes across Rwanda. Register for an event or join a class.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <x-ui.button href="{{ route('register') }}" variant="primary" class="rounded-full px-6 py-3">Join
                            class</x-ui.button>
                        <x-ui.button href="{{ route('contact') }}" variant="outline" class="rounded-full px-6 py-3">Contact
                            us</x-ui.button>
                    </div>
                </div>
                <div class="reveal reveal-delay-1 soft-card p-8 border-sage-100/80">
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
                    <p class="mt-4 text-sm text-ink-600">Sol-Fa, Staff Notation, and instruments. Register to reserve your
                        seat.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- FILTER TABS + EVENTS GRID --}}
    <section class="mx-auto max-w-7xl px-6 pb-20" x-data="{ tab: 'upcoming' }">
        <div class="reveal flex items-center justify-between gap-4 mb-8 flex-wrap">
            <div class="flex items-center gap-2">
                <button type="button" @click="tab = 'upcoming'"
                    :class="tab === 'upcoming' ? 'bg-sage-100 text-sage-800 font-semibold border-sage-300' :
                        'bg-white text-ink-600 border-ink-200 hover:bg-cream-50'"
                    class="rounded-full border px-4 py-2 text-sm transition-colors">
                    Upcoming
                </button>
                <button type="button" @click="tab = 'past'"
                    :class="tab === 'past' ? 'bg-sage-100 text-sage-800 font-semibold border-sage-300' :
                        'bg-white text-ink-600 border-ink-200 hover:bg-cream-50'"
                    class="rounded-full border px-4 py-2 text-sm transition-colors">
                    Past
                </button>
            </div>
            <x-ui.button href="{{ route('register') }}" variant="outline"
                class="rounded-full hidden sm:inline-flex">Register for class</x-ui.button>
        </div>

        {{-- Upcoming events --}}
        <div x-show="tab === 'upcoming'" x-cloak class="space-y-6">
            @if (session('success'))
                <div
                    class="reveal mb-6 rounded-2xl border border-sage-200 bg-sage-50 px-4 py-3 text-sm text-sage-800 font-medium">
                    {{ session('success') }}</div>
            @endif
            @if (session('info'))
                <div
                    class="reveal mb-6 rounded-2xl border border-ink-200 bg-ink-50 px-4 py-3 text-sm text-ink-700 font-medium">
                    {{ session('info') }}</div>
            @endif
            @if ($upcomingEvents->isNotEmpty())
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($upcomingEvents as $event)
                        <div
                            class="reveal soft-card overflow-hidden group hover:shadow-card-hover transition-all duration-300">
                            <div class="h-40 w-full relative overflow-hidden bg-gradient-to-br from-sage-100 via-cream-50 to-gold-100">
                                @php($eventCover = $event->cover_url ?: asset('images/aga-choir-group.png'))
                                <img src="{{ $eventCover }}" alt="{{ $event->title }}"
                                    onerror="this.onerror=null;this.src='{{ asset('images/aga-choir-group.png') }}';"
                                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-black/5 to-transparent"></div>
                                <div class="absolute left-4 top-4 rounded-lg bg-white/90 px-3 py-2 text-center shadow-sm">
                                    @if ($event->event_date)
                                        <span
                                            class="block font-display text-lg font-semibold leading-none text-ink-900">{{ $event->event_date->format('M') }}</span>
                                        <span class="block text-sm font-semibold text-ink-700 mt-0.5">{{ $event->event_date->format('j') }}</span>
                                        <span class="block text-[11px] text-ink-500">{{ $event->event_date->format('Y') }}</span>
                                    @else
                                        <i class="fas fa-calendar-alt text-lg text-ink-600"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="p-6 space-y-3">
                                <div class="flex items-center justify-between gap-2 flex-wrap">
                                    <span class="pill-green">{{ $event->status ?? 'Event' }}</span>
                                    @if ($event->event_date)
                                        <span
                                            class="text-xs font-medium text-ink-500">{{ $event->event_date->format('F j, Y') }}</span>
                                    @endif
                                </div>
                                <h3 class="font-display text-xl font-semibold text-ink-900">{{ $event->title }}</h3>
                                <p class="text-sm text-ink-600 line-clamp-2 leading-relaxed">
                                    {{ $event->description ?? 'Join us for this event.' }}
                                </p>
                                @if ($event->location)
                                    <p class="text-xs text-ink-500 flex items-center gap-1">
                                        <i class="fas fa-map-marker-alt text-sage-500"></i> {{ $event->location }}
                                    </p>
                                @endif
                                @if ($event->accepts_support)
                                    <p class="text-xs text-gold-700 flex items-center gap-1">
                                        <i class="fas fa-heart"></i> Optional support when you register
                                    </p>
                                @endif
                                <div class="pt-2 flex flex-wrap gap-2">
                                    @if ($event->requires_registration)
                                        <x-ui.button href="{{ route('events.register', $event) }}" variant="primary"
                                            class="rounded-xl px-4 py-2 text-sm">
                                            Register for this event
                                        </x-ui.button>
                                    @endif
                                    <x-ui.button href="{{ route('events.show', $event) }}" variant="outline"
                                        class="rounded-xl px-4 py-2 text-sm">
                                        See event details
                                    </x-ui.button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="reveal soft-card p-12 text-center">
                    <i class="fas fa-calendar-check text-4xl text-ink-300 mb-4"></i>
                    <p class="text-ink-600 font-medium">No upcoming events listed yet.</p>
                    <p class="text-sm text-ink-500 mt-1">Check back soon or register for the next class intake.</p>
                    <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center">
                        <x-ui.button href="{{ route('register') }}" variant="primary" class="rounded-xl">Join
                            class</x-ui.button>
                        <x-ui.button href="{{ route('contact') }}" variant="outline" class="rounded-xl">Contact
                            us</x-ui.button>
                    </div>
                </div>
            @endif
        </div>

        {{-- Past events --}}
        <div x-show="tab === 'past'" x-cloak class="space-y-6">
            @if ($pastEvents->isNotEmpty())
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($pastEvents as $event)
                        <div class="reveal soft-card overflow-hidden opacity-90">
                            <div class="h-32 w-full relative overflow-hidden bg-gradient-to-br from-ink-100 via-ink-50 to-ink-100">
                                @php($eventCover = $event->cover_url ?: asset('images/aga-choir-group.png'))
                                <img src="{{ $eventCover }}" alt="{{ $event->title }}"
                                    onerror="this.onerror=null;this.src='{{ asset('images/aga-choir-group.png') }}';"
                                    class="h-full w-full object-cover" loading="lazy">
                                <div class="absolute inset-0 bg-black/35"></div>
                                <div class="absolute left-4 top-4 rounded-lg bg-white/90 px-3 py-1.5 text-center shadow-sm">
                                    @if ($event->event_date)
                                        <span
                                            class="block font-display text-sm font-semibold text-ink-900">{{ $event->event_date->format('M j') }}</span>
                                        <span class="block text-[11px] text-ink-500">{{ $event->event_date->format('Y') }}</span>
                                    @else
                                        <i class="fas fa-calendar-minus text-base text-ink-600"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="p-6 space-y-2">
                                <span class="pill bg-ink-100 text-ink-600 border border-ink-200 text-xs">Past</span>
                                <h3 class="font-display text-lg font-semibold text-ink-900">{{ $event->title }}</h3>
                                <p class="text-sm text-ink-600 line-clamp-2">{{ $event->description ?? 'Past event.' }}</p>
                                @if ($event->location)
                                    <p class="text-xs text-ink-500">{{ $event->location }}</p>
                                @endif
                                <p class="pt-2">
                                    <a href="{{ route('events.show', $event) }}"
                                        class="text-sm font-semibold text-sage-600 hover:text-sage-700">See event details
                                        →</a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="reveal soft-card p-10 text-center">
                    <p class="text-ink-500 text-sm">No past events to display.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- CTA --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div
            class="reveal soft-card p-10 text-center bg-gradient-to-br from-sage-50/80 via-cream-50 to-gold-50/40 border border-sage-200/80">
            <h2 class="font-display text-2xl font-semibold text-ink-900">Want to host an event or join a cohort?</h2>
            <p class="mt-3 text-ink-600 max-w-xl mx-auto leading-relaxed">
                Register for the next class intake or get in touch to invite the academy for concerts and training.
            </p>
            <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center">
                <x-ui.button href="{{ route('register') }}" variant="primary" class="rounded-full">Join
                    class</x-ui.button>
                <x-ui.button href="{{ route('contact') }}" variant="outline" class="rounded-full">Contact
                    us</x-ui.button>
            </div>
        </div>
    </section>
@endsection
