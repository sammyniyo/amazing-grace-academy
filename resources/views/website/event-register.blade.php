@extends('layouts.website')

@section('title', 'Register for ' . $event->title . ' — Amazing Grace Academy')
@section('meta_description', 'Register for ' . $event->title . ' at Amazing Grace Academy.')

@section('content')
    <section class="mx-auto max-w-2xl px-4 sm:px-6 pt-12 sm:pt-16 pb-16 sm:pb-20">
        {{-- Breadcrumb --}}
        <nav class="reveal mb-6 text-sm text-ink-500">
            <a href="{{ route('events') }}" class="hover:text-sage-600">Events</a>
            <span class="mx-2">/</span>
            <span class="text-ink-700 font-medium">{{ $event->title }}</span>
        </nav>

        {{-- Event summary --}}
        <div class="reveal soft-card rounded-2xl p-6 sm:p-8 mb-8 border border-sage-100/80">
            <span class="pill bg-sage-50 text-sage-700 border border-sage-200">Event registration</span>
            <h1 class="mt-4 font-display text-2xl sm:text-3xl font-semibold text-ink-900">{{ $event->title }}</h1>
            @if ($event->event_date)
                <p class="mt-2 text-ink-600 flex items-center gap-2">
                    <i class="fa-solid fa-calendar-day text-sage-600"></i>
                    {{ $event->event_date->format('l, F j, Y') }}
                </p>
            @endif
            @if ($event->location)
                <p class="mt-1 text-ink-600 flex items-center gap-2">
                    <i class="fa-solid fa-location-dot text-sage-600"></i>
                    {{ $event->location }}
                </p>
            @endif
            @if ($event->description)
                <p class="mt-4 text-sm text-ink-600 leading-relaxed">
                    {{ \Illuminate\Support\Str::limit($event->description, 200) }}</p>
            @endif
        </div>

        {{-- Registration form --}}
        <div class="reveal soft-card rounded-2xl p-6 sm:p-8 border border-sage-100/80">
            <h2 class="font-display text-xl font-semibold text-ink-900">Your details</h2>
            <p class="mt-1 text-sm text-ink-600">We’ll use this to confirm your registration and send event details.</p>

            <form method="POST" action="{{ route('events.register.submit', $event) }}" class="mt-6 space-y-4">
                @csrf
                @if (session('success'))
                    <div class="rounded-xl border border-sage-200 bg-sage-50 px-4 py-3 text-sm text-sage-800">
                        {{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                        {{ session('error') }}</div>
                @endif
                @if ($errors->any())
                    <div class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                        <ul class="list-disc list-inside space-y-1">
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                    <label for="name" class="block text-sm font-medium text-ink-700">Full name <span
                            class="text-red-500">*</span></label>
                    <input type="text" id="name" name="name" required value="{{ old('name') }}"
                        class="mt-1.5 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-ink-900 placeholder-ink-400 focus:border-sage-500 focus:ring-2 focus:ring-sage-500/20 @error('name') border-red-400 @enderror"
                        placeholder="Your full name">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-ink-700">Phone</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                        class="mt-1.5 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-ink-900 placeholder-ink-400 focus:border-sage-500 focus:ring-2 focus:ring-sage-500/20"
                        placeholder="e.g. 0788 261 729">
                    @error('phone')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-ink-700">Email (optional)</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="mt-1.5 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-ink-900 placeholder-ink-400 focus:border-sage-500 focus:ring-2 focus:ring-sage-500/20"
                        placeholder="you@example.com">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                @if ($event->accepts_support)
                    <div class="rounded-xl border border-gold-200 bg-gold-50/50 p-4 sm:p-5">
                        <h3 class="text-sm font-semibold text-ink-900">Support us (optional)</h3>
                        <p class="mt-1 text-sm text-ink-600">You may add an optional amount to support the academy. Leave
                            blank or 0 if you prefer not to.</p>
                        <div class="mt-3 flex flex-wrap items-center gap-3">
                            <label for="support_amount" class="text-sm font-medium text-ink-700">Amount (RWF)</label>
                            <input type="number" id="support_amount" name="support_amount" min="0" step="500"
                                value="{{ old('support_amount') }}" placeholder="0"
                                class="w-32 rounded-xl border border-ink-200 bg-white px-4 py-2.5 text-ink-900 placeholder-ink-400 focus:border-sage-500 focus:ring-2 focus:ring-sage-500/20">
                            <span class="text-sm text-ink-500">RWF</span>
                        </div>
                        <p class="mt-2 text-xs text-ink-500">We’ll contact you about payment if you choose to support.</p>
                        @error('support_amount')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                @endif

                <div>
                    <label for="notes" class="block text-sm font-medium text-ink-700">Message (optional)</label>
                    <textarea id="notes" name="notes" rows="3" placeholder="Any question or note for us"
                        class="mt-1.5 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-ink-900 placeholder-ink-400 focus:border-sage-500 focus:ring-2 focus:ring-sage-500/20">{{ old('notes') }}</textarea>
                    @error('notes')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-2">
                    <x-ui.button type="submit" variant="primary" class="w-full sm:w-auto rounded-xl px-6 py-3">
                        Register for this event
                    </x-ui.button>
                </div>
            </form>
        </div>

        <p class="reveal mt-6 text-center text-sm text-ink-500">
            <a href="{{ route('events') }}" class="text-sage-600 hover:underline">← Back to events</a>
        </p>
    </section>
@endsection
