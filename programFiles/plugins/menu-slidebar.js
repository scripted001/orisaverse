// Categories display begins
document.addEventListener("DOMContentLoaded", () => {

  const listItems = document.querySelectorAll(".menu-slider-content ul li");
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
