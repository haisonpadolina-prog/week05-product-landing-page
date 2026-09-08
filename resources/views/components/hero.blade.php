<section id="home" class="overflow-hidden">
    <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 py-20 sm:px-6 lg:grid-cols-2 lg:px-8 lg:py-28">
        <div>
            <span class="inline-flex rounded-full border border-coffee-100 bg-white px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-coffee-700 shadow-sm">
                Coffee made accessible
            </span>

            <h1 class="mt-6 max-w-2xl text-4xl font-black tracking-tight text-stone-950 sm:text-5xl lg:text-6xl">
                Premium-inspired coffee for your everyday moments.
            </h1>

            <p class="mt-6 max-w-xl text-lg leading-8 text-stone-600">
                Enjoy coffee, frappes, tea, matcha, and treats from B1T1 Takeaway Coffee —
                made for quick stops, study breaks, commutes, and catch-ups in Imus.
            </p>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <x-button href="#pricing">Explore Menu Picks</x-button>
                <x-button href="#showcase" variant="secondary">See the Experience</x-button>
            </div>

            <div class="mt-10 grid max-w-lg grid-cols-3 gap-4 border-t border-stone-200 pt-6 text-sm">
                <div>
                    <p class="text-2xl font-black">36+</p>
                    <p class="text-stone-500">Products</p>
                </div>
                <div>
                    <p class="text-2xl font-black">100+</p>
                    <p class="text-stone-500">Operating stores</p>
                </div>
                <div>
                    <p class="text-2xl font-black">₱67+</p>
                    <p class="text-stone-500">Anabu menu picks*</p>
                </div>
            </div>

            <p class="mt-3 text-xs text-stone-400">
                *Displayed menu prices are editable and should be verified before final submission.
            </p>
        </div>

        <div class="relative">
            <div class="absolute -left-10 top-10 h-40 w-40 rounded-full bg-amber-200/60 blur-3xl"></div>
            <div class="absolute -right-10 bottom-10 h-52 w-52 rounded-full bg-coffee-100 blur-3xl"></div>

            <div class="relative rounded-[2rem] border border-stone-200 bg-white p-4 shadow-2xl shadow-stone-300/40">
                <img
                    src="{{ asset('images/coffee-hero.svg') }}"
                    alt="Stylized coffee cup illustration"
                    class="aspect-[4/3] w-full rounded-[1.5rem] object-cover"
                >
                <div class="grid grid-cols-2 gap-3 p-3 pt-5">
                    <div class="rounded-2xl bg-coffee-50 p-4">
                        <p class="text-xs uppercase tracking-wider text-stone-500">Popular</p>
                        <p class="mt-1 font-bold">Iced Spanish Latte</p>
                    </div>
                    <div class="rounded-2xl bg-stone-950 p-4 text-white">
                        <p class="text-xs uppercase tracking-wider text-stone-400">Matcha</p>
                        <p class="mt-1 font-bold">Iced Matcha Latte</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
