@extends('layouts.website')

@section('title', 'Registration received — Amazing Grace Academy')

@section('content')
    <section class="mx-auto max-w-2xl px-6 pt-20 pb-24 text-center">
        <div class="reveal">
            <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-sage-100 text-sage-600" aria-hidden="true">
                <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h1 class="mt-6 font-display text-3xl font-semibold tracking-tight text-ink-900 sm:text-4xl">
                We received your registration
            </h1>
            <p class="mt-4 text-lg text-ink-600">
                Thank you for signing up. We'll confirm your cohort and schedule within 24 hours. If you gave us your phone or email, we'll reach out there.
            </p>
            <div class="mt-8 rounded-2xl border border-sage-200 bg-sage-50/80 px-6 py-5 text-left">
                <p class="text-sm font-semibold text-sage-800">What happens next</p>
                <ul class="mt-2 space-y-2 text-sm text-sage-700">
                    <li class="flex items-start gap-2">
                        <span class="mt-0.5 h-1.5 w-1.5 shrink-0 rounded-full bg-sage-500"></span>
                        We'll assign you to a cohort and send you the time and location.
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="mt-0.5 h-1.5 w-1.5 shrink-0 rounded-full bg-sage-500"></span>
                        If the cohort you chose is full, we'll add you to the waitlist and contact you when a spot opens.
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="mt-0.5 h-1.5 w-1.5 shrink-0 rounded-full bg-sage-500"></span>
                        Join us on Saturday at Kigali Bilingual Church and bring your enthusiasm.
                    </li>
                </ul>
            </div>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('home') }}" class="inline-flex items-center justify-center rounded-xl bg-sage-600 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-sage-700 focus:outline-none focus:ring-2 focus:ring-sage-500 focus:ring-offset-2">
                    Back to home
                </a>
                <a href="{{ route('education') }}" class="inline-flex items-center justify-center rounded-xl border border-ink-200 bg-white px-5 py-3 text-sm font-semibold text-ink-700 hover:bg-ink-50 focus:outline-none focus:ring-2 focus:ring-sage-500 focus:ring-offset-2">
                    Explore programs
                </a>
            </div>
        </div>
    </section>
@endsection
