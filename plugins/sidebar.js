// sidebar.js
// Handles expandable Orisaverse sidebar categories



document.addEventListener("DOMContentLoaded", () => {
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
});

// turn on menu navigation
function menu() {
  var div = document.getElementById("menu");
  div.style.display ="block"; 
}

// turn off menu navigation
function menuClose() {
  var div = document.getElementById("menu");
  div.style.display ="none"; 

}
