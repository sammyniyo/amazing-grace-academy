@extends('layouts.website')

@section('title', 'Privacy Policy — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-20 pb-16">
        <div class="page-hero px-6 py-10 sm:px-10 lg:px-12">
            <div class="space-y-4">
                <div class="flex flex-wrap items-center gap-3 text-sm text-teal-700">
                    <span class="pill bg-white border border-emerald-100 text-emerald-700 shadow-sm">Privacy Policy</span>
                    <span class="pill bg-white border border-amber-100 text-amber-700 shadow-sm">Updated {{ date('Y') }}</span>
                </div>
                <h1 class="text-4xl sm:text-5xl font-semibold tracking-tight text-slate-900 leading-tight">
                    How we handle your data
                </h1>
                <p class="text-lg leading-relaxed text-slate-600 max-w-3xl">
                    We collect only what we need to run the academy, communicate with you, and keep your information safe.
                </p>
            </div>
        </div>
    </section>

    {{-- CONTENT --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="soft-card p-10 space-y-8 reveal">
            <div>
                <h2 class="text-2xl font-semibold text-slate-900">Information we collect</h2>
                <ul class="mt-3 list-disc pl-5 text-slate-600 space-y-2">
                    <li>Contact details (name, phone, email) when you register or contact us.</li>
                    <li>Training preferences (cohort, instrument, skill level).</li>
                    <li>Basic site analytics (non-identifiable) to improve the website.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-slate-900">How we use information</h2>
                <ul class="mt-3 list-disc pl-5 text-slate-600 space-y-2">
                    <li>To schedule classes and confirm your cohort.</li>
                    <li>To respond to inquiries and support requests.</li>
                    <li>To share academy updates, events, and resources (opt out anytime).</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-slate-900">Sharing and storage</h2>
                <p class="mt-3 text-slate-600">
                    We do not sell or rent your information. Data is shared only with internal academy teams and trusted service
                    providers (e.g., email delivery) solely to operate the academy. We retain information as long as needed for
                    training and communication, then delete it when no longer required.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-slate-900">Your choices</h2>
                <ul class="mt-3 list-disc pl-5 text-slate-600 space-y-2">
                    <li>Request to view, update, or delete your information.</li>
                    <li>Opt out of non-essential communications at any time.</li>
                    <li>Contact us for privacy questions: <a href="mailto:amazinggraceacademyrwanda@gmail.com" class="text-emerald-700 font-semibold">amazinggraceacademyrwanda@gmail.com</a></li>
                </ul>
            </div>

            <div class="rounded-2xl border border-emerald-100 bg-emerald-50/70 p-4 text-sm text-slate-700">
                If we update this policy, we’ll post the new version here with the effective date.
            </div>
        </div>
    </section>
@endsection
