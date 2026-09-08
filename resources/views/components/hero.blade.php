<section class="hero hero--photo" id="home">
    <img
        class="hero__bg"
        src="{{ asset('images/hero-cafe-bg.png') }}"
        alt=""
        aria-hidden="true"
    >
    <div class="hero__overlay"></div>

    <div class="container hero__photo-content">
        <div class="hero__copy">
            <span class="label">Anabu, Imus</span>

            <h1 class="hero__title">
                Premium coffee for your everyday moments.
            </h1>

            <p class="hero__text">
                Coffee, frappes, matcha, and tea made for everyday life.
                Great taste, quality ingredients, and takeaway convenience
                right here in Anabu, Imus.
            </p>

            <div class="hero__buttons">
                <x-button href="#menu">
                    Explore Menu Picks
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="M5 12h14M13 6l6 6-6 6"/>
                    </svg>
                </x-button>

                <x-button href="#features" variant="light">
                    <span class="hero__play">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                            <path d="m9 7 8 5-8 5V7Z"/>
                        </svg>
                    </span>
                    See the Experience
                </x-button>
            </div>

            <div class="stats">
                <div class="stat">
                    <span class="stat__icon">
                        <svg width="19" height="19" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="M4 8h13v5a6 6 0 0 1-6 6H10a6 6 0 0 1-6-6V8Z"/>
                            <path d="M17 9h1.5a2.5 2.5 0 0 1 0 5H17"/>
                            <path d="M6 3.5c.6.7.6 1.3 0 2M10 3.5c.6.7.6 1.3 0 2M14 3.5c.6.7.6 1.3 0 2"/>
                        </svg>
                    </span>
                    <div class="stat__value">36+</div>
                    <div class="stat__label">Products</div>
                </div>

                <div class="stat">
                    <span class="stat__icon">
                        <svg width="19" height="19" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="M8 14a4 4 0 1 1 8 0"/>
                            <circle cx="12" cy="8" r="3"/>
                            <path d="M3 20c.4-3 2.3-5 5-5M21 20c-.4-3-2.3-5-5-5"/>
                        </svg>
                    </span>
                    <div class="stat__value">100+</div>
                    <div class="stat__label">Happy Customers</div>
                </div>

                <div class="stat">
                    <span class="stat__icon">
                        <svg width="19" height="19" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="M12.5 3H20v7.5L11 19.5 4.5 13 12.5 3Z"/>
                            <circle cx="16.5" cy="7" r="1.3"/>
                        </svg>
                    </span>
                    <div class="stat__value">From ₱67</div>
                    <div class="stat__label">Starting Price</div>
                </div>
            </div>
        </div>
    </div>
</section>
