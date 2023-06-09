<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FitFusion</title>
  <link rel="stylesheet" href="../stylesheets/index.css" />
  <link rel="stylesheet" href="../stylesheets/about.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
  <!-- Header -->
  <?php

  include 'index-header.php';

  ?>
  <!-- ! Header -->
  <!-- Home -->
  <section class="home" id="home">
    <div id="sliding__background">
      <div class="overlay"></div>
      <div class="content">
        <h3 class="section__header">
          get fit today at
          <span class="company__name header__text"><span class="fit">fit</span>fusion</span>
        </h3>
        <h1 class="section__title">
          transform your body with our expert trainers
        </h1>
        <p>join our fitness community and achieve your goals</p>
        <a href="login-page.php"><button id="start">join now</button></a>
      </div>
    </div>
  </section>
  <!-- ! Home -->
  <!-- Content -->
  <div class="content__container"></div>

  <!-- ! Content -->
  <!-- About -->
  <section class="about" id="about">
    <div class="about__container">
      <div class="left">
        <img src="../assets/images/about-one.jpg" alt="" />
        <img src="../assets/images/about-two.jpg" alt="" />
      </div>
      <div class="right">
        <h1 class="section__title">about us</h1>
        <h3 class="section__header">our story</h3>
        <p class="about__paragraph">
          <span class="company__name header__text"><span class="fit">fit</span>fusion</span>
          provides a wide range of classes as a service, tailored to meet the
          needs of fitness enthusiasts of all levels. from yoga and pilates to
          strength and conditioning, our expert trainers are dedicated to
          helping our members achieve their fitness goals in a supportive and
          motivating environment.
          <br />
          <br />
          come join our community today and let's achieve your goals together!
        </p>
        <a href="../pages/index-about.php"><button>learn more</button></a>
      </div>
    </div>
  </section>
  <!-- ! About -->
  <!-- Courses -->
  <section class="courses" id="courses">
    <div class="courses__container">
      <div class="overlay"></div>
      <div class="courses__content">
        <h3 class="section__header">
          transform your body and mind with our comprehensive fitness courses
        </h3>
        <h1 class="section__title">courses</h1>
        <div class="courses__list">
          <a href="login-page.php">
            <div class="course">
              <img src="../assets/images/courses-one.png" alt="" />
              <div class="course__info">
                <h3>stretches</h3>
              </div>
            </div>
          </a>
          <a href="login-page.php">
            <div class="course">
              <img src="../assets/images/courses-two.png" alt="" />
              <div class="course__info">
                <h3>barbell</h3>
              </div>
            </div>
          </a>
          <a href="login-page.php">
            <div class="course">
              <img src="../assets/images/courses-five.png" alt="" />
              <div class="course__info">
                <h3>dumbbells</h3>
              </div>
            </div>
          </a>
          <a href="login-page.php">
            <div class="course">
              <img src="../assets/images/courses-four.png" alt="" />
              <div class="course__info">
                <h3>cables</h3>
              </div>
            </div>
          </a>
          <a href="login-page.php">
            <div class="course">
              <img src="../assets/images/courses-three.png" alt="" />
              <div class="course__info">
                <h3>yoga</h3>
              </div>
            </div>
          </a>
          <a href="login-page.php">
            <div class="course">
              <img src="../assets/images/courses-six.png" alt="" />
              <div class="course__info">
                <h3>quads</h3>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- ! Courses -->
  <!-- * Trainor -->
  <section class="trainor" id="trainor">
    <div class="trainor__container">
      <h1 class="section__title">trainors</h1>

      <div class="trainor__box">
        <div class="trainor__card">
          <img src="../assets/images/trainor-one.jpg" alt="" />
          <div class="trainor__details">
            <div class="trainor__title">
              <h3>Yohan</h3>
              <hr />
            </div>
            <div class="inner">
              <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
              <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
            </div>
          </div>
        </div>
        <div class="trainor__card">
          <img src="../assets/images/trainor-two.jpg" alt="" />
          <div class="trainor__details">
            <div class="trainor__title">
              <h3>Vince</h3>
              <hr />
            </div>
            <div class="inner">
              <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
              <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
            </div>
          </div>
        </div>
        <div class="trainor__card">
          <img src="../assets/images/trainor-three.jpg" alt="" />
          <div class="trainor__details">
            <div class="trainor__title">
              <h3>Christine</h3>
              <hr />
            </div>
            <div class="inner">
              <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
              <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ! Trainor -->
  <!-- Contact -->
  <?php

  include 'index-footer.php';

  ?>
  <!-- ! Contact -->
  <script src="../app.js"></script>
</body>

</html>