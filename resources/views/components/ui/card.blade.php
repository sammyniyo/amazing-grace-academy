@props([
    'variant' => 'glass', // glass | glass-dark | plain
    'class' => '',
])

@php
    $base = 'rounded-[28px]';
    $variants = [
        'glass' => 'glass',
        'glass-dark' => 'glass-dark',
        'plain' => '',
    ];

    $variantClass = $variants[$variant] ?? $variants['glass'];
@endphp

<div {{ $attributes->merge(['class' => trim("$base $variantClass $class")]) }}>
    {{ $slot }}
</div>
