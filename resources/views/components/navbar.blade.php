<header class="nav">
    <div class="container nav__inner">
        <a class="brand" href="#home">
            <span class="brand__mark">
                <img src="{{ asset('images/logo.png') }}" alt="Daily Drip Café logo">
            </span>

            <span>
                <span class="brand__name">Daily Drip Café</span>
                <span class="brand__tag">Fresh Brews. Better Days.</span>
            </span>
        </a>

        <nav class="nav__links" aria-label="Primary navigation">
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#menu">Menu</a>
            <a href="#pricing">Pricing</a>
            <a href="#testimonials">Testimonials</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="nav__actions">
            <x-button href="#contact" variant="outline" size="sm">Sign In</x-button>
            <x-button href="#menu" size="sm">Get Started</x-button>

            <button class="hamburger" type="button" aria-label="Open navigation menu">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8" stroke-linecap="round">
                    <path d="M3 6h18M3 12h18M3 18h18"/>
                </svg>
            </button>
        </div>
    </div>
</header>
