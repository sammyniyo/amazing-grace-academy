@extends('layouts.website')

@section('title', 'Checkout — Amazing Grace Academy')

@section('content')
    <section class="mx-auto max-w-3xl px-6 pt-16 pb-20">
        {{-- Breadcrumb --}}
        <nav class="reveal mb-8 text-sm text-ink-500">
            <a href="{{ route('songs') }}" class="hover:text-sage-600">Shop</a>
            <span class="mx-2">/</span>
            <span class="text-ink-700 font-medium">Checkout</span>
        </nav>

        <div class="reveal space-y-8">
            {{-- Order summary card --}}
            <div class="ui-hero-panel rounded-2xl border border-sage-100/80 p-6 sm:p-8">
                <div class="section-label mb-4">Order summary</div>
                <div class="flex gap-4 sm:gap-6">
                    <div
                        class="flex h-24 w-24 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-sage-100 to-gold-100 text-sage-600">
                        @if (strtolower($product->type ?? '') === 'album')
                            <i class="fa-solid fa-compact-disc text-3xl opacity-80"></i>
                        @elseif(strtolower($product->type ?? '') === 'hymnal')
                            <i class="fa-solid fa-book-open text-3xl opacity-80"></i>
                        @else
                            <i class="fa-solid fa-music text-3xl opacity-80"></i>
                        @endif
                    </div>
                    <div class="min-w-0 flex-1">
                        <span
                            class="pill bg-sage-50 text-sage-700 border border-sage-200">{{ ucfirst($product->type ?? 'Product') }}</span>
                        <h1 class="mt-2 font-display text-2xl font-semibold text-ink-900">{{ $product->title }}</h1>
                        <p class="mt-1 text-sm text-ink-600">
                            {{ $product->description ? \Illuminate\Support\Str::limit($product->description, 80) : 'Music resource from Amazing Grace Academy.' }}
                        </p>
                        <div class="mt-3 flex flex-wrap items-center gap-3 text-sm">
                            <span class="font-semibold text-ink-700">Qty: {{ $quantity }}</span>
                            <span class="text-ink-500">×</span>
                            <span class="text-ink-600">{{ number_format($product->price) }} RWF</span>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-between border-t border-sage-100 pt-6">
                    <span class="font-display text-lg font-semibold text-ink-800">Total</span>
                    <span class="font-display text-2xl font-semibold text-sage-700">{{ number_format($total) }} RWF</span>
                </div>
            </div>

            {{-- MTN Mobile Money highlight --}}
            @if (config('paypack.enabled'))
                <div
                    class="reveal rounded-2xl border-2 border-amber-200 bg-gradient-to-br from-amber-50 to-yellow-50 p-5 sm:p-6">
                    <div class="flex items-start gap-3">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-amber-100 text-amber-700">
                            <i class="fa-solid fa-mobile-screen-button text-xl"></i>
                        </div>
                        <div>
                            <h2 class="font-display text-lg font-semibold text-ink-900">Pay with MTN Mobile Money</h2>
                            <p class="mt-1 text-sm text-ink-600">Enter your MTN phone number below. You’ll receive a prompt
                                on your phone to approve the payment. Secure and instant.</p>
                            <p class="mt-2 text-xs text-ink-500">Format: 078xxxxxxx or 25078xxxxxxx</p>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Checkout form --}}
            <div class="reveal ui-hero-panel rounded-2xl border border-sage-100/80 p-6 sm:p-8">
                <h2 class="font-display text-xl font-semibold text-ink-900">Your details</h2>
                <p class="mt-1 text-sm text-ink-600">We’ll use this to send your order
                    confirmation{{ config('paypack.enabled') ? ' and the MTN payment request' : '' }}.</p>

                <form id="checkout-form" method="POST"
                    action="{{ config('paypack.enabled') ? route('order.paypack') : route('order.submit') }}"
                    class="mt-6 space-y-4">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="{{ $quantity }}">

                    <div>
                        <label for="name" class="block text-sm font-medium text-ink-700">Full name <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" required value="{{ old('name') }}"
                            placeholder="e.g. Jean Claude"
                            class="mt-1.5 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-ink-900 placeholder-ink-400 focus:border-sage-500 focus:ring-2 focus:ring-sage-500/20 @error('name') border-red-400 @enderror">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-ink-700">Phone number <span
                                class="text-red-500">*</span></label>
                        <input type="tel" id="phone" name="phone" required value="{{ old('phone') }}"
                            placeholder="078 123 4567"
                            class="mt-1.5 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-ink-900 placeholder-ink-400 focus:border-sage-500 focus:ring-2 focus:ring-sage-500/20 @error('phone') border-red-400 @enderror">
                        @if (config('paypack.enabled'))
                            <p class="mt-1 text-xs text-ink-500">MTN number for payment prompt</p>
                        @endif
                        @error('phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-ink-700">Email (optional)</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            placeholder="you@example.com"
                            class="mt-1.5 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-ink-900 placeholder-ink-400 focus:border-sage-500 focus:ring-2 focus:ring-sage-500/20 @error('email') border-red-400 @enderror">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    @if (session('error'))
                        <div class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="flex flex-col gap-3 pt-4 sm:flex-row sm:items-center">
                        @if (config('paypack.enabled'))
                            <button type="submit" form="checkout-form" formaction="{{ route('order.paypack') }}"
                                class="order-2 sm:order-1 inline-flex items-center justify-center gap-2 rounded-xl bg-amber-500 px-6 py-3.5 text-base font-semibold text-white shadow-md hover:bg-amber-600 focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                                Pay {{ number_format($total) }} RWF with MTN
                            </button>
                            <button type="submit" form="checkout-form" formaction="{{ route('order.submit') }}"
                                class="order-1 sm:order-2 inline-flex items-center justify-center rounded-xl border border-ink-200 bg-white px-6 py-3.5 text-base font-semibold text-ink-700 hover:bg-cream-50 transition">
                                Place order (pay later)
                            </button>
                        @else
                            <button type="submit"
                                class="inline-flex items-center justify-center gap-2 rounded-xl bg-sage-600 px-6 py-3.5 text-base font-semibold text-white hover:bg-sage-700 focus:ring-2 focus:ring-sage-500 focus:ring-offset-2 transition">
                                Place order
                            </button>
                        @endif
                    </div>
                </form>
            </div>

            <p class="reveal text-center text-xs text-ink-500">
                By placing an order you agree to our <a href="{{ route('terms') }}"
                    class="text-sage-600 hover:underline">Terms</a> and <a href="{{ route('privacy') }}"
                    class="text-sage-600 hover:underline">Privacy</a>. Payments are processed securely.
            </p>
        </div>
    </section>
@endsection
