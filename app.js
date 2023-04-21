// Mobile Menu (Show)
const nav = document.querySelector('.nav');
const toggle = document.querySelector('.nav__toggle');
const burgerMenu = document.querySelector('#burger__menu');
const backgroundSlider = document.querySelector('#sliding__background');

const backgroundImages = [
  '../assets/images/background-slide-one.jpg',
  '../assets/images/background-slide-three.jpg',
  '../assets/images/background-slide-two.jpg',
];

const numBackgroundImages = backgroundImages.length;
let currentBackgroundIndex = 0;
const nextBackgroundImage = new Image();

const nextBackground = () => {
  currentBackgroundIndex = (currentBackgroundIndex + 1) % numBackgroundImages;
  backgroundSlider.style.opacity = 0;
  nextBackgroundImage.onload = () => {
    backgroundSlider.style.backgroundImage = `url(${nextBackgroundImage.src})`;
    backgroundSlider.style.opacity = 1;
  };
  nextBackgroundImage.src = backgroundImages[currentBackgroundIndex];
};

nextBackground();
setInterval(nextBackground, 4000);

toggle.onclick = () => {
  nav.classList.toggle('show__menu');
  burgerMenu.classList.toggle('fa-bars');
  burgerMenu.classList.toggle('fa-xmark');
};

// Mobile Menu (Remove)
const navLink = document.querySelectorAll('.nav__link');
function linkAction() {
  nav.classList.remove('show__menu');
}

navLink.forEach((e) => e.addEventListener('click', linkAction));

// Change Link Color

const linkColor = document.querySelectorAll('.nav__link');
function colorLink() {
  if (colorLink) {
    linkColor.forEach((e) => e.classList.remove('active'));
    this.classList.add('active');
  }
}

linkColor.forEach((e) => e.addEventListener('click', colorLink));
