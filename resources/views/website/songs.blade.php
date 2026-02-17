@extends('layouts.website')

@section('title', 'Music Shop — Amazing Grace Academy')

@section('content')
    {{-- Step strip (Yeezy-style: minimal, clear steps) --}}
    <section class="border-b border-ink-100 bg-white/80 backdrop-blur-sm sticky top-[72px] z-30">
        <div class="mx-auto max-w-4xl px-4 py-3 sm:px-6">
            <div class="flex items-center justify-center gap-2 sm:gap-6 text-xs sm:text-sm font-medium text-ink-500">
                <span class="flex items-center gap-2">
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-sage-600 text-white font-semibold">1</span>
                    <span class="text-ink-700">Choose</span>
                </span>
                <span class="text-ink-300">→</span>
                <span class="flex items-center gap-2">
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full border-2 border-ink-200 text-ink-400">2</span>
                    <span>Your details</span>
                </span>
                <span class="text-ink-300">→</span>
                <span class="flex items-center gap-2">
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full border-2 border-ink-200 text-ink-400">3</span>
                    <span>Pay</span>
                </span>
            </div>
        </div>
    </section>

    {{-- Hero: minimal --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 pt-10 pb-6">
        <div class="reveal text-center max-w-2xl mx-auto">
            <p class="section-label">Music Shop</p>
            <h1 class="mt-3 font-display text-3xl sm:text-4xl font-semibold text-ink-900 tracking-tight">
                Albums, hymnals & resources
            </h1>
            <p class="mt-2 text-ink-600 text-sm sm:text-base">
                Choose a product below. You’ll enter your details and pay in the next steps.
            </p>
        </div>
    </section>

    {{-- Flash & PayPack --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 pb-4">
        @if (session('success'))
            <div class="reveal mb-4 rounded-xl border border-sage-200 bg-sage-50 px-4 py-3 text-sm text-sage-800 font-medium">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="reveal mb-4 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800 font-medium">
                {{ session('error') }}
            </div>
        @endif
        @if (config('paypack.enabled'))
            <p class="reveal text-center text-xs text-ink-500">
                Pay with <strong>MTN</strong> or <strong>Airtel Money</strong> at checkout.
            </p>
        @endif
    </section>

    {{-- Product grid: clean cards, one CTA --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 pb-16">
        <div class="grid gap-6 sm:gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($products as $product)
                <div class="reveal group">
                    <a href="{{ route('checkout.show', ['product_id' => $product->id, 'quantity' => 1]) }}"
                        class="block rounded-2xl border border-ink-100 bg-white overflow-hidden shadow-sm transition-all duration-300 hover:shadow-card-hover hover:border-sage-200">
                        <div class="aspect-[4/3] bg-gradient-to-br from-sage-100 via-cream-50 to-gold-100 flex items-center justify-center overflow-hidden">
                            @if ($product->cover_url ?? null)
                                <img src="{{ $product->cover_url }}" alt="" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                @if (strtolower($product->type ?? '') === 'album')
                                    <i class="fas fa-compact-disc text-5xl text-sage-400/80"></i>
                                @elseif(strtolower($product->type ?? '') === 'hymnal')
                                    <i class="fas fa-book-open text-5xl text-sage-400/80"></i>
                                @else
                                    <i class="fas fa-music text-5xl text-sage-400/80"></i>
                                @endif
                            @endif
                        </div>
                        <div class="p-5 sm:p-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-sage-600">{{ ucfirst($product->type ?? 'Product') }}</span>
                            <h2 class="mt-2 font-display text-xl font-semibold text-ink-900">{{ $product->title }}</h2>
                            <p class="mt-1 text-sm text-ink-500 line-clamp-2">
                                {{ $product->description ?? 'Music resource from Amazing Grace Academy.' }}
                            </p>
                            <div class="mt-4 flex items-center justify-between gap-3">
                                <span class="font-display text-lg font-semibold text-ink-900">{{ number_format($product->price) }} RWF</span>
                                <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-sage-600 group-hover:gap-2 transition-all">
                                    Get it <i class="fas fa-arrow-right text-xs"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full reveal rounded-2xl border border-ink-100 bg-white p-12 text-center">
                    <i class="fas fa-box-open text-4xl text-ink-300 mb-4"></i>
                    <p class="text-ink-600 font-medium">No products available yet.</p>
                    <p class="text-sm text-ink-500 mt-1">Check back soon or contact us for bulk orders.</p>
                    <x-ui.button href="{{ route('contact') }}" variant="primary" class="mt-6 rounded-full px-5 py-2.5 text-sm">Contact us</x-ui.button>
                </div>
            @endforelse
        </div>
    </section>

    {{-- CTA --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 pb-20">
        <div class="reveal rounded-2xl border border-sage-100 bg-sage-50/50 p-8 text-center">
            <p class="text-sm font-semibold text-sage-700">Bulk orders or custom arrangements</p>
            <p class="mt-1 text-sm text-ink-600">Reach out for church orders or choir resources.</p>
            <x-ui.button href="{{ route('contact') }}?topic=Music+Shop" variant="outline" class="mt-4 rounded-full px-4 py-2 text-sm">Contact Music Shop</x-ui.button>
        </div>
    </section>
@endsection
