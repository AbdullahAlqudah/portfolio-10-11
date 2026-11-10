
document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('site-header');
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');
    const links = document.querySelectorAll('.nav-link');

    // Header background on scroll
    function updateHeader() {
        header.classList.toggle('scrolled', window.scrollY > 25);
    }

    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });

    // Dark / light mode
    const savedTheme = localStorage.getItem('portfolio-theme');

    if (savedTheme === 'light') {
        document.body.classList.add('light-mode');
    }

    function updateThemeIcon() {
        const isLight = document.body.classList.contains('light-mode');
        themeIcon.textContent = isLight ? '☾' : '☀';
        themeToggle.setAttribute(
            'aria-label',
            isLight ? 'Switch to dark mode' : 'Switch to light mode'
        );
    }

    updateThemeIcon();

    themeToggle.addEventListener('click', () => {
        document.body.classList.toggle('light-mode');

        const isLight = document.body.classList.contains('light-mode');
        localStorage.setItem('portfolio-theme', isLight ? 'light' : 'dark');

        updateThemeIcon();
    });

    // Mobile navigation
    menuToggle.addEventListener('click', () => {
        const isOpen = navLinks.classList.toggle('open');

        menuToggle.setAttribute('aria-expanded', String(isOpen));
        menuToggle.setAttribute(
            'aria-label',
            isOpen ? 'Close navigation' : 'Open navigation'
        );
    });

    links.forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('open');
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.setAttribute('aria-label', 'Open navigation');
        });
    });

    // Reveal sections on scroll
    const revealElements = document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.08
        });

        revealElements.forEach(element => revealObserver.observe(element));
    } else {
        revealElements.forEach(element => element.classList.add('visible'));
    }

    // Highlight current section in navigation
    const sections = document.querySelectorAll('main section[id]');

    function updateActiveLink() {
        const scrollPosition = window.scrollY + 140;
        let currentSection = 'home';

        sections.forEach(section => {
            if (scrollPosition >= section.offsetTop) {
                currentSection = section.id;
            }
        });

        links.forEach(link => {
            const isActive = link.getAttribute('href') === '#' + currentSection;

            link.classList.toggle('active', isActive);

            if (isActive) {
                link.setAttribute('aria-current', 'location');
            } else {
                link.removeAttribute('aria-current');
            }
        });
    }

    updateActiveLink();
    window.addEventListener('scroll', updateActiveLink, { passive: true });
});
