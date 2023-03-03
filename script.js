let lastScrollPosition = 0;
const header = document.querySelector("header");

window.addEventListener("scroll", () => {
  const currentScrollPosition = window.pageYOffset;

  if (currentScrollPosition > lastScrollPosition) {
    header.classList.add("scroll-down");
    header.classList.remove("scroll-up");
    header.style.boxShadow = "0 10px 10px rgba(0, 0, 0, 0.15)";
    header.style.height = "70px";
  } else {
    header.classList.add("scroll-up");
    header.classList.remove("scroll-down");
    if (currentScrollPosition === 0) {
      header.style.boxShadow = "none";
      header.style.height = "100px";
    }
  }

  lastScrollPosition = currentScrollPosition;
});
