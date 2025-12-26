document.addEventListener('DOMContentLoaded', () => {
  let userInteracted = false;
  const feed = document.querySelector('.main-mid');
  const containers = document.querySelectorAll('.video-container');

  containers.forEach(container => {
    const video = container.querySelector('.postVideo');
    const volume = container.parentElement.querySelector('.volumeControl');
    const brightness = container.parentElement.querySelector('.brightnessControl');

    video.volume = volume.value;
    video.style.filter = `brightness(${brightness.value})`;

    volume.addEventListener('input', () => video.volume = volume.value);
    brightness.addEventListener('input', () => video.style.filter = `brightness(${brightness.value})`);

    video.addEventListener('click', () => video.paused ? video.play() : video.pause());
  });

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const video = entry.target;
      if (entry.isIntersecting && userInteracted) video.play();
      else video.pause();
    });
  }, { threshold: 0.75 });

  containers.forEach(c => observer.observe(c.querySelector('video')));

  const unlockAutoplay = () => userInteracted = true;
  document.addEventListener('touchstart', unlockAutoplay, { once: true });
  document.addEventListener('click', unlockAutoplay, { once: true });

  // Smooth wheel scroll
  let isScrolling = false;
  let currentIndex = 0;

  feed.addEventListener('wheel', e => {
    if (isScrolling) return;

    if (e.deltaY > 0) currentIndex++;
    else currentIndex--;

    if (currentIndex < 0) currentIndex = 0;
    if (currentIndex >= containers.length) currentIndex = containers.length - 1;

    isScrolling = true;
    containers[currentIndex].scrollIntoView({ behavior: 'smooth', block: 'start' });
    setTimeout(() => isScrolling = false, 600);
    e.preventDefault();
  }, { passive: false });
});
