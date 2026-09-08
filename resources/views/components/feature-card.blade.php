@props(['title', 'description'])

<article class="feature">
    <span class="feature__icon">
        {{ $icon }}
    </span>

    <div class="feature__body">
        <h3 class="feature__title">{{ $title }}</h3>
        <p class="feature__text">{{ $description }}</p>
    </div>
</article>
