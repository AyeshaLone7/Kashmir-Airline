document.addEventListener('DOMContentLoaded', () => {
    // Small interaction: give product cards a subtle entrance as they appear.
    const cards = document.querySelectorAll('.product-card');
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.08 });

        cards.forEach((card) => observer.observe(card));
    } else {
        cards.forEach((card) => card.classList.add('is-visible'));
    }
});
