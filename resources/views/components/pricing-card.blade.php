@props([
    'name',
    'price',
    'description',
    'features' => [],
    'featured' => false,
    'image' => null,
])

<article @class(['price', 'price--featured' => $featured])>
    @if($featured)
        <span class="price__badge">POPULAR</span>
    @endif

    @if($image)
        <img class="price__image" src="{{ asset($image) }}" alt="{{ $name }} drink">
    @endif

    <div class="price__content">
        <div class="price__name">{{ $name }}</div>
        <div class="price__amount">{{ $price }}</div>
        <p class="price__desc">{{ $description }}</p>

        <ul class="price__list">
            @foreach($features as $feature)
                <li>
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="m6 12 4 4 8-9"/>
                    </svg>
                    {{ $feature }}
                </li>
            @endforeach
        </ul>

        <x-button
            href="#contact"
            :variant="$featured ? 'primary' : 'outline'"
            :block="true"
        >
            Choose This
        </x-button>
    </div>
</article>
