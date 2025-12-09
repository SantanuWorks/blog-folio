import Alpine from 'alpinejs';

Alpine.store('theme', {
    dark: document.documentElement.classList.contains('dark'),
    toggle() {
        this.dark = !this.dark;
        document.documentElement.classList.toggle('dark', this.dark);
        localStorage.setItem('theme', this.dark ? 'dark' : 'light');
    }
});

Alpine.data('app', () => ({
    authModal: false,
    mode: 'signin',
    isLoggedIn: false,
    loading: true,
    currentPage: 'blog',
    currentSection: 'lets-get-started',
    isAdmin: false,
    mobileMenuOpen: false,
    mobileFiltersOpen: false,

    sections: ['lets-get-started', 'featured-article', 'world-of-articles', 'unleash-newsletter'],

    initObserver() {
        const options = { root: null, threshold: 0.4 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.currentSection = entry.target.id;
                }
            });
        }, options);

        this.sections.forEach(id => {
            const el = document.getElementById(id);
            if (el) observer.observe(el);
        });
    },

    init() {
        this.initObserver();
        window.onload = () => { this.loading = false };
    }
}));

window.Alpine = Alpine;
Alpine.start();
