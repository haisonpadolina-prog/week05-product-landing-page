@php
    $products = [
        [
            'image' => 'images/spanish-latte.jpg',
            'name' => 'Spanish Latte',
            'price' => '₱67',
            'category' => 'iced-coffee',
        ],
        [
            'image' => 'images/caramel-macchiato.jpg',
            'name' => 'Caramel Macchiato',
            'price' => '₱89',
            'category' => 'iced-coffee',
        ],
        [
            'image' => 'images/mocha-frappe.jpg',
            'name' => 'Mocha Frappe',
            'price' => '₱123',
            'category' => 'frappe',
        ],
        [
            'image' => 'images/matcha-latte.jpg',
            'name' => 'Matcha Latte',
            'price' => '₱126',
            'category' => 'matcha',
        ],
        [
            'image' => 'images/americano.jpg',
            'name' => 'Americano',
            'price' => '₱67',
            'category' => 'coffee',
        ],
        [
            'image' => 'images/fruit-tea.jpg',
            'name' => 'Fruit Tea',
            'price' => '₱95',
            'category' => 'fruit-tea',
        ],
    ];

    $filters = [
        'all' => 'All',
        'coffee' => 'Coffee',
        'iced-coffee' => 'Iced Coffee',
        'frappe' => 'Frappe',
        'matcha' => 'Matcha',
        'fruit-tea' => 'Fruit Tea',
    ];
@endphp

<section class="showcase-outer" id="menu">
    <div class="container">
        <div class="showcase">
            <div class="showcase__grid">

                {{-- Interactive desktop menu dashboard --}}
                <div class="dash">
                    <aside class="dash__side">
                        <div class="dash__brand">
                            <span class="brand__mark">
                                <img src="{{ asset('images/logo.png') }}" alt="">
                            </span>
                            <span>Daily Drip Café</span>
                        </div>

                        <ul class="dash__nav">
                            <li class="is-active">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path d="M4 11 12 4l8 7"/>
                                    <path d="M6 10v10h12V10"/>
                                </svg>
                                Home
                            </li>
                            <li>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path d="M4 8h13v5a6 6 0 0 1-6 6h-1a6 6 0 0 1-6-6V8Z"/>
                                    <path d="M17 9h1.5a2.5 2.5 0 0 1 0 5H17"/>
                                </svg>
                                Menu
                            </li>
                            <li>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path d="M12 20s-7-4.3-7-9.2A4 4 0 0 1 12 8a4 4 0 0 1 7 2.8C19 15.7 12 20 12 20Z"/>
                                </svg>
                                Favorites
                            </li>
                            <li>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path d="M6 4h12v16H6z"/>
                                    <path d="M9 9h6M9 13h6"/>
                                </svg>
                                Orders
                            </li>
                            <li>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path d="M3 9.5 5 4h14l2 5.5"/>
                                    <path d="M4 9.5h16V20H4z"/>
                                </svg>
                                Stores
                            </li>
                            <li>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="8"/>
                                    <path d="M12 11v5M12 8h.01"/>
                                </svg>
                                About
                            </li>
                        </ul>
                    </aside>

                    <div class="dash__main">
                        <div class="dash__eyebrow">Daily Drip Café</div>
                        <div class="dash__title">Our Menu</div>

                        {{-- Working menu search --}}
                        <label class="dash__search" for="menuSearch">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.8" stroke-linecap="round">
                                <circle cx="11" cy="11" r="6"/>
                                <path d="m16 16 4 4"/>
                            </svg>

                            <input
                                id="menuSearch"
                                type="search"
                                placeholder="Search drinks..."
                                autocomplete="off"
                                aria-label="Search Daily Drip drinks"
                            >
                        </label>

                        {{-- Working category filters --}}
                        <div class="pills menu-filters" aria-label="Filter menu categories">
                            @foreach($filters as $value => $label)
                                <button
                                    type="button"
                                    class="pill menu-filter {{ $value === 'all' ? 'is-active' : '' }}"
                                    data-filter="{{ $value }}"
                                    aria-pressed="{{ $value === 'all' ? 'true' : 'false' }}"
                                >
                                    {{ $label }}
                                </button>
                            @endforeach
                        </div>

                        <div class="dash__results" id="menuResults" aria-live="polite">
                            {{ count($products) }} drinks found
                        </div>

                        <div class="dash__products" id="menuProducts">
                            @foreach($products as $product)
                                <div
                                    class="menu-product"
                                    data-name="{{ strtolower($product['name']) }}"
                                    data-category="{{ $product['category'] }}"
                                >
                                    <x-product-card
                                        :image="$product['image']"
                                        :name="$product['name']"
                                        :price="$product['price']"
                                    />
                                </div>
                            @endforeach
                        </div>

                        <div class="menu-empty" id="menuEmpty" hidden>
                            <span class="menu-empty__icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round">
                                    <circle cx="11" cy="11" r="6"/>
                                    <path d="m16 16 4 4"/>
                                </svg>
                            </span>
                            <strong>No drinks found</strong>
                            <span>Try another search or category.</span>
                        </div>
                    </div>
                </div>

                <div>
                    <span class="label">Our Menu Experience</span>

                    <h2 class="showcase__title">
                        Fast to scan.<br>
                        Easy to choose.
                    </h2>

                    <p class="showcase__text">
                        A cleaner, simpler way to explore your favorite drinks anytime, anywhere.
                    </p>

                    <ul class="checklist">
                        @foreach([
                            'Complete menu at a glance',
                            'Beautiful drink previews',
                            'Clear prices and categories',
                            'Takeaway friendly'
                        ] as $item)
                            <li>
                                <svg width="19" height="19" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path d="m8.5 12.2 2.4 2.4 4.6-4.9"/>
                                </svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>

                    <div class="phone-wrap">
                        <div class="phone">
                            <div class="phone__screen">
                                <div class="phone__notch"></div>
                                <div class="phone__brand">Daily Drip Café</div>
                                <div class="phone__title">Fresh Brews.<br>Better Days.</div>

                                <div class="pills">
                                    <span class="pill is-active">All</span>
                                    <span class="pill">Coffee</span>
                                    <span class="pill">Frappe</span>
                                    <span class="pill">Matcha</span>
                                </div>

                                <div class="mini-list">
                                    @foreach(array_slice($products, 0, 4) as $product)
                                        @if(in_array($product['name'], ['Spanish Latte', 'Matcha Latte', 'Mocha Frappe']))
                                            <div class="mini">
                                                <img
                                                    src="{{ asset($product['image']) }}"
                                                    alt="{{ $product['name'] }}"
                                                >
                                                <div>
                                                    <div class="mini__name">{{ $product['name'] }}</div>
                                                    <div class="mini__price">{{ $product['price'] }}</div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
