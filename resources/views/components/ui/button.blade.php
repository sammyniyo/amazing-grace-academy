@props([
    'variant' => 'primary', // primary | accent | glass | outline | ghost
    'type' => null, // only used when rendered as <button>
])

@php
    $base =
        'inline-flex items-center justify-center font-semibold transition-all duration-200 select-none elevate disabled:opacity-50 disabled:cursor-not-allowed';
    $shape = 'rounded-2xl px-6 py-3 text-sm';
    $variants = [
        'primary' => 'bg-ink-900 text-white shadow-sm hover:bg-ink-800 active:scale-[0.98]',
        'accent' => 'bg-sage-600 text-white shadow-sm hover:bg-sage-500 active:scale-[0.98]',
        'glass' => 'glass text-ink-700 hover:bg-white/95',
        'outline' => 'border border-ink-200 bg-white text-ink-700 hover:bg-cream-50 hover:border-sage-200 active:scale-[0.98]',
        'ghost' => 'text-ink-700 hover:bg-sage-50/80',
    ];

    $isLink = $attributes->has('href');
    $buttonType = $type ?? 'button';
@endphp

@if ($isLink)
    <a {{ $attributes->merge(['class' => "$base $shape {$variants[$variant]}"]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $buttonType }}" {{ $attributes->merge(['class' => "$base $shape {$variants[$variant]}"]) }}>
        {{ $slot }}
    </button>
@endif
