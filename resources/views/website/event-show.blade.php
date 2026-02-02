@extends('layouts.website')

@section('title', $event->title . ' — Amazing Grace Academy')
@section('meta_description', $event->description ? \Illuminate\Support\Str::limit($event->description, 160) :
    $event->title . ' at Amazing Grace Academy.')

@section('content')
    <section class="mx-auto max-w-3xl px-4 sm:px-6 pt-12 sm:pt-16 pb-16 sm:pb-20">
        {{-- Breadcrumb --}}
        <nav class="reveal mb-6 text-sm text-ink-500">
            <a href="{{ route('events') }}" class="hover:text-sage-600">Events</a>
            <span class="mx-2">/</span>
            <span class="text-ink-700 font-medium">{{ $event->title }}</span>
        </nav>

        <div class="reveal soft-card rounded-2xl sm:rounded-3xl overflow-hidden border border-sage-100/80">
            {{-- Date block --}}
            <div class="bg-gradient-to-br from-sage-100 via-cream-50 to-gold-100 px-6 sm:px-8 py-8 sm:py-10 text-center">
                @if ($event->event_date)
                    <span
                        class="font-display text-5xl sm:text-6xl font-semibold leading-none text-sage-700">{{ $event->event_date->format('M') }}</span>
                    <span
                        class="block text-2xl sm:text-3xl font-semibold text-ink-800 mt-1">{{ $event->event_date->format('j') }}</span>
                    <span class="text-sm text-ink-500">{{ $event->event_date->format('Y') }}</span>
                    <p class="mt-2 text-base text-ink-600">{{ $event->event_date->format('l') }}</p>
                @else
                    <i class="fa-solid fa-calendar-days text-5xl text-sage-600 opacity-70"></i>
                    <p class="mt-2 text-ink-600">Date to be announced</p>
                @endif
            </div>

            <div class="p-6 sm:p-8 md:p-10">
                <span
                    class="pill bg-sage-50 text-sage-700 border border-sage-200">{{ ucfirst($event->status ?? 'Event') }}</span>
                <h1 class="mt-4 font-display text-2xl sm:text-3xl font-semibold text-ink-900">{{ $event->title }}</h1>

                @if ($event->location)
                    <p class="mt-4 flex items-center gap-2 text-ink-700">
                        <i class="fa-solid fa-location-dot text-sage-600 w-5"></i>
                        <span>{{ $event->location }}</span>
                    </p>
                @endif

                @if ($event->description)
                    <div class="mt-6 prose prose-slate max-w-none">
                        <p class="text-ink-600 leading-relaxed whitespace-pre-line">{{ $event->description }}</p>
                    </div>
                @else
                    <p class="mt-6 text-ink-600 leading-relaxed">Join us for this event. More details will be shared closer
                        to the date.</p>
                @endif

                @if ($event->requires_registration || $event->accepts_support)
                    <div class="mt-6 flex flex-wrap gap-2">
                        @if ($event->requires_registration)
                            <span class="pill bg-sage-50 text-sage-700 border border-sage-200">
                                <i class="fa-solid fa-user-plus mr-1"></i> Registration required
                            </span>
                        @endif
                        @if ($event->accepts_support)
                            <span class="pill bg-gold-50 text-gold-700 border border-gold-200">
                                <i class="fa-solid fa-heart mr-1"></i> Optional support when you register
                            </span>
                        @endif
                    </div>
                @endif

                <div class="mt-8 pt-6 border-t border-sage-100 flex flex-wrap gap-3">
                    @if ($event->requires_registration)
                        @php
                            $today = now()->startOfDay();
                            $isUpcoming = $event->event_date && $event->event_date->gte($today);
                        @endphp
                        @if ($isUpcoming)
                            <x-ui.button href="{{ route('events.register', $event) }}" variant="primary"
                                class="rounded-xl">
                                Register for this event
                            </x-ui.button>
                        @endif
                    @endif
                    <x-ui.button href="{{ route('contact') }}?topic={{ urlencode('Event: ' . $event->title) }}"
                        variant="outline" class="rounded-xl">
                        <i class="fa-regular fa-envelope mr-2"></i> Inquire about this event
                    </x-ui.button>
                    <a href="{{ route('events') }}"
                        class="inline-flex items-center justify-center rounded-xl border border-ink-200 bg-white px-5 py-2.5 text-sm font-semibold text-ink-700 hover:bg-cream-50 transition">
                        ← Back to events
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
