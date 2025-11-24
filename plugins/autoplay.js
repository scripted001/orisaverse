document.addEventListener("DOMContentLoaded", () => {
  // ===== Category Dropdown =====
  const headers = document.querySelectorAll(".category-header");
  headers.forEach(header => {
    header.addEventListener("click", () => {
      const sub = header.nextElementSibling;
      if (sub.style.display === "flex") {
        sub.style.display = "none";
        sub.style.opacity = "0";
        sub.style.transform = "translateY(-5px)";
      } else {
        sub.style.display = "flex";
        sub.style.opacity = "1";
        sub.style.transform = "translateY(0)";
      }
    });
  });

  // ===== Menu Controls =====
  window.menu = () => document.getElementById("menu").style.display = "block";
  window.menuClose = () => document.getElementById("menu").style.display = "none";

  // ===== Video Logic =====
  const videos = document.querySelectorAll('.postVideo');
  const volumes = document.querySelectorAll('.volumeControl');

  // Function to pause all videos
  const pauseAllVideos = () => {
    videos.forEach(v => {
      v.pause();
    });
  };

  // Set up intersection observer for auto-play when visible
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      const video = entry.target;
      if (entry.isIntersecting && entry.intersectionRatio >= 0.6) {
        // Pause all other videos
        pauseAllVideos();
        video.play();
      } else {
        video.pause();
      }
    });
  }, { threshold: [0.6] });

  videos.forEach((video, index) => {
    const volumeControl = volumes[index];
    let hideTimeout;

    video.muted = false;
    video.volume = 0.5;
    observer.observe(video); // attach observer

    // Manual play/pause toggle
    video.addEventListener('click', () => {
      if (video.paused) {
        pauseAllVideos();
        video.play();
      } else video.pause();
    });

    // Volume adjustment
    volumeControl.addEventListener('input', e => {
      video.volume = e.target.value;
    });

    // Show/hide volume bar smoothly
    const showVolume = () => {
      volumeControl.classList.add('show');
      clearTimeout(hideTimeout);
      hideTimeout = setTimeout(() => volumeControl.classList.remove('show'), 3000);
    };

    ['mousemove', 'click', 'touchstart'].forEach(evt => {
      video.addEventListener(evt, showVolume);
    });
  });
});


// Drop down menus begins
const dropdownEl = document.getElementById("dropdown");
const accntEl = document.getElementById("accnt");

window.dropdown = () => {
  dropdownEl.style.display = "block";
  accntEl.style.backgroundColor = "#4baa4880";
};

window.dropdownclose = () => {
  dropdownEl.style.display = "none";
  accntEl.style.backgroundColor = "transparent";
};


// Drop down menus ends
// help drop down begins
const helpmainEl = document.getElementById("helpmain");
const helpEl = document.getElementById("help"); // now this exists

window.help = () => {
  helpmainEl.style.display = "block";
  helpEl.style.backgroundColor = "#4baa4880";
};

window.helpclose = () => {
  helpmainEl.style.display = "none";
  helpEl.style.backgroundColor = "transparent";
};
// help drop down ends

// Option bar begins
const optionmainEl = document.getElementById("optionbarA");

window.optionopen = () => {
  optionmainEl.style.display = "block";
};

window.optionclose = () => {
  optionmainEl.style.display = "none";
};
// Option bar ends
// Categories display begins
document.addEventListener("DOMContentLoaded", () => {

  const listItems = document.querySelectorAll(".category ul li");
  const allSubmenus = document.querySelectorAll(".submenu");

  // Track the current submenu opened
  let currentSubmenu = null;

  listItems.forEach(li => {

    li.addEventListener("mouseenter", () => {
      const target = li.getAttribute("data-target");

      // Hide any currently open submenu
      if (currentSubmenu) {
        currentSubmenu.classList.remove("show");
        currentSubmenu.style.display = "none";
      }

      // Show the correct submenu
      currentSubmenu = document.querySelector(`.${target}`);
      if (currentSubmenu) {
        currentSubmenu.style.display = "block";
        currentSubmenu.classList.add("show");
      }
    });

    li.addEventListener("mouseleave", () => {
      // Only hide if not hovering submenu
      if (!currentSubmenu.matches(":hover")) {
        currentSubmenu.classList.remove("show");
        currentSubmenu.style.display = "none";
      }
    });

  });

  // When hovering the submenu itself
  allSubmenus.forEach(sub => {

    sub.addEventListener("mouseenter", () => {
      sub.style.display = "block";
      sub.classList.add("show");
    });

    sub.addEventListener("mouseleave", () => {
      sub.classList.remove("show");
      sub.style.display = "none";
    });

  });

});

// Categories display ends

