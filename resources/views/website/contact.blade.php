@extends('layouts.website')

@section('title', 'Contact & Support — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-20 pb-16">
        <div class="page-hero px-6 py-10 sm:px-10 lg:px-12">
            <div class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr] items-center">
                <div class="reveal space-y-5">
                    <div class="flex flex-wrap items-center gap-3 text-sm text-teal-700">
                        <span class="pill bg-white border border-teal-100 text-teal-700 shadow-sm">
                            Contact & Support
                        </span>
                        <span class="pill bg-white border border-amber-100 text-amber-700 shadow-sm">
                            453+ responses • avg 24h
                        </span>
                    </div>

                    <div class="space-y-3">
                        <h1 class="text-4xl sm:text-5xl font-semibold tracking-tight text-slate-900 leading-tight">
                            Get in touch with Amazing Grace Academy
                        </h1>
                        <p class="text-lg leading-relaxed text-slate-600 max-w-3xl">
                            Ask a question, invite us to sing or teach, or support our mission. We’re glad to hear from you.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <x-ui.button href="tel:+250788261729" variant="primary" class="bg-emerald-700 hover:bg-emerald-600">
                            Call Us
                        </x-ui.button>
                        <x-ui.button href="mailto:amazinggraceacademyrwanda@gmail.com" variant="glass">
                            Email Us
                        </x-ui.button>
                        <x-ui.button href="{{ url('/register') }}" variant="outline">
                            Class Register
                        </x-ui.button>
                    </div>
                </div>

                <div class="reveal soft-card p-7 bg-white/90 backdrop-blur shadow-[0_18px_50px_rgba(15,23,42,0.12)] border border-emerald-100">
                    <div class="flex items-center gap-3">
                        <div class="h-12 w-12 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold">
                            AG
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-emerald-700">Response window</div>
                            <div class="text-slate-900 font-semibold">24 hours average</div>
                            <p class="text-xs text-slate-500">Call for urgent invitations</p>
                        </div>
                    </div>
                    <div class="mt-5 grid gap-3 sm:grid-cols-3 text-sm text-slate-700">
                        <div class="rounded-2xl border border-emerald-100 bg-emerald-50/70 p-3">
                            <div class="text-xs font-semibold text-emerald-700">Calls</div>
                            <div class="text-lg font-bold text-slate-900">07:30–21:00</div>
                            <p class="text-[11px] text-slate-500">Kigali time</p>
                        </div>
                        <div class="rounded-2xl border border-amber-100 bg-amber-50/70 p-3">
                            <div class="text-xs font-semibold text-amber-700">Events</div>
                            <div class="text-lg font-bold text-slate-900">Bookings open</div>
                            <p class="text-[11px] text-slate-500">Choir & training</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-3">
                            <div class="text-xs font-semibold text-slate-600">Classes</div>
                            <div class="text-lg font-bold text-slate-900">Sat 2–5 PM</div>
                            <p class="text-[11px] text-slate-500">Register to join</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT GRID --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="grid gap-10 lg:grid-cols-2">

            {{-- CONTACT DETAILS --}}
            <div class="soft-card p-10 reveal">
                <h2 class="text-2xl font-semibold">Contact Information</h2>

                <div class="mt-6 space-y-4 text-slate-700">
                    <div>
                        <div class="text-sm font-semibold text-slate-900">Email</div>
                        <div class="text-sm">amazinggraceacademyrwanda@gmail.com</div>
                    </div>

                    <div>
                        <div class="text-sm font-semibold text-slate-900">Phone</div>
                        <div class="text-sm">0788 261 729 / 0780 330 325 / 0780 675 046</div>
                    </div>

                    <div>
                        <div class="text-sm font-semibold text-slate-900">Location</div>
                        <div class="text-sm">
                            Kigali Bilingual Church<br>
                            ASA UR Nyarugenge<br>
                            ASSA Kigali • Rwanda
                        </div>
                    </div>
                </div>

                <div class="mt-8 rounded-2xl bg-emerald-50/70 border border-emerald-100 p-6">
                    <div class="text-sm font-semibold text-slate-900">Operating Structure</div>
                    <div class="mt-2 text-sm text-slate-700">
                        Seventh-day Adventist Church<br>
                        ASA UR Nyarugenge • ASSA Kigali • ECRF • RUM
                    </div>
                </div>

                <div class="mt-6 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                        <div class="text-xs font-semibold text-slate-600">Invitations</div>
                        <p class="text-sm text-slate-700 mt-1">Concerts, worship services, training</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                        <div class="text-xs font-semibold text-slate-600">Support</div>
                        <p class="text-sm text-slate-700 mt-1">Instruments, volunteering, donations</p>
                    </div>
                </div>
            </div>

            {{-- CONTACT FORM --}}
            <div class="soft-card p-10 reveal">
                <h2 class="text-2xl font-semibold">Contact Us</h2>
                <p class="mt-3 text-slate-700 leading-relaxed">
                    Send us a message for questions, invitations, or support inquiries.
                </p>

                <form class="mt-6 space-y-4" method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    @if (session('success'))
                        <div class="rounded-xl border border-emerald-200 bg-emerald-50 px-3 py-2 text-sm text-emerald-800">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="text-sm font-medium text-slate-900">Full Name</label>
                            <input name="name" type="text" required
                                class="mt-1 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-teal-300 focus:ring focus:ring-teal-100">
                        </div>
                        <div>
                            <label class="text-sm font-medium text-slate-900">Phone Number</label>
                            <input name="phone" type="text"
                                class="mt-1 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-teal-300 focus:ring focus:ring-teal-100">
                        </div>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="text-sm font-medium text-slate-900">Email (optional)</label>
                            <input name="email" type="email"
                                class="mt-1 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-teal-300 focus:ring focus:ring-teal-100">
                        </div>
                        <div>
                            <label class="text-sm font-medium text-slate-900">Topic</label>
                            <select name="topic" class="mt-1 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 focus:border-teal-300 focus:ring focus:ring-teal-100">
                                <option value="Invitation">Invitation to sing/teach</option>
                                <option value="Class question">Class question</option>
                                <option value="Support">Support / Donation</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="text-sm font-medium text-slate-900">Message</label>
                        <textarea name="message" rows="4" required
                            class="mt-1 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 focus:border-teal-300 focus:ring focus:ring-teal-100"
                            placeholder="How can we help?"></textarea>
                    </div>

                    <x-ui.button variant="primary" class="w-full bg-emerald-700 hover:bg-emerald-600">Send Message</x-ui.button>

                    <p class="text-xs text-slate-500 text-center">
                        We’ll reply within 24h. For class registration, use the Class Register link.
                    </p>
                </form>
            </div>
        </div>
    </section>

    {{-- CLOSING MESSAGE --}}
    <section class="mx-auto max-w-7xl px-6 py-20">
        <div class="soft-card p-10 text-center reveal">
            <p class="text-lg leading-relaxed text-slate-900">
                “May the Lord be with you, bless you, protect you from evil,
                and unite us one day in the song of victory with our Redeemer.”
            </p>
            <p class="mt-4 text-sm text-slate-600">
                Peace of God be with you.
            </p>
        </div>
    </section>
@endsection
