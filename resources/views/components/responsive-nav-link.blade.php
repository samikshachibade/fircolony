@props(['active'])

@php
$classes = "bg-gray-300 text-gray-500 text-sm  px-2 py-1"
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
