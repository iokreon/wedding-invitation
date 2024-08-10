const header = document.querySelector("header");

window.addEventListener("scroll", function() {
    header.classList.toggle("sticky", window.scrollY > 140);
});

var music = document.getElementById("backgroundMusic");
var musicButton = document.getElementById("musicButton");
var musicIcon = document.getElementById("musicIcon");

function toggleMusic() {
  if (music.paused) {
    music.play();
    musicIcon.classList.add("fa-pause");
    musicIcon.classList.remove("fa-play");
  } else {
    music.pause();
    musicIcon.classList.add("fa-play");
    musicIcon.classList.remove("fa-pause");
  }
}

let menu = document.querySelector('#menu-icon');
let nav = document.querySelector('.nav');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    nav.classList.toggle('open');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    nav.classList.remove('open');
}
document.addEventListener("DOMContentLoaded", function () {
  let currentIndex = 0;
  const slides = document.querySelectorAll(".slider-container > div");

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.transform = `translateX(${100 * (i - index)}%)`;
    });
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
  }

  setInterval(nextSlide, 3000); // Auto slide every 3 seconds
});
