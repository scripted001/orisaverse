// programFiles/plugins/postcardScroll.js
document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".postcard");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                entry.target.style.animation = "fadeIn 2s forwards";
            }
        });
    }, { threshold: 0.6 }); // trigger when 60% visible

    cards.forEach(card => observer.observe(card));
});
