/**
 * Bottega Design Studio - Luxury Services & Section Scroll Reveal
 */

document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -50px 0px',
        threshold: 0.12
    };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, observerOptions);

    const revealElements = document.querySelectorAll('.bottega-services-section, .bottega-locations-section');
    revealElements.forEach(el => revealObserver.observe(el));
});
