@extends('layouts.app')

@section('title', 'B1T1 Takeaway Coffee | Modern Landing Page')
@section('description', 'A responsive Laravel and Tailwind CSS landing page redesign for B1T1 Takeaway Coffee - Anabu, Imus.')

@section('content')
    <x-hero />

    <section id="features" class="border-y border-stone-200 bg-white/60">
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-coffee-600">Why B1T1</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight sm:text-4xl">Built around quality, value, and convenience.</h2>
                <p class="mt-4 leading-7 text-stone-600">
                    Six highlights presented as reusable Blade feature cards.
                </p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                <x-feature-card icon="☕" title="Espresso Favorites" description="Classic espresso choices including Americano, Latte, Spanish Latte, and Caramel Macchiato." />
                <x-feature-card icon="🧊" title="Iced Coffee" description="Cold coffee selections designed for quick refreshment during commutes, errands, or study breaks." />
                <x-feature-card icon="🍵" title="Matcha Options" description="Matcha Latte, Dirty Matcha, and Matcha Frappe give customers non-coffee alternatives." />
                <x-feature-card icon="🥤" title="Frappe Selection" description="Espresso-based and cream-based frappes offer richer, dessert-style drink choices." />
                <x-feature-card icon="🍓" title="Fruit Tea" description="Refreshing fruit tea flavors expand the menu for customers who want lighter drinks." />
                <x-feature-card icon="⚡" title="Takeaway Convenience" description="A grab-and-go concept makes the brand suited to busy customers and everyday routines." />
            </div>
        </div>
    </section>

    <section id="showcase">
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-coffee-600">Product Showcase</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight sm:text-4xl">A clean digital experience for a grab-and-go café.</h2>
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-12">
                <div class="overflow-hidden rounded-3xl border border-stone-200 bg-white p-4 shadow-sm lg:col-span-7">
                    <img src="{{ asset('images/menu-dashboard.svg') }}" alt="Desktop menu dashboard mockup" class="w-full rounded-2xl">
                </div>

                <div class="rounded-3xl bg-stone-950 p-8 text-white lg:col-span-5">
                    <p class="text-sm font-bold uppercase tracking-widest text-amber-200">Key Highlights</p>
                    <h3 class="mt-3 text-3xl font-black">Fast to scan. Easy to choose.</h3>
                    <ul class="mt-7 space-y-4 text-stone-300">
                        <li>✓ Clear drink categories</li>
                        <li>✓ Mobile-first card layouts</li>
                        <li>✓ Strong CTA buttons</li>
                        <li>✓ Consistent coffee-inspired color palette</li>
                        <li>✓ Reusable Blade architecture</li>
                    </ul>

                    <div class="mt-8 flex justify-center">
                        <img src="{{ asset('images/mobile-view.svg') }}" alt="Mobile landing page mockup" class="w-48 rounded-[2rem] border border-stone-700">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-coffee-600">Pricing</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight sm:text-4xl">Three real menu-based price cards.</h2>
                <p class="mt-4 leading-7 text-stone-600">
                    Your teacher asks for three pricing cards, so this redesign uses real Anabu menu items instead of inventing subscription plans.
                </p>
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-3">
                <x-pricing-card
                    name="Everyday"
                    price="₱67"
                    description="A simple starting point for customers who prefer a classic, bold coffee."
                    :features="['Hot or Iced Americano', 'Espresso-based', 'Budget-friendly choice']"
                />

                <x-pricing-card
                    name="Signature"
                    price="₱123"
                    description="One of the branch’s popular creamy coffee choices for customers who want something sweeter."
                    :features="['Iced Spanish Latte', 'Popular menu pick', 'Creamy coffee profile']"
                    :featured="true"
                />

                <x-pricing-card
                    name="Matcha"
                    price="₱126"
                    description="A non-coffee favorite for customers who enjoy a smooth, earthy drink."
                    :features="['Iced Matcha Latte', 'Non-coffee option', 'Popular menu pick']"
                />
            </div>

            <p class="mt-6 text-center text-xs text-stone-400">
                Verify menu prices again on the day you submit because third-party delivery prices can change.
            </p>
        </div>
    </section>

    <section id="testimonials">
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-coffee-600">Testimonials</p>
                <h2 class="mt-3 text-3xl font-black tracking-tight sm:text-4xl">Customer voice section.</h2>
                <p class="mt-4 leading-7 text-stone-600">
                    Replace these three clearly marked placeholders with customer quotes and photos you personally verify or have permission to use.
                </p>
            </div>

            <div class="mt-10 grid gap-5 lg:grid-cols-3">
                <x-testimonial-card
                    name="Customer 01"
                    position="Verified customer — replace before submission"
                    initials="C1"
                    review="Add a short authentic customer review here after asking permission or using a review source allowed by your instructor."
                />
                <x-testimonial-card
                    name="Customer 02"
                    position="Verified customer — replace before submission"
                    initials="C2"
                    review="Keep the review concise and focused on taste, service, convenience, or value."
                />
                <x-testimonial-card
                    name="Customer 03"
                    position="Verified customer — replace before submission"
                    initials="C3"
                    review="Use a real photo only when you have permission; otherwise ask your instructor whether an avatar is acceptable."
                />
            </div>
        </div>
    </section>

    <section class="px-4 pb-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl overflow-hidden rounded-[2rem] bg-coffee-600 px-6 py-14 text-center text-white sm:px-10">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-amber-100">Call to Action</p>
            <h2 class="mx-auto mt-3 max-w-3xl text-3xl font-black tracking-tight sm:text-4xl">
                Find your next coffee break in Imus.
            </h2>
            <p class="mx-auto mt-4 max-w-2xl text-coffee-100">
                Explore the menu, contact the branch, or visit the store for a quick coffee stop.
            </p>

            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
                <x-button href="#contact" variant="secondary">Contact Store</x-button>
                <x-button href="#pricing" variant="dark">Start Your Order</x-button>
            </div>
        </div>
    </section>
@endsection
