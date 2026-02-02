@extends('layouts.website')

@section('title', 'Support the Academy — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-16 pb-12">
        <div class="ui-hero-panel px-8 py-12 sm:px-12 lg:px-14">
            <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] items-center">
                <div class="reveal space-y-5">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="section-label">Support the Academy</span>
                        <span class="pill bg-gold-50 text-gold-700 border border-gold-200">Free training • Community
                            impact</span>
                    </div>
                    <h1 class="font-display text-4xl sm:text-5xl font-semibold tracking-tight text-ink-900 leading-tight">
                        Fuel free music education for choir and instruments.
                    </h1>
                    <p class="text-lg leading-relaxed text-ink-600 max-w-3xl">
                        Your giving helps us buy instruments, print hymnals, produce resources, and keep every learner in
                        class without tuition.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <x-ui.button href="#give" variant="primary" class="rounded-full">Give support</x-ui.button>
                        <x-ui.button href="#inquiry" variant="outline" class="rounded-full">Send inquiry</x-ui.button>
                    </div>
                </div>

                <div class="reveal soft-card p-8 border-sage-100/80">
                    <div class="flex items-center gap-3">
                        <div
                            class="h-12 w-12 rounded-2xl bg-sage-100 text-sage-600 flex items-center justify-center font-display font-bold text-lg">
                            AG</div>
                        <div>
                            <div class="text-sm font-semibold text-sage-700">Impact snapshot</div>
                            <div class="font-display text-lg font-semibold text-ink-900">Free training since 2016</div>
                            <p class="text-xs text-ink-500">Choir, Sol-Fa, Staff, instruments</p>
                        </div>
                    </div>
                    <div class="mt-6 grid gap-3 sm:grid-cols-3 text-sm text-ink-700">
                        <div class="rounded-2xl border border-sage-200 bg-sage-50/70 p-3">
                            <div class="text-xs font-semibold text-sage-700">Learners</div>
                            <div class="font-display text-lg font-semibold text-ink-900">700+</div>
                            <p class="text-[11px] text-ink-500">Across cohorts</p>
                        </div>
                        <div class="rounded-2xl border border-gold-200 bg-gold-50/70 p-3">
                            <div class="text-xs font-semibold text-gold-700">Instruments</div>
                            <div class="font-display text-lg font-semibold text-ink-900">Growing</div>
                            <p class="text-[11px] text-ink-500">Needs funding</p>
                        </div>
                        <div class="rounded-2xl border border-sage-200 bg-white p-3">
                            <div class="text-xs font-semibold text-sage-700">Training</div>
                            <div class="font-display text-lg font-semibold text-ink-900">Free</div>
                            <p class="text-[11px] text-ink-500">Your support fuels it</p>
                        </div>
                    </div>
                    <p class="mt-4 text-xs text-ink-500">
                        Seventh-day Adventist • ASA UR Nyarugenge • ASSA Kigali • ECRF • RUM
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- SUPPORT INQUIRY FORM --}}
    <section id="inquiry" class="mx-auto max-w-7xl px-6 pb-16">
        <div class="reveal soft-card p-8 md:p-10">
            <div class="section-label">Get in touch</div>
            <h2 class="mt-3 font-display text-2xl font-semibold text-ink-900">Support inquiry</h2>
            <p class="mt-2 text-ink-600 text-sm max-w-2xl">
                Tell us how you’d like to help: financial support, volunteering, instruments, or other. We’ll respond within
                24 hours.
            </p>

            <form class="mt-6 grid gap-4 md:grid-cols-2" method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <input type="hidden" name="topic" value="Support inquiry">
                @if (session('success'))
                    <div
                        class="md:col-span-2 rounded-2xl border border-sage-200 bg-sage-50 px-4 py-3 text-sm text-sage-800 font-medium">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="md:col-span-2 rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                        <ul class="list-disc list-inside space-y-1">
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                    <label class="text-sm font-medium text-ink-900">Name <span class="text-sage-600">*</span></label>
                    <input name="name" type="text" required value="{{ old('name') }}"
                        class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm focus:ring-2 focus:ring-sage-400 focus:border-sage-400 @error('name') border-red-300 @enderror"
                        placeholder="Your name">
                    @error('name')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="text-sm font-medium text-ink-900">Email</label>
                    <input name="email" type="email" value="{{ old('email') }}"
                        class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm focus:ring-2 focus:ring-sage-400 focus:border-sage-400"
                        placeholder="your@email.com">
                </div>
                <div>
                    <label class="text-sm font-medium text-ink-900">Phone</label>
                    <input name="phone" type="text" value="{{ old('phone') }}"
                        class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm focus:ring-2 focus:ring-sage-400 focus:border-sage-400"
                        placeholder="e.g. 0788 261 729">
                </div>
                <div class="md:col-span-2">
                    <label class="text-sm font-medium text-ink-900">Message <span class="text-sage-600">*</span></label>
                    <textarea name="message" rows="4" required
                        class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-sm placeholder:text-ink-400 focus:ring-2 focus:ring-sage-400 focus:border-sage-400 @error('message') border-red-300 @enderror"
                        placeholder="e.g. I’d like to give financially / volunteer / donate an instrument / other...">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="md:col-span-2">
                    <x-ui.button type="submit" variant="primary" class="rounded-xl">Send support inquiry</x-ui.button>
                </div>
            </form>
        </div>
    </section>

    {{-- GIVING OPTIONS --}}
    <section id="give" class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal text-center">
            <div class="section-label inline-flex">Ways to give</div>
            <h2 class="mt-3 font-display text-3xl font-semibold text-ink-900">Support channels</h2>
            <p class="mt-3 text-ink-600 max-w-2xl mx-auto leading-relaxed">
                Choose how you want to help: finances, instruments, volunteering, or prayer and mentorship.
            </p>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-2">
            <div class="reveal soft-card p-8">
                <div class="pill-green">Financial support</div>
                <p class="mt-4 text-ink-600 text-sm">Contributions can be sent to:</p>
                <p class="mt-3 font-display text-lg font-semibold text-sage-700">Schimei IRATWUMVA</p>
                <p class="text-ink-600 text-sm">Code: <strong>726096</strong></p>
                <p class="mt-3 text-sm text-ink-600 leading-relaxed">
                    Funds go to instruments, hymnals, rehearsal materials, and class logistics.
                </p>
                <div class="mt-4 flex flex-wrap gap-2 text-xs text-ink-500">
                    <span class="pill bg-sage-50 text-sage-700 border border-sage-200">Mobile money</span>
                    <span class="pill bg-sage-50 text-sage-700 border border-sage-200">Cash/Bank (contact us)</span>
                </div>
            </div>

            <div class="reveal soft-card p-8">
                <div class="pill bg-gold-50 text-gold-700 border border-gold-200 w-fit">Other support</div>
                <p class="mt-4 text-ink-600 text-sm leading-relaxed">
                    You can also support through prayers, advice, volunteering, or providing musical instruments (piano,
                    guitar, violin).
                </p>
                <div class="mt-4 grid gap-3 sm:grid-cols-2 text-sm text-ink-700">
                    <div class="rounded-2xl border border-sage-200 bg-sage-50/50 p-4">
                        <div class="text-xs font-semibold text-sage-700">Volunteer</div>
                        <p class="mt-1 text-ink-600 text-sm">Mentor musicians, help logistics, or media support.</p>
                    </div>
                    <div class="rounded-2xl border border-sage-200 bg-sage-50/50 p-4">
                        <div class="text-xs font-semibold text-sage-700">Instruments</div>
                        <p class="mt-1 text-ink-600 text-sm">Donate or lend instruments to expand slots.</p>
                    </div>
                </div>
                <div class="mt-4">
                    <x-ui.button href="{{ route('contact') }}?topic=Support" variant="primary"
                        class="rounded-xl">Coordinate a donation</x-ui.button>
                </div>
            </div>
        </div>
    </section>

    {{-- IMPACT --}}
    <section class="bg-sage-50/50 py-20 border-y border-sage-100">
        <div class="mx-auto max-w-7xl px-6">
            <div class="reveal text-center">
                <div class="section-label inline-flex">Impact</div>
                <h2 class="mt-3 font-display text-3xl font-semibold text-ink-900">Where your support goes</h2>
            </div>
            <div class="mt-10 grid gap-4 md:grid-cols-4">
                <div class="reveal soft-card p-5 text-center">
                    <div class="text-xs font-semibold text-sage-700">Instruments</div>
                    <div class="mt-2 font-display text-lg font-semibold text-ink-900">Piano • Guitar • Violin</div>
                    <p class="text-xs text-ink-500 mt-1">More learners get slots</p>
                </div>
                <div class="reveal soft-card p-5 text-center">
                    <div class="text-xs font-semibold text-sage-700">Hymnals & workbooks</div>
                    <div class="mt-2 font-display text-lg font-semibold text-ink-900">Sol-Fa • Staff</div>
                    <p class="text-xs text-ink-500 mt-1">Printed & digital</p>
                </div>
                <div class="reveal soft-card p-5 text-center">
                    <div class="text-xs font-semibold text-sage-700">Events</div>
                    <div class="mt-2 font-display text-lg font-semibold text-ink-900">Concerts & ministry</div>
                    <p class="text-xs text-ink-500 mt-1">Outreach & practice</p>
                </div>
                <div class="reveal soft-card p-5 text-center">
                    <div class="text-xs font-semibold text-sage-700">Learner care</div>
                    <div class="mt-2 font-display text-lg font-semibold text-ink-900">Tuition-free</div>
                    <p class="text-xs text-ink-500 mt-1">Sustaining free classes</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="mx-auto max-w-7xl px-6 py-20">
        <div class="reveal soft-card p-10 text-center">
            <div class="section-label inline-flex">Thank you for partnering with us</div>
            <h2 class="mt-4 font-display text-2xl font-semibold text-ink-900">Ready to give or talk?</h2>
            <p class="mt-3 text-ink-600 max-w-2xl mx-auto leading-relaxed">
                Call, email, or message us and we’ll coordinate your support quickly.
            </p>
            <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center">
                <x-ui.button href="tel:+250788261729" variant="primary" class="rounded-xl w-full sm:w-auto">Call
                    us</x-ui.button>
                <x-ui.button href="{{ route('contact') }}" variant="outline" class="rounded-xl w-full sm:w-auto">Message
                    us</x-ui.button>
            </div>
        </div>
    </section>
@endsection
