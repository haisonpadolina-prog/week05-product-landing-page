@props(['image', 'name', 'role', 'review'])

<article class="testi">
    <div class="testi__head">
        <img
            class="testi__avatar"
            src="{{ asset($image) }}"
            alt="Sample customer portrait"
        >

        <div>
            <div class="testi__name">{{ $name }}</div>
            <div class="testi__role">{{ $role }}</div>
        </div>
    </div>

    <div class="stars" aria-label="5 stars">
        @for($i = 0; $i < 5; $i++)
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="m12 3 2.7 5.7 6.3.8-4.6 4.3 1.2 6.2L12 17.1 6.4 20l1.2-6.2L3 9.5l6.3-.8L12 3Z"/>
            </svg>
        @endfor
    </div>

    <p class="testi__quote">&ldquo;{{ $review }}&rdquo;</p>
</article>
