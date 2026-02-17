@extends('layouts.website')

@section('title', 'Checkout — Amazing Grace Academy')

@section('content')
    {{-- Step strip (matches shop: 1 Choose → 2 Details → 3 Pay) --}}
    <section class="border-b border-ink-100 bg-white/80 backdrop-blur-sm sticky top-[72px] z-30">
        <div class="mx-auto max-w-4xl px-4 py-3 sm:px-6">
            <div class="flex items-center justify-center gap-2 sm:gap-6 text-xs sm:text-sm font-medium text-ink-500">
                <a href="{{ route('songs') }}" class="flex items-center gap-2 hover:text-ink-700 transition-colors">
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-sage-100 text-sage-700 font-semibold">1</span>
                    <span>Choose</span>
                </a>
                <span class="text-ink-300">→</span>
                <span class="flex items-center gap-2">
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-sage-600 text-white font-semibold">2</span>
                    <span class="text-ink-700">Your details</span>
                </span>
                <span class="text-ink-300">→</span>
                <span class="flex items-center gap-2">
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full border-2 border-ink-200 text-ink-400">3</span>
                    <span>Pay</span>
                </span>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-2xl px-4 sm:px-6 pt-10 pb-20">
        <div class="reveal space-y-10">
            {{-- Step 1: Your order (summary + change link) --}}
            <div>
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-semibold uppercase tracking-wider text-sage-600">Step 1 — Your order</span>
                    <a href="{{ route('songs') }}" class="text-sm font-semibold text-sage-600 hover:text-sage-700">Change</a>
                </div>
                <div class="rounded-2xl border border-ink-100 bg-white p-5 sm:p-6">
                    <div class="flex gap-4">
                        <div class="h-20 w-20 shrink-0 overflow-hidden rounded-xl bg-sage-100 flex items-center justify-center">
                            @if ($product->cover_url ?? null)
                                <img src="{{ $product->cover_url }}" alt="" class="h-full w-full object-cover">
                            @else
                                <i class="fas fa-music text-2xl text-sage-500"></i>
                            @endif
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-xs font-semibold text-sage-600 uppercase tracking-wider">{{ ucfirst($product->type ?? 'Product') }}</p>
                            <h1 class="mt-1 font-display text-xl font-semibold text-ink-900">{{ $product->title }}</h1>
                            <p class="mt-2 text-sm text-ink-500">{{ $quantity }} × {{ number_format($product->price) }} RWF</p>
                        </div>
                        <div class="text-right">
                            <p class="font-display text-xl font-semibold text-ink-900">{{ number_format($total) }} RWF</p>
                            <p class="text-xs text-ink-500 mt-0.5">Total</p>
                        </div>
                    </div>
                    <form method="GET" action="{{ route('checkout.show') }}" class="mt-4 pt-4 border-t border-ink-100 flex items-center gap-3">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <label class="text-sm text-ink-600">Qty</label>
                        <select name="quantity" onchange="this.form.submit()" class="rounded-lg border border-ink-200 px-3 py-1.5 text-sm w-16">
                            @for ($i = 1; $i <= 10; $i++)
                                <option value="{{ $i }}" @selected($quantity === $i)>{{ $i }}</option>
                            @endfor
                        </select>
                    </form>
                </div>
            </div>

            {{-- Step 2: Your details --}}
            <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-sage-600 mb-4">Step 2 — Your details</p>
                <div class="rounded-2xl border border-ink-100 bg-white p-5 sm:p-6">
                    <form id="checkout-form" method="POST" action="{{ config('paypack.enabled') ? route('order.paypack') : route('order.submit') }}" class="space-y-4">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="{{ $quantity }}">

                        <div>
                            <label for="name" class="block text-sm font-medium text-ink-700">Full name</label>
                            <input type="text" id="name" name="name" required value="{{ old('name') }}" placeholder="Jean Claude"
                                class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-ink-900 placeholder-ink-400 focus:border-sage-500 focus:ring-2 focus:ring-sage-500/20 @error('name') border-red-400 @enderror">
                            @error('name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-ink-700">Phone</label>
                            <input type="tel" id="phone" name="phone" required value="{{ old('phone') }}" placeholder="078 123 4567"
                                class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-ink-900 placeholder-ink-400 focus:border-sage-500 focus:ring-2 focus:ring-sage-500/20 @error('phone') border-red-400 @enderror">
                            @if (config('paypack.enabled'))<p class="mt-1 text-xs text-ink-500">MTN for payment prompt</p>@endif
                            @error('phone')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-ink-700">Email (optional)</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com"
                                class="mt-1 w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-ink-900 placeholder-ink-400 focus:border-sage-500 focus:ring-2 focus:ring-sage-500/20 @error('email') border-red-400 @enderror">
                            @error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>

                        @if (session('error'))
                            <div class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">{{ session('error') }}</div>
                        @endif

                        {{-- Step 3: Pay (buttons inside same form) --}}
                        <div class="pt-6 border-t border-ink-100">
                            <p class="text-xs font-semibold uppercase tracking-wider text-sage-600 mb-4">Step 3 — Pay</p>
                            @if (config('paypack.enabled'))
                                <button type="submit" form="checkout-form" formaction="{{ route('order.paypack') }}"
                                    class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-xl bg-amber-500 px-6 py-3.5 text-base font-semibold text-white hover:bg-amber-600 focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition">
                                    <i class="fas fa-mobile-alt"></i>
                                    Pay {{ number_format($total) }} RWF with MTN
                                </button>
                                <button type="submit" form="checkout-form" formaction="{{ route('order.submit') }}"
                                    class="mt-3 sm:ml-3 sm:mt-0 inline-flex items-center justify-center rounded-xl border border-ink-200 bg-white px-6 py-3.5 text-base font-semibold text-ink-700 hover:bg-cream-50 transition">
                                    Place order (pay later)
                                </button>
                            @else
                                <button type="submit" class="inline-flex items-center justify-center gap-2 rounded-xl bg-sage-600 px-6 py-3.5 text-base font-semibold text-white hover:bg-sage-700 focus:ring-2 focus:ring-sage-500 focus:ring-offset-2 transition">
                                    Place order
                                </button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <p class="text-center text-xs text-ink-500">
                By placing an order you agree to our <a href="{{ route('terms') }}" class="text-sage-600 hover:underline">Terms</a> and <a href="{{ route('privacy') }}" class="text-sage-600 hover:underline">Privacy</a>.
            </p>
        </div>
    </section>
@endsection
