<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitFusion</title>
    <link rel="stylesheet" href="/stylesheets/courses.css" />
    <link rel="stylesheet" href="/stylesheets/index.css" />

    <script
      src="https://kit.fontawesome.com/9824d21dba.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="header__container">
        <a href="" class="logo">
          <span class="company__name"
            ><span class="fit">fit</span><span class="fusion">fusion</span>
          </span>
        </a>
        <nav class="nav">
          <ul class="nav__menu">
            <li>
              <a href="/pages/index.html" class="nav__link">Home</a>
            </li>
            <li><a href="#about" class="nav__link">About</a></li>
            <li><a href="#courses" class="nav__link active">Courses</a></li>
            <li><a href="#trainor" class="nav__link">Trainors</a></li>
            <li><a href="#contact" class="nav__link">Contact</a></li>
            <li><a class="logout" href="../logout.php">logout</a></li>
          </ul>
        </nav>
        <div class="nav__toggle">
          <i id="burger__menu" class="fa-solid fa-bars"></i>
        </div>
      </div>
    </header>
    <!-- ! Header -->
    <!-- Content -->
    <section class="body__container">
      <div>
        <a title="Back" id="back__button" href="/pages/index.html#courses">
          <i class="fa-solid fa-circle-chevron-left"></i>
        </a>
        <a href="/pages/./courses/yoga-two.html">
          <i
            title="Forward"
            id="back__button"
            class="fa-solid fa-circle-chevron-right"
          ></i>
        </a>
      </div>
      <div class="courses">
        <div class="course__variation">
          <div class="course__header">
            <h1 class="variation__title">
              yoga <span class="variation__sub">(chest)</span>
            </h1>
            <p class="difficulty"><span>Difficulty:</span> Intermediate</p>
          </div>
          <div class="course__videos">
            <video
              class="workout__video"
              src="/assets/videos/yoga-one.mp4"
              muted
              autoplay
              loop
            ></video>
            <video
              class="workout__video"
              src="/assets/videos/yoga-two.mp4"
              playsinline
              muted
              autoplay
              loop
            ></video>
          </div>
          <div class="course__steps">
            <ol class="steps__list">
              <li>Lie on your stomach with your arms at your sides.</li>
              <li>
                Bend your knees and bring your heels towards your buttocks.
              </li>
              <li>Reach back with your hands and grab your ankles.</li>
              <li>
                Inhale and lift your chest off the ground, pulling your legs up
                and back with your hands.
              </li>
              <li>
                Keep your gaze forward and hold the pose for a few breaths
                before releasing back to the ground.
              </li>
            </ol>
          </div>
        </div>
        <div class="course__variation">
          <div class="course__header">
            <p class="difficulty"><span>Difficulty:</span> Beginner</p>
          </div>
          <div class="course__videos">
            <video
              class="workout__video"
              src="/assets/videos/yoga-three.mp4"
              muted
              autoplay
              loop
            ></video>
            <video
              class="workout__video"
              src="/assets/videos/yoga-four.mp4"
              playsinline
              muted
              autoplay
              loop
            ></video>
          </div>
          <div class="course__steps">
            <ol class="steps__list">
              <li>
                Stand tall with your feet hip-width apart and your arms at your
                sides.
              </li>
              <li>
                Press your feet into the ground and engage your leg muscles.
              </li>
              <li>Lift your chest and roll your shoulders back and down.</li>
              <li>
                Take a deep breath in, and as you exhale, release any tension in
                your body and relax your muscles.
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!-- ! Content -->
    <!-- Contact -->
    <footer class="footer" id="contact">
      <div class="overlay"></div>
      <div class="footer__container">
        <div class="contact__container">
          <a href="" class="logo">
            <span class="company__name"
              ><span class="fit">fit</span><span class="fusion">fusion</span>
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
              <li><a href="/pages/index.html" class="nav__link">home</a></li>
              <li><a href="#about" class="nav__link">about</a></li>
              <li><a href="#courses" class="nav__link">courses</a></li>
              <li><a href="#trainor" class="nav__link">trainors</a></li>
              <li><a href="#contact" class="nav__link">contact</a></li>
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
    <!-- ! Contact -->
    <script src="/app.js"></script>
  </body>
</html>
