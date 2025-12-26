document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".postcard");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                entry.target.style.animation = "fadeIn 2s forwards";
            }
        });
    }, { threshold: 0.6 });

    cards.forEach(card => observer.observe(card));

    // Optional: snap behavior for touch swipe
    let startY = 0;
    let scrolling = false;
    const container = document.querySelector('.main-mid');

    container.addEventListener('touchstart', e => {
        startY = e.touches[0].clientY;
    });

    container.addEventListener('touchend', e => {
        let endY = e.changedTouches[0].clientY;
        if (Math.abs(endY - startY) > 50) { // swipe threshold
            if (endY < startY) { // swipe up
                container.scrollBy({ top: window.innerHeight, behavior: 'smooth' });
            } else { // swipe down
                container.scrollBy({ top: -window.innerHeight, behavior: 'smooth' });
            }
        }
    });
});
