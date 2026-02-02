@extends('layouts.website')

@section('title', 'Thank you — Amazing Grace Academy')

@section('content')
    <section class="mx-auto max-w-2xl px-6 pt-20 pb-20">
        <div class="soft-card p-10 text-center reveal">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-sage-100 text-sage-700 mb-6">
                <x-ui.icon name="check-square" class="h-8 w-8" />
            </div>
            <h1 class="font-display text-2xl font-bold text-ink-900">Thank you</h1>
            @if (session('success'))
                <p class="mt-4 text-ink-600">{{ session('success') }}</p>
            @else
                <p class="mt-4 text-ink-600">Your order has been received. We will contact you to confirm delivery.</p>
            @endif
            @if (config('paypack.enabled'))
                <p class="mt-2 text-sm text-ink-500">Payments are processed securely via <a
                        href="https://payments.paypack.rw/" target="_blank" rel="noopener"
                        class="text-sage-600 hover:underline">PayPack</a> (MTN & Airtel Money).</p>
            @endif
            <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
                <x-ui.button href="{{ route('songs') }}" variant="primary" class="rounded-full">Continue
                    shopping</x-ui.button>
                <x-ui.button href="{{ route('home') }}" variant="outline" class="rounded-full">Back to home</x-ui.button>
            </div>
        </div>
    </section>
@endsection
