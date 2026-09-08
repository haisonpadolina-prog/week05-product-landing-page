document.addEventListener('DOMContentLoaded', () => {
    /*
    |--------------------------------------------------------------------------
    | Mobile Navigation
    |--------------------------------------------------------------------------
    */
    const menuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    if (menuButton && mobileMenu) {
        function openMenu() {
            mobileMenu.classList.add('mobile-nav--open');
            menuButton.setAttribute('aria-expanded', 'true');
            mobileMenu.setAttribute('aria-hidden', 'false');
        }

        function closeMenu() {
            mobileMenu.classList.remove('mobile-nav--open');
            menuButton.setAttribute('aria-expanded', 'false');
            mobileMenu.setAttribute('aria-hidden', 'true');
        }

        menuButton.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('mobile-nav--open');

            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', closeMenu);
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth > 1100) {
                closeMenu();
            }
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Menu Search + Category Filtering
    |--------------------------------------------------------------------------
    */
    const searchInput = document.getElementById('menuSearch');
    const filterButtons = document.querySelectorAll('.menu-filter');
    const products = document.querySelectorAll('.menu-product');
    const resultsText = document.getElementById('menuResults');
    const emptyState = document.getElementById('menuEmpty');

    if (searchInput && filterButtons.length && products.length) {
        let activeFilter = 'all';

        const updateMenu = () => {
            const searchValue = searchInput.value
                .trim()
                .toLowerCase();

            let visibleCount = 0;

            products.forEach((product) => {
                const productName = product.dataset.name || '';
                const productCategory = product.dataset.category || '';

                const matchesSearch =
                    productName.includes(searchValue);

                const matchesCategory =
                    activeFilter === 'all' ||
                    productCategory === activeFilter;

                const shouldShow =
                    matchesSearch && matchesCategory;

                product.classList.toggle(
                    'is-hidden',
                    !shouldShow
                );

                if (shouldShow) {
                    visibleCount++;
                }
            });

            if (resultsText) {
                resultsText.textContent =
                    `${visibleCount} ${visibleCount === 1 ? 'drink' : 'drinks'} found`;
            }

            if (emptyState) {
                emptyState.hidden = visibleCount !== 0;
            }
        };

        searchInput.addEventListener('input', updateMenu);

        filterButtons.forEach((button) => {
            button.addEventListener('click', () => {
                activeFilter = button.dataset.filter || 'all';

                filterButtons.forEach((item) => {
                    const isActive = item === button;

                    item.classList.toggle(
                        'is-active',
                        isActive
                    );

                    item.setAttribute(
                        'aria-pressed',
                        isActive ? 'true' : 'false'
                    );
                });

                updateMenu();
            });
        });
    }
});


/*
|--------------------------------------------------------------------------
| Smooth Scrolling + Active Navigation
|--------------------------------------------------------------------------
*/
document.addEventListener('DOMContentLoaded', () => {
    const internalLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');

    internalLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            const targetId = link.getAttribute('href');

            if (!targetId) {
                return;
            }

            const target = document.querySelector(targetId);

            if (!target) {
                return;
            }

            event.preventDefault();

            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start',
            });

            if (history.pushState) {
                history.pushState(null, '', targetId);
            } else {
                window.location.hash = targetId;
            }
        });
    });

    const sections = document.querySelectorAll(
        '#home, #features, #menu, #pricing, #testimonials, #contact'
    );

    const navLinks = document.querySelectorAll(
        '.nav__links a[href^="#"], .mobile-nav__links a[href^="#"]'
    );

    if (!sections.length || !navLinks.length) {
        return;
    }

    const setActiveLink = (sectionId) => {
        navLinks.forEach((link) => {
            const isActive = link.getAttribute('href') === `#${sectionId}`;

            link.classList.toggle('is-active', isActive);

            if (isActive) {
                link.setAttribute('aria-current', 'page');
            } else {
                link.removeAttribute('aria-current');
            }
        });
    };

    const observer = new IntersectionObserver(
        (entries) => {
            const visibleSections = entries
                .filter((entry) => entry.isIntersecting)
                .sort((a, b) => b.intersectionRatio - a.intersectionRatio);

            if (visibleSections.length > 0) {
                setActiveLink(visibleSections[0].target.id);
            }
        },
        {
            root: null,
            rootMargin: '-30% 0px -55% 0px',
            threshold: [0.05, 0.15, 0.3, 0.5],
        }
    );

    sections.forEach((section) => observer.observe(section));
});

