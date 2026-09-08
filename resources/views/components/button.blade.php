@props([
    'href' => '#',
    'variant' => 'primary',
    'size' => null,
    'block' => false,
])

@php
    $variantClass = match ($variant) {
        'outline' => 'btn--outline',
        'light' => 'btn--light',
        'ghost-light' => 'btn--ghost-light',
        default => 'btn--primary',
    };

    $classes = trim(
        'btn ' .
        $variantClass .
        ($size === 'sm' ? ' btn--sm' : '') .
        ($block ? ' btn--block' : '')
    );
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
