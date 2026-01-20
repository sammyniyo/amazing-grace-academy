@extends('layouts.website')

@section('title', 'Contact & Support — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-16 pb-12">
        <div class="max-w-3xl reveal">
            <span class="pill bg-emerald-500/15 px-4 py-2 text-xs font-semibold text-emerald-200 border border-emerald-400/40">
                Contact & Support
            </span>

            <h1 class="mt-6 text-4xl font-semibold tracking-tight text-slate-50">
                Get in Touch with Amazing Grace Academy
            </h1>

            <p class="mt-5 text-lg leading-relaxed text-slate-300">
                Whether you want to join the academy, ask a question,
                or support our mission, we are glad to hear from you.
            </p>
        </div>
    </section>

    {{-- CONTACT GRID --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="grid gap-10 lg:grid-cols-2">

            {{-- CONTACT DETAILS --}}
            <x-ui.card class="p-10 bg-slate-900/80 border border-slate-700/80 text-slate-50 reveal">
                <h2 class="text-2xl font-semibold">
                    Contact Information
                </h2>

                <div class="mt-6 space-y-4 text-slate-200">
                    <div>
                        <div class="text-sm font-semibold">Email</div>
                        <div class="text-sm text-slate-200">
                            amazinggraceacademyrwanda@gmail.com
                        </div>
                    </div>

                    <div>
                        <div class="text-sm font-semibold">Phone</div>
                        <div class="text-sm text-slate-200">
                            0788 261 729 / 0780 330 325 / 0780 675 046
                        </div>
                    </div>

                    <div>
                        <div class="text-sm font-semibold">Location</div>
                        <div class="text-sm text-slate-200">
                            Kigali Bilingual Church<br>
                            ASA UR Nyarugenge<br>
                            ASSA Kigali • Rwanda
                        </div>
                    </div>
                </div>

                <div class="mt-8 rounded-2xl bg-slate-900/80 border border-slate-700/80 p-6">
                    <div class="text-sm font-semibold">
                        Operating Structure
                    </div>
                    <div class="mt-2 text-sm text-slate-300">
                        Seventh-day Adventist Church<br>
                        ASA UR Nyarugenge • ASSA Kigali • ECRF • RUM
                    </div>
                </div>
            </x-ui.card>

            {{-- JOIN FORM --}}
            <x-ui.card class="p-10 bg-slate-900/80 border border-emerald-400/40 text-slate-50 reveal" id="join">
                <h2 class="text-2xl font-semibold">
                    Join the Academy
                </h2>

                <p class="mt-3 text-slate-200 leading-relaxed">
                    If you would like to join Amazing Grace Academy as a student,
                    please send us your details and we will guide you through
                    the next steps.
                </p>

                {{-- Form (static for now) --}}
                <form class="mt-6 space-y-4">
                    <div>
                        <label class="text-sm font-medium text-slate-100">Full Name</label>
                        <input type="text"
                            class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:border-slate-300 focus:ring focus:ring-slate-200">
                    </div>

                    <div>
                        <label class="text-sm font-medium text-slate-100">Phone Number</label>
                        <input type="text"
                            class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:border-slate-300 focus:ring focus:ring-slate-200">
                    </div>

                    <div>
                        <label class="text-sm font-medium text-slate-100">Email (optional)</label>
                        <input type="email"
                            class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:border-slate-300 focus:ring focus:ring-slate-200">
                    </div>

                    <div>
                        <label class="text-sm font-medium text-slate-100">Message</label>
                        <textarea rows="4"
                            class="mt-1 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:border-slate-300 focus:ring focus:ring-slate-200"
                            placeholder="e.g. I want to join Class of 2026"></textarea>
                    </div>

                    <x-ui.button variant="primary" class="w-full">
                        Send Request
                    </x-ui.button>

                    <p class="text-xs text-slate-400">
                        We will respond as soon as possible.
                    </p>
                </form>
            </x-ui.card>

        </div>
    </section>

    {{-- SUPPORT / DONATIONS --}}
    <section id="support" class="bg-slate-950/80 py-20 text-white">
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
                <div class="rounded-[28px] bg-white/5 p-8 backdrop-blur reveal">
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

                <div class="rounded-[28px] bg-white/5 p-8 backdrop-blur reveal">
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
        <x-ui.card class="p-10 text-center bg-slate-900/80 border border-slate-700/80 reveal">
            <p class="text-lg leading-relaxed text-slate-100">
                “May the Lord be with you, bless you, protect you from evil,
                and unite us one day in the song of victory with our Redeemer.”
            </p>
            <p class="mt-4 text-sm text-slate-400">
                Peace of God be with you.
            </p>
        </x-ui.card>
    </section>
@endsection
