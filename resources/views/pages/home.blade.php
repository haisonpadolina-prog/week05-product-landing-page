@extends('layouts.app')

@section('title', 'Daily Drip Café | Fresh Brews. Better Days. — Anabu, Imus')
@section('description', 'Daily Drip Café in Anabu, Imus, Cavite. Premium coffee, frappes, matcha, and fruit tea for your everyday moments. Starting at ₱67.')

@section('content')
    <x-hero />

    <section class="section" id="features">
        <div class="container">
            <div class="section-head">
                <div class="section-head__text">
                    <span class="label">Why Daily Drip</span>
                    <h2 class="section-title">Our Bestsellers, Your Everyday Favorites.</h2>
                    <p class="section-sub">
                        Discover what makes Daily Drip Café a local favorite in Anabu, Imus.
                    </p>
                </div>

                <a class="text-link" href="#menu">
                    View Full Menu
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="M5 12h14M13 6l6 6-6 6"/>
                    </svg>
                </a>
            </div>

            <div class="feature-grid">
                <x-feature-card
                    title="Espresso Favorites"
                    description="Classic and modern espresso-based drinks."
                >
                    <x-slot:icon>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="M4 8h13v5a6 6 0 0 1-6 6H10a6 6 0 0 1-6-6V8Z"/>
                            <path d="M17 9h1.5a2.5 2.5 0 0 1 0 5H17"/>
                            <path d="M4 21h13"/>
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Iced Coffee"
                    description="Refreshing and smooth drinks for everyday sips."
                >
                    <x-slot:icon>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="M6 7h12l-1.2 13H7.2L6 7Z"/>
                            <path d="M5 4h14"/>
                            <path d="M9 11.5 12 15M15 11.5 12 15"/>
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Matcha Options"
                    description="Creamy and refreshing premium matcha selections."
                >
                    <x-slot:icon>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="M11 20c-4 0-7-3-7-7 0-5 4-9 16-9 0 8-4 16-9 16Z"/>
                            <path d="M4 20c4-6 9-9 14-11"/>
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Frappe Selection"
                    description="Rich blended drinks for indulgent moments."
                >
                    <x-slot:icon>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="M7 9h10l-1 11H8L7 9Z"/>
                            <path d="M7.5 9c0-2.5 2-4.5 4.5-4.5S16.5 6.5 16.5 9"/>
                            <path d="M12 4.5V2"/>
                            <path d="M13.5 20v2"/>
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Fruit Tea"
                    description="Light, fruity, and refreshing beverages."
                >
                    <x-slot:icon>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                             stroke-linejoin="round">
                            <circle cx="12" cy="14" r="7"/>
                            <path d="M12 7c0-2 1.5-4 4-4"/>
                            <path d="M12 7c-.5-1.5-2-2.5-3.5-2.5"/>
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Takeaway Convenience"
                    description="Great coffee made convenient for people on the go."
                >
                    <x-slot:icon>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="M5 8h14l-1 12H6L5 8Z"/>
                            <path d="M9 8V6a3 3 0 0 1 6 0v2"/>
                        </svg>
                    </x-slot:icon>
                </x-feature-card>
            </div>
        </div>
    </section>

    <x-showcase />

    <section class="section section--alt" id="pricing">
        <div class="container">
            <div class="section-head">
                <div class="section-head__text">
                    <span class="label">Popular Picks</span>
                    <h2 class="section-title">Popular Picks, Great Value</h2>
                    <p class="section-sub">Premium taste at prices you'll love.</p>
                </div>

                <a class="text-link" href="#menu">
                    View Full Menu
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="M5 12h14M13 6l6 6-6 6"/>
                    </svg>
                </a>
            </div>

            <div class="price-grid">
                <x-pricing-card
                    name="Everyday"
                    image="images/spanish-latte.jpg"
                    price="₱67"
                    description="Great coffee for everyday moments."
                    :features="[
                        'Classic coffee flavors',
                        'Smooth and satisfying',
                        'Perfect for daily sips'
                    ]"
                />

                <x-pricing-card
                    name="Signature"
                    image="images/mocha-frappe.jpg"
                    price="₱123"
                    description="Our most loved coffee creations."
                    :features="[
                        'Premium ingredients',
                        'Rich and unique flavors',
                        'Customer favorite'
                    ]"
                    :featured="true"
                />

                <x-pricing-card
                    name="Matcha"
                    image="images/matcha-latte.jpg"
                    price="₱126"
                    description="A refreshing balance in every cup."
                    :features="[
                        'Quality matcha',
                        'Smooth and creamy',
                        'Perfect iced or hot'
                    ]"
                />
            </div>
        </div>
    </section>

    {{--
        SAMPLE PLACEHOLDER CONTENT.
        Names, roles, ratings, reviews, and portraits below are not verified real customers.
        Replace with permission-granted customer feedback before final submission/publication.
    --}}
    <section class="section" id="testimonials">
        <div class="container">
            <div class="section-head">
                <div class="section-head__text">
                    <span class="label">Customer Stories</span>
                    <h2 class="section-title">What Our Customers Say</h2>
                    <p class="section-sub">Sample customer-card layout for the project.</p>
                </div>
            </div>

            <div class="testi-grid">
                <x-testimonial-card
                    image="images/customer-1.jpg"
                    name="Julia R."
                    role="Student, Imus"
                    review="Perfect coffee for study days. Great taste and a really comfortable everyday café choice."
                />

                <x-testimonial-card
                    image="images/customer-2.jpg"
                    name="Mark T."
                    role="Working Professional"
                    review="Great coffee, reasonable prices, and a convenient stop whenever I’m in the area."
                />

                <x-testimonial-card
                    image="images/customer-3.jpg"
                    name="Angela S."
                    role="Local Resident"
                    review="I really enjoy the matcha and frappes. Clean flavors and plenty of choices."
                />
            </div>

            <p class="note">
                Sample placeholder testimonials — replace with verified customer feedback.
            </p>
        </div>
    </section>

    <x-cta />
    <x-contact />
@endsection
