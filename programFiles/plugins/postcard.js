// programFiles/plugins/postcard.js

document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.postcard');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                entry.target.classList.add('fade-in');
            }
        });
    }, { threshold: 0.5 });

    cards.forEach(card => observer.observe(card));
});
