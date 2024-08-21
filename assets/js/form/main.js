const mobile_nav = document.querySelector(".mobile-navbar-btn");
const nav_header = document.querySelector(".header");

const toggleNavbar = () => {
  // alert("Plz Subscribe ");
  nav_header.classList.toggle("active");
};

mobile_nav.addEventListener("click", () => toggleNavbar());

// Script to remove GET variable

setTimeout(function () {
  var currentUrl = window.location.href;

  var cleanedUrl = currentUrl.replace(/[?&]error=([^&]+)/, "");

  window.history.replaceState({}, document.title, cleanedUrl);
}, 3000);
