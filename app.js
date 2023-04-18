// Mobile Menu (Show)
const nav = document.querySelector('.nav');
const toggle = document.querySelector('.nav__toggle');
const burgerMenu = document.querySelector('#burger-menu');

toggle.onclick = () => {
  nav.classList.toggle('show__menu');
  burgerMenu.classList.toggle('fa-bars');
  burgerMenu.classList.toggle('fa-x');
};

// Mobile Menu (Remove)
const navLink = document.querySelectorAll('.nav__link');
const linkAction = () => {
  nav.classList.remove('show__menu');
};

navLink.forEach((e) => {
  e.addEventListener('click', linkAction);
});

// Change Link Color

const linkColor = document.querySelectorAll('.nav__link');
const colorLink = () => {
  if (colorLink) {
    linkColor.forEach((e) => {
      e.classList.remove('active');
    });
    this.classList.add('active');
  }
};

linkColor.forEach((e) => {
  e.addEventListener('click', colorLink);
});
