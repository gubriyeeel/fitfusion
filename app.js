// Mobile Menu (Show)
const nav = document.querySelector('.nav');
const toggle = document.querySelector('.nav__toggle');
toggle.onclick = () => {
  nav.classList.toggle('show__menu');

  let navClass = nav.classList;
  console.log(navClass);
  
}

// Mobile Menu (Remove)
const navLink = document.querySelectorAll('.nav__link');
function linkAction() {
  const navMenu = document.querySelector('.nav');
  nav.classList.remove('show__menu');
}

navLink.forEach(e => e.addEventListener('click', linkAction))

// Change Link Color

const linkColor = document.querySelectorAll('.nav__link');
function colorLink () {
  if (colorLink) {
    linkColor.forEach(e => e.classList.remove('active'));
    this.classList.add('active');
  }
}

linkColor.forEach(e => e.addEventListener('click', colorLink));