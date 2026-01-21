@extends('layouts.website')

@section('title', 'Terms of Use — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-20 pb-16">
        <div class="page-hero px-6 py-10 sm:px-10 lg:px-12">
            <div class="space-y-4">
                <div class="flex flex-wrap items-center gap-3 text-sm text-teal-700">
                    <span class="pill bg-white border border-emerald-100 text-emerald-700 shadow-sm">Terms of Use</span>
                    <span class="pill bg-white border border-amber-100 text-amber-700 shadow-sm">Updated {{ date('Y') }}</span>
                </div>
                <h1 class="text-4xl sm:text-5xl font-semibold tracking-tight text-slate-900 leading-tight">
                    Guidelines for using our site and services
                </h1>
                <p class="text-lg leading-relaxed text-slate-600 max-w-3xl">
                    By visiting this site or registering for training, you agree to these terms. If you have questions, contact us.
                </p>
            </div>
        </div>
    </section>

    {{-- CONTENT --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="soft-card p-10 space-y-8 reveal">
            <div>
                <h2 class="text-2xl font-semibold text-slate-900">Use of the website</h2>
                <ul class="mt-3 list-disc pl-5 text-slate-600 space-y-2">
                    <li>Content is for information about Amazing Grace Academy and its programs.</li>
                    <li>Do not misuse the site (e.g., sending spam, attempting unauthorized access).</li>
                    <li>Links to third parties are provided for convenience; we are not responsible for their content.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-slate-900">Registration and participation</h2>
                <ul class="mt-3 list-disc pl-5 text-slate-600 space-y-2">
                    <li>Provide accurate information when registering for a cohort.</li>
                    <li>Attendance and participation follow academy schedules and guidelines.</li>
                    <li>We may adjust schedules or cohort sizes based on resources and instrument availability.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-slate-900">Intellectual property</h2>
                <p class="mt-3 text-slate-600">
                    Site design, text, media, and resources belong to Amazing Grace Academy unless noted. Do not copy or
                    redistribute without permission, except for personal, non-commercial use within your church or group.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-slate-900">Disclaimer</h2>
                <p class="mt-3 text-slate-600">
                    We aim to keep information accurate but do not guarantee completeness. Training is provided as-is; schedules
                    and availability may change. We are not liable for indirect or consequential losses from site use.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-slate-900">Contact</h2>
                <p class="mt-3 text-slate-600">
                    For any term-related questions, email <a href="mailto:amazinggraceacademyrwanda@gmail.com" class="text-emerald-700 font-semibold">amazinggraceacademyrwanda@gmail.com</a>
                    or call <a href="tel:+250788261729" class="text-emerald-700 font-semibold">+250 788 261 729</a>.
                </p>
            </div>

            <div class="rounded-2xl border border-emerald-100 bg-emerald-50/70 p-4 text-sm text-slate-700">
                Continued use of this site indicates acceptance of these terms. If you disagree, please discontinue using the site.
            </div>
        </div>
    </section>
@endsection
