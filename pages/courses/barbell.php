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
          <h1 class="variation__title">barbell bench press</h1>
          <p class="difficulty"><span>Difficulty:</span> Intermediate</p>
        </div>
        <div class="course__videos">
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/barbell-one.mp4" playsinline muted autoplay loop></video>
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/barbell-two.mp4" playsinline muted autoplay loop></video>
        </div>
        <div class="course__steps">
          <ol class="steps__list">
            <li>
              Lay flat on the bench with your feet on the ground. With
              straight arms unrack the bar.
            </li>
            <li>Lower the bar to your mid chest</li>
            <li>Raise the bar until you've locked your elbows.</li>
          </ol>
        </div>
      </div>
      <div class="course__variation">
        <div class="course__header">
          <p class="difficulty"><span>Difficulty:</span> Intermediate</p>
        </div>
        <div class="course__videos">
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/barbell-three.mp4" playsinline muted autoplay loop></video>
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/barbell-four.mp4" playsinline muted autoplay loop></video>
        </div>
        <div class="course__steps">
          <ol class="steps__list">
            <li>Position the bench between 30 and 45 degrees.</li>
            <li>
              Lay flat on the bench with your feet on the ground. With
              straight arms unrack the bar.
            </li>
            <li>Lower the bar to your mid chest</li>
            <li>
              Raise the bar (slowly and controlled) until you've locked your
              elbows.
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
  <script src="../../app.js"></script>
</body>

</html>