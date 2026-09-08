document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    if (!menuButton || !mobileMenu) {
        return;
    }

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

    const mobileLinks = mobileMenu.querySelectorAll('a');

    mobileLinks.forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth > 1100) {
            closeMenu();
        }
    });
});