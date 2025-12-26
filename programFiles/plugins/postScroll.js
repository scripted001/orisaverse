document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.postcard');
    
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1; // fade in
                } else {
                    entry.target.style.opacity = 0; // fade out when out of view
                }
            });
        },
        { threshold: 0.5 } // triggers when 50% of the card is visible
    );

    cards.forEach(card => observer.observe(card));
});
