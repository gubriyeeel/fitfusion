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
    </div>
    <div class="courses">
      <div class="course__variation">
        <div class="course__header">
          <h1 class="variation__title">dumbbells press</h1>
          <p class="difficulty"><span>Difficulty:</span> Beginner</p>
        </div>
        <div class="course__videos">
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/dumbbell-one.mp4" playsinline muted autoplay loop></video>
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/dumbbell-two.mp4" playsinline muted autoplay loop></video>
        </div>
        <div class="course__steps">
          <ol class="steps__list">
            <li>
              Lay flat on the incline bench with your feet on the ground.
              Raise the dumbbells until you have straight arms.
            </li>
            <li>Lower the dumbbells to your mid chest.</li>
            <li>Raise the dumbbells until you've locked your elbows.</li>
          </ol>
        </div>
      </div>
      <div class="course__variation">
        <div class="course__header">
          <p class="difficulty"><span>Difficulty:</span> Intermediate</p>
        </div>
        <div class="course__videos">
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/dumbbell-three.mp4" playsinline muted autoplay loop></video>
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/dumbbell-four.mp4" playsinline muted autoplay loop></video>
        </div>
        <div class="course__steps">
          <ol class="steps__list">
            <li>Start in a bench press position with two dumbbells.</li>
            <li>
              Break at one of your elbows first while keeping the other elbow
              extended.
            </li>
            <li>
              Your working arm should reach your side before pressing back to
              the ceiling.
            </li>
            <li>Then alternate to the other arm.</li>
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