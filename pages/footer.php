<?php
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

  <footer class="footer" id="contact">
    <div class="overlay"></div>
    <div class="footer__container">
      <div class="contact__container">
        <a href="" class="logo">
          <span class="company__name"><span class="fit">fit</span><span class="fusion">fusion</span>
          </span>
        </a>
        <div class="subscription__container">
          <h3>subscribe to our news letter</h3>
          <form action="#" method="POST">
            <input type="email" placeholder="Enter your email" />
            <button>Subscribe</button>
          </form>
        </div>

        <nav>
          <ul class="footer__nav">
            <li><a href="http://localhost/FitFusion/pages/home.php#home" class="nav__link">home</a></li>
            <li><a href="http://localhost/FitFusion/pages/home.php#about" class="nav__link">about</a></li>
            <li><a href="http://localhost/FitFusion/pages/home.php#courses" class="nav__link">courses</a></li>
            <li><a href="http://localhost/FitFusion/pages/home.php#trainor" class="nav__link">trainors</a></li>
            <li><a href="http://localhost/FitFusion/pages/home.php#contact" class="nav__link">contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="copyrights">
        <div class="footer__socials">
          <a><i class="fa-brands fa-square-facebook"></i></a>
          <a><i class="fa-brands fa-square-instagram"></i></a>
          <a><i class="fa-brands fa-square-twitter"></i></a>
        </div>
        <p>2023 - All Rights Reserved</p>
      </div>
    </div>
  </footer>

<?php
} else {
?>

  <footer class="footer" id="contact">
    <div class="overlay"></div>
    <div class="footer__container">
      <div class="contact__container">
        <a href="" class="logo">
          <span class="company__name"><span class="fit">fit</span><span class="fusion">fusion</span>
          </span>
        </a>
        <div class="subscription__container">
          <h3>subscribe to our news letter</h3>
          <form action="#" method="POST">
            <input type="email" placeholder="Enter your email" />
            <button>Subscribe</button>
          </form>
        </div>

        <nav>
          <ul class="footer__nav">
            <li><a href="http://localhost/FitFusion/pages/index.php#home" class="nav__link">home</a></li>
            <li><a href="http://localhost/FitFusion/pages/index.php#about" class="nav__link">about</a></li>
            <li><a href="http://localhost/FitFusion/pages/index.php#courses" class="nav__link">courses</a></li>
            <li><a href="http://localhost/FitFusion/pages/index.php#trainor" class="nav__link">trainors</a></li>
            <li><a href="http://localhost/FitFusion/pages/index.php#contact" class="nav__link">contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="copyrights">
        <div class="footer__socials">
          <a><i class="fa-brands fa-square-facebook"></i></a>
          <a><i class="fa-brands fa-square-instagram"></i></a>
          <a><i class="fa-brands fa-square-twitter"></i></a>
        </div>
        <p>2023 - All Rights Reserved</p>
      </div>
    </div>
  </footer>

<?php
}
?>