@props([
    'href' => '#',
    'variant' => 'primary',
])

@php
    $styles = match ($variant) {
        'secondary' => 'border border-stone-300 bg-white text-stone-900 hover:border-coffee-500 hover:text-coffee-700',
        'dark' => 'bg-stone-950 text-white hover:bg-stone-800',
        default => 'bg-coffee-600 text-white hover:bg-coffee-700',
    };
@endphp

<a href="{{ $href }}"
   {{ $attributes->merge([
       'class' => "inline-flex items-center justify-center rounded-full px-5 py-3 text-sm font-semibold transition duration-200 focus:outline-none focus:ring-2 focus:ring-coffee-500 focus:ring-offset-2 {$styles}"
   ]) }}>
    {{ $slot }}
</a>
