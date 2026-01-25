@props([
    'variant' => 'primary', // primary | glass | outline | ghost
])

@php
    $base = 'inline-flex items-center justify-center font-semibold transition select-none elevate';
    $shape = 'rounded-2xl px-6 py-3 text-sm';
    $variants = [
        'primary' => 'bg-slate-900 text-white shadow-sm hover:bg-slate-800',
        'glass' => 'glass text-slate-700 hover:bg-white',
        'outline' => 'border border-slate-200 bg-white text-slate-700 hover:bg-slate-50',
        'ghost' => 'text-slate-700 hover:bg-slate-50',
    ];
@endphp

<a {{ $attributes->merge(['class' => "$base $shape {$variants[$variant]}"]) }}>
    {{ $slot }}
</a>
