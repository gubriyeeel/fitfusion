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
  <link rel="stylesheet" href="http://localhost/FitFusion/stylesheets/courses.css" />
  <link rel="stylesheet" href="http://localhost/FitFusion/stylesheets/index.css" />

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
      <a href="../courses/yoga-two.php">
        <i title="Forward" id="back__button" class="fa-solid fa-circle-chevron-right"></i>
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
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/yoga-one.mp4" playsinline muted autoplay loop></video>
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/yoga-two.mp4" playsinline muted autoplay loop></video>
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
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/yoga-three.mp4" playsinline muted autoplay loop></video>
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/yoga-four.mp4" playsinline muted autoplay loop></video>
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
  <?php

  include '../footer.php';

  ?>
  <!-- ! Contact -->
  <script src="/app.js"></script>
</body>

</html>