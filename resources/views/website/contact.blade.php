@extends('layouts.website')

@section('title', 'Contact & Support — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-16 pb-12">
        <div class="max-w-3xl">
            <span class="inline-flex rounded-full bg-emerald-500/10 px-4 py-2 text-xs font-semibold text-emerald-700">
                Contact & Support
            </span>

            <h1 class="mt-6 text-4xl font-semibold tracking-tight text-slate-900">
                Get in Touch with Amazing Grace Academy
            </h1>

            <p class="mt-5 text-lg leading-relaxed text-slate-600">
                Whether you want to join the academy, ask a question,
                or support our mission, we are glad to hear from you.
            </p>
        </div>
    </section>

    {{-- CONTACT GRID --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="grid gap-10 lg:grid-cols-2">

            {{-- CONTACT DETAILS --}}
            <x-ui.card class="p-10">
                <h2 class="text-2xl font-semibold text-slate-900">
                    Contact Information
                </h2>

                <div class="mt-6 space-y-4 text-slate-700">
                    <div>
                        <div class="text-sm font-semibold text-slate-900">Email</div>
                        <div class="text-sm text-slate-600">
                            amazinggraceacademyrwanda@gmail.com
                        </div>
                    </div>

                    <div>
                        <div class="text-sm font-semibold text-slate-900">Phone</div>
                        <div class="text-sm text-slate-600">
                            0788 261 729 / 0780 330 325 / 0780 675 046
                        </div>
                    </div>

                    <div>
                        <div class="text-sm font-semibold text-slate-900">Location</div>
                        <div class="text-sm text-slate-600">
                            Kigali Bilingual Church<br>
                            ASA UR Nyarugenge<br>
                            ASSA Kigali • Rwanda
                        </div>
                    </div>
                </div>

                <div class="mt-8 rounded-2xl bg-slate-50 p-6">
                    <div class="text-sm font-semibold text-slate-900">
                        Operating Structure
                    </div>
                    <div class="mt-2 text-sm text-slate-600">
                        Seventh-day Adventist Church<br>
                        ASA UR Nyarugenge • ASSA Kigali • ECRF • RUM
                    </div>
                </div>
            </x-ui.card>

            {{-- JOIN FORM --}}
            <x-ui.card class="p-10" id="join">
                <h2 class="text-2xl font-semibold text-slate-900">
                    Join the Academy
                </h2>

                <p class="mt-3 text-slate-600 leading-relaxed">
                    If you would like to join Amazing Grace Academy as a student,
                    please send us your details and we will guide you through
                    the next steps.
                </p>

                {{-- Form (static for now) --}}
                <form class="mt-6 space-y-4">
                    <div>
                        <label class="text-sm font-medium text-slate-700">Full Name</label>
                        <input type="text"
                            class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:border-slate-300 focus:ring focus:ring-slate-200">
                    </div>

                    <div>
                        <label class="text-sm font-medium text-slate-700">Phone Number</label>
                        <input type="text"
                            class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:border-slate-300 focus:ring focus:ring-slate-200">
                    </div>

                    <div>
                        <label class="text-sm font-medium text-slate-700">Email (optional)</label>
                        <input type="email"
                            class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:border-slate-300 focus:ring focus:ring-slate-200">
                    </div>

                    <div>
                        <label class="text-sm font-medium text-slate-700">Message</label>
                        <textarea rows="4"
                            class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:border-slate-300 focus:ring focus:ring-slate-200"
                            placeholder="e.g. I want to join Class of 2026"></textarea>
                    </div>

                    <x-ui.button variant="primary" class="w-full">
                        Send Request
                    </x-ui.button>

                    <p class="text-xs text-slate-500">
                        We will respond as soon as possible.
                    </p>
                </form>
            </x-ui.card>

        </div>
    </section>

    {{-- SUPPORT / DONATIONS --}}
    <section id="support" class="bg-slate-900 py-20 text-white">
        <div class="mx-auto max-w-7xl px-6">
            <div class="max-w-3xl">
                <h2 class="text-3xl font-semibold">
                    Support the Academy
                </h2>

                <p class="mt-4 text-white/80 leading-relaxed">
                    Amazing Grace Academy offers free music training to all learners.
                    Your financial support helps us acquire musical instruments,
                    organize concerts, and expand training opportunities.
                </p>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-2">
                <div class="rounded-[28px] bg-white/10 p-8 backdrop-blur">
                    <div class="text-sm font-semibold text-emerald-400">
                        Financial Support
                    </div>
                    <p class="mt-4 text-white/80">
                        Contributions can be sent to:
                    </p>
                    <p class="mt-3 text-lg font-semibold">
                        Schimei IRATWUMVA
                    </p>
                    <p class="text-white/70">
                        Code: 726096
                    </p>
                </div>

                <div class="rounded-[28px] bg-white/10 p-8 backdrop-blur">
                    <div class="text-sm font-semibold text-sky-400">
                        Other Support
                    </div>
                    <p class="mt-4 text-white/80">
                        You can also support the academy through prayers,
                        advice, volunteering, or providing musical instruments.
                    </p>
                </div>
            </div>

            <p class="mt-10 max-w-3xl text-white/70">
                We sincerely thank God for guiding us so far and all supporters
                who stand with Amazing Grace Academy in this mission.
            </p>
        </div>
    </section>

    {{-- CLOSING MESSAGE --}}
    <section class="mx-auto max-w-7xl px-6 py-20">
        <x-ui.card class="p-10 text-center">
            <p class="text-lg leading-relaxed text-slate-700">
                “May the Lord be with you, bless you, protect you from evil,
                and unite us one day in the song of victory with our Redeemer.”
            </p>
            <p class="mt-4 text-sm text-slate-500">
                Peace of God be with you.
            </p>
        </x-ui.card>
    </section>
@endsection
