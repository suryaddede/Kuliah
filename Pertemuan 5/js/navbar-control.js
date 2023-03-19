let lastScrollPosition = 0;
const body = document.querySelector("body");
const nav = document.querySelector("nav");
const navbarToggler = document.querySelector(".navbar-toggler");
const navbarCollapse = document.querySelector(".navbar-collapse");

window.addEventListener("scroll", () => {
  const currentScrollPosition = window.pageYOffset;

  if (currentScrollPosition > lastScrollPosition) {
    nav.classList.add("scroll-down");
    nav.classList.remove("scroll-up");
    nav.style.backgroundColor = "rgba(10, 25, 47, 0.75)";
    nav.style.boxShadow = "0 10px 10px rgba(0, 0, 0, 0.15)";
    nav.style.height = "56px";
  } else {
    nav.classList.add("scroll-up");
    nav.classList.remove("scroll-down");
    if (currentScrollPosition === 0) {
      nav.style.backgroundColor = "rgba(10, 25, 47, 0.75)"
      nav.style.boxShadow = "none";
      nav.style.height = "100px";
      nav.style.backdropFilter = "none";
    }
  }

  lastScrollPosition = currentScrollPosition;
});

navbarToggler.addEventListener("click", () => {
  navbarCollapse.style.backgroundColor = "rgba(10, 25, 47, 0.75)";
  nav.style.boxShadow = "0 10px 10px rgba(0, 0, 0, 0.15)";
  if (body.classList.contains("overflow-hidden")) {
    body.classList.remove("overflow-hidden");
  } else {
    body.classList.add("overflow-hidden");
  }
});
