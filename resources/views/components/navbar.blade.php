<header class="sticky top-0 z-50 border-b border-stone-200/80 bg-cream/90 backdrop-blur">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8" aria-label="Main navigation">
        <a href="#home" class="flex items-center gap-3">
            <div class="grid h-10 w-10 place-items-center rounded-full bg-coffee-600 text-sm font-black text-white">B1</div>
            <div class="leading-tight">
                <p class="font-bold tracking-tight">B1T1 Takeaway Coffee</p>
                <p class="text-xs text-stone-500">Anabu • Imus</p>
            </div>
        </a>

        <div class="hidden items-center gap-6 lg:flex">
            <a href="#home" class="text-sm font-medium hover:text-coffee-600">Home</a>
            <a href="#features" class="text-sm font-medium hover:text-coffee-600">Features</a>
            <a href="#pricing" class="text-sm font-medium hover:text-coffee-600">Pricing</a>
            <a href="#testimonials" class="text-sm font-medium hover:text-coffee-600">Testimonials</a>
            <a href="#contact" class="text-sm font-medium hover:text-coffee-600">Contact</a>
        </div>

        <div class="hidden items-center gap-2 lg:flex">
            <x-button href="#contact" variant="secondary">Sign In</x-button>
            <x-button href="#pricing">Get Started</x-button>
        </div>

        <button
            type="button"
            data-mobile-toggle
            class="rounded-lg border border-stone-300 p-2 lg:hidden"
            aria-label="Toggle navigation"
        >
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </nav>

    <div data-mobile-menu class="hidden border-t border-stone-200 bg-cream px-4 py-4 lg:hidden">
        <div class="flex flex-col gap-3">
            <a href="#home" class="rounded-lg px-3 py-2 hover:bg-white">Home</a>
            <a href="#features" class="rounded-lg px-3 py-2 hover:bg-white">Features</a>
            <a href="#pricing" class="rounded-lg px-3 py-2 hover:bg-white">Pricing</a>
            <a href="#testimonials" class="rounded-lg px-3 py-2 hover:bg-white">Testimonials</a>
            <a href="#contact" class="rounded-lg px-3 py-2 hover:bg-white">Contact</a>
            <div class="mt-2 grid grid-cols-2 gap-2">
                <x-button href="#contact" variant="secondary">Sign In</x-button>
                <x-button href="#pricing">Get Started</x-button>
            </div>
        </div>
    </div>
</header>
