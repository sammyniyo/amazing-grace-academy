@props(['class' => ''])

<div {{ $attributes->merge(['class' => "glass rounded-[28px] $class"]) }}>
    {{ $slot }}
</div>
