// JavaScript to toggle the mobile menu

// console.log("Hello from script.js");
document.getElementById("menu-toggle").addEventListener("click", function () {
  const menu = document.getElementById("mobile-menu");
  menu.classList.toggle("hidden");
});

const carouselInner = document.getElementById("carousel-inner");
const prevBtn = document.getElementById("prev-btn");
const nextBtn = document.getElementById("next-btn");

let currentIndex = 0;

const updateCarousel = () => {
  carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
};

prevBtn.addEventListener("click", () => {
  currentIndex = currentIndex === 0 ? 2 : currentIndex - 1;
  updateCarousel();
});

nextBtn.addEventListener("click", () => {
  currentIndex = currentIndex === 2 ? 0 : currentIndex + 1;
  updateCarousel();
});
