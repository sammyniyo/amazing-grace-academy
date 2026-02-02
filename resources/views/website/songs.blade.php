@extends('layouts.website')

@section('title', 'Music Shop — Amazing Grace Academy')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="mx-auto max-w-7xl px-6 pt-16 pb-12">
        <div class="ui-hero-panel px-8 py-12 sm:px-12 lg:px-14">
            <div class="grid items-center gap-12 lg:grid-cols-[1.1fr_0.9fr]">
                <div class="reveal space-y-5">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="section-label">Music Shop</span>
                        <span class="pill bg-gold-50 text-gold-700 border border-gold-200">Albums • Hymnals • Bundles</span>
                    </div>
                    <h1 class="font-display text-4xl sm:text-5xl font-semibold tracking-tight text-ink-900 leading-tight">
                        Equip your choir and support the mission.
                    </h1>
                    <p class="text-lg leading-relaxed text-ink-600 max-w-2xl">
                        Buy albums, Sol-Fa hymnals, sight-reading workbooks, and church bundles. Digital & physical; every
                        purchase helps fund instruments.
                    </p>
                    <div class="flex flex-wrap gap-2 text-sm text-ink-600">
                        <span class="pill bg-white/80 border border-sage-200 text-sage-700">Digital & Physical</span>
                        <span class="pill bg-white/80 border border-sage-200 text-sage-700">PayPack (MTN/Airtel)</span>
                        <span class="pill bg-white/80 border border-sage-200 text-sage-700">Local pickup</span>
                    </div>
                </div>
                <div class="reveal reveal-delay-1 relative">
                    <div
                        class="relative rounded-[28px] overflow-hidden bg-white shadow-card-hover border border-sage-100/80">
                        <div
                            class="aspect-[4/5] bg-gradient-to-br from-sage-100 via-cream-50 to-gold-100 flex items-center justify-center">
                            <i class="fa-solid fa-music text-6xl text-sage-400/80"></i>
                        </div>
                        <div
                            class="absolute left-4 top-4 rounded-full bg-white/95 px-4 py-2 text-xs font-semibold text-sage-700 shadow-sm border border-sage-100/80">
                            Featured • Hymns & Resources
                        </div>
                        <div
                            class="absolute bottom-4 left-4 right-4 rounded-2xl bg-white/95 px-4 py-3 shadow-card border border-sage-100/80">
                            <div class="text-[11px] text-ink-500 uppercase tracking-wide">Every purchase</div>
                            <div class="font-display text-base font-semibold text-sage-700 mt-0.5">Supports instruments fund
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FLASH & PAYPACK BANNER --}}
    <section class="mx-auto max-w-7xl px-6 pb-6">
        @if (session('success'))
            <div
                class="reveal mb-4 rounded-2xl border border-sage-200 bg-sage-50 px-4 py-3 text-sm text-sage-800 font-medium">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="reveal mb-4 rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800 font-medium">
                {{ session('error') }}
            </div>
        @endif
        @if (config('paypack.enabled'))
            <div class="reveal mb-4 rounded-2xl border border-sage-200 bg-sage-50/80 px-4 py-3 text-sm text-sage-800">
                Pay with <strong>MTN</strong> or <strong>Airtel Money</strong> at checkout via <a
                    href="https://payments.paypack.rw/" target="_blank" rel="noopener"
                    class="font-semibold text-sage-600 underline hover:text-sage-700">PayPack</a>. Enter your phone number
                when you click “Pay with PayPack”.
            </div>
        @endif
    </section>

    {{-- SHOP GRID --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal flex items-center justify-between gap-4 mb-8 flex-wrap">
            <div>
                <h2 class="font-display text-2xl font-semibold text-ink-900">All products</h2>
                <p class="text-ink-600 text-sm mt-1">Select a product, add your details, and place order or pay with
                    PayPack.</p>
            </div>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($products as $product)
                <div class="reveal soft-card overflow-hidden group hover:shadow-card-hover transition-all duration-300">
                    <div
                        class="h-44 w-full bg-gradient-to-br from-sage-100 via-cream-50 to-gold-100 flex items-center justify-center text-sage-600">
                        @if (strtolower($product->type ?? '') === 'album')
                            <i class="fa-solid fa-compact-disc text-5xl opacity-70"></i>
                        @elseif(strtolower($product->type ?? '') === 'hymnal')
                            <i class="fa-solid fa-book-open text-5xl opacity-70"></i>
                        @else
                            <i class="fa-solid fa-music text-5xl opacity-70"></i>
                        @endif
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-center justify-between gap-2">
                            <span class="pill-green">{{ ucfirst($product->type ?? 'Product') }}</span>
                            @if ($product->format)
                                <span class="text-xs text-ink-500">{{ $product->format }}</span>
                            @endif
                        </div>
                        <h3 class="font-display text-xl font-semibold text-ink-900">{{ $product->title }}</h3>
                        <p class="text-sm text-ink-600 leading-relaxed line-clamp-2">
                            {{ $product->description ?? 'Music resource from Amazing Grace Academy.' }}
                        </p>
                        <div class="flex items-baseline justify-between gap-2">
                            <span
                                class="font-display text-xl font-semibold text-sage-700">{{ number_format($product->price) }}
                                RWF</span>
                        </div>

                        <form class="space-y-3" method="GET" action="{{ route('checkout.show') }}">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="flex items-center gap-2">
                                <label class="text-xs font-medium text-ink-600">Qty</label>
                                <select name="quantity"
                                    class="rounded-xl border border-ink-200 bg-white px-3 py-2 text-sm focus:ring-2 focus:ring-sage-400 focus:border-sage-400 w-20">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            @if (config('paypack.enabled'))
                                <x-ui.button type="submit" variant="primary" class="w-full rounded-xl">
                                    <i class="fa-solid fa-mobile-screen-button mr-2"></i> Checkout with MTN
                                </x-ui.button>
                            @else
                                <x-ui.button type="submit" variant="primary"
                                    class="w-full rounded-xl">Checkout</x-ui.button>
                            @endif
                        </form>
                    </div>
                </div>
            @empty
                <div class="col-span-full reveal soft-card p-12 text-center">
                    <i class="fa-solid fa-box-open text-4xl text-ink-300 mb-4"></i>
                    <p class="text-ink-600 font-medium">No products available yet.</p>
                    <p class="text-sm text-ink-500 mt-1">Check back soon or contact us for bulk orders.</p>
                    <x-ui.button href="{{ route('contact') }}" variant="primary" class="mt-6 rounded-xl">Contact
                        us</x-ui.button>
                </div>
            @endforelse
        </div>
    </section>

    {{-- BUNDLES CTA --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
            <div>
                <div class="section-label">Bundle offers</div>
                <h2 class="mt-3 font-display text-2xl font-semibold text-ink-900">Equip choirs and churches</h2>
                <p class="mt-2 text-ink-600 text-sm">Church packs, learner packs, and custom bundles. We’ll quote and
                    deliver.</p>
            </div>
        </div>
        <div class="mt-8 grid gap-6 md:grid-cols-2">
            <div class="reveal soft-card p-8">
                <div class="pill-green">Church Pack</div>
                <h3 class="mt-3 font-display text-xl font-semibold text-ink-900">Hymns Renewed + Hymnal Set</h3>
                <p class="mt-2 text-ink-600 text-sm">Album plus 5 Sol-Fa hymnals for choir leaders and sections.</p>
                <div class="mt-4 font-display text-xl font-semibold text-sage-700">22,000 RWF</div>
                <x-ui.button href="{{ route('contact') }}?topic=Church+Pack" variant="outline"
                    class="mt-4 w-full rounded-xl">Request quote</x-ui.button>
            </div>
            <div class="reveal soft-card p-8">
                <div class="pill bg-gold-50 text-gold-700 border border-gold-200">Learner Pack</div>
                <h3 class="mt-3 font-display text-xl font-semibold text-ink-900">Workbook + Audio Drills</h3>
                <p class="mt-2 text-ink-600 text-sm">Sight-reading drills with downloadable audio for practice.</p>
                <div class="mt-4 font-display text-xl font-semibold text-sage-700">9,500 RWF</div>
                <x-ui.button href="{{ route('contact') }}?topic=Learner+Pack" variant="outline"
                    class="mt-4 w-full rounded-xl">Request quote</x-ui.button>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="mx-auto max-w-7xl px-6 pb-20">
        <div class="reveal soft-card p-10 text-center">
            <div class="section-label inline-flex">Need something special?</div>
            <h2 class="mt-4 font-display text-2xl font-semibold text-ink-900">Bulk hymnals or custom arrangements</h2>
            <p class="mt-4 text-ink-600 leading-relaxed max-w-2xl mx-auto">
                Reach out for church orders, bulk hymnals, or a special choir arrangement.
            </p>
            <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center">
                <x-ui.button href="{{ route('contact') }}?topic=Music+Shop" variant="primary" class="rounded-xl">Contact
                    Music Shop</x-ui.button>
                <x-ui.button href="{{ route('contact') }}" variant="outline" class="rounded-xl">Talk to a
                    lead</x-ui.button>
            </div>
        </div>
    </section>
@endsection
