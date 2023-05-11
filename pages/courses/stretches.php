<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FitFusion</title>
  <link rel="stylesheet" href="../../stylesheets/courses.css" />
  <link rel="stylesheet" href="../../stylesheets/index.css" />

  <script src="https://kit.fontawesome.com/9824d21dba.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Header -->
  <?php

  include '../header.php';

  ?>
  <!-- ! Header -->
  <!-- Content -->
  <section class="body__container">
    <div>
      <a title="Back" id="back__button" href="../home.php#courses">
        <i i class="fa-solid fa-circle-chevron-left"></i>
      </a>
    </div>
    <div class="courses">
      <div class="course__variation">
        <div class="course__header">
          <h1 class="variation__title">chest stretch</h1>
          <p class="difficulty"><span>Difficulty:</span> Beginner</p>
        </div>
        <div class="course__videos">
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/stretch-one.mp4" playsinline muted autoplay loop></video>
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/stretch-two.mp4" playsinline muted autoplay loop></video>
        </div>
        <div class="course__steps">
          <ol class="steps__list">
            <li>
              Using a raised wall, place your arm at a 90 degree angle against
              it.
            </li>
            <li>
              With a staggered stance, lean into the wall extending your
              chest.
            </li>
            <li>
              Pause for a few seconds and then return to starting position and
              repeat on opposite side.
            </li>
          </ol>
        </div>
      </div>
      <div class="course__variation">
        <div class="course__header">
          <p class="difficulty"><span>Difficulty:</span> Beginner</p>
        </div>
        <div class="course__videos">
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/stretch-three.mp4" playsinline muted autoplay loop></video>
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/stretch-four.mp4" playsinline muted autoplay loop></video>
        </div>
        <div class="course__steps">
          <ol class="steps__list">
            <li>
              Stand perpendicular to a wall, using one arm against the wall
              for balance. With your other arm, grab the top of your foot.
            </li>
            <li>
              Pull your leg upwards and back to engage your quads, pausing at
              the apex of the stretch for a few seconds.
            </li>
            <li>
              Return to starting position and repeat with your other leg.
            </li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- ! Content -->
  <!-- Contact -->
  <?php

  include '../footer.php';

  ?>
  <!-- ! Contact -->
  <script src="/app.js"></script>
</body>

</html>