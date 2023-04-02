// Mobile Menu (Show)
const nav = document.querySelector('.nav');
const toggle = document.querySelector('.nav__toggle');

toggle.onclick = () => {
  nav.classList.toggle('show__menu');
}

// Mobile Menu (Remove)
const navLink = document.querySelector('.nav__link');

function linkAction() {
  const navMenu = document.querySelector('.nav');
  nav.classList.remove('show__menu');
}

