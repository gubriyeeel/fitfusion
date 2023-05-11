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
          <h1 class="variation__title">cable chest press</h1>
          <p class="difficulty"><span>Difficulty:</span> Beginner</p>
        </div>
        <div class="course__videos">
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/cable-one.mp4" playsinline muted autoplay loop></video>
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/cable-two.mp4" playsinline muted autoplay loop></video>
        </div>
        <div class="course__steps">
          <ol class="steps__list">
            <li>
              Use a handle attachment. The cables should be set to shoulder
              height.
            </li>
            <li>
              Bring both of the handles to your chest and make sure you are in
              the center of the cable crossover.
            </li>
            <li>Walk a few steps forward. Then press the weight forward.</li>
            <li>
              From there, you should flex and extend at both the shoulders and
              elbows simultaneously.
            </li>
          </ol>
        </div>
      </div>
      <div class="course__variation">
        <div class="course__header">
          <p class="difficulty"><span>Difficulty:</span> Intermediate</p>
        </div>
        <div class="course__videos">
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/cable-three.mp4" playsinline muted autoplay loop></video>
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/cable-four.mp4" playsinline muted autoplay loop></video>
        </div>
        <div class="course__steps">
          <ol class="steps__list">
            <li>
              Use a handle attachment set all the way to the bottom of the
              machine.
            </li>
            <li>
              Bring both of the handles to your chest and make sure you are in
              the center of the cable crossover.
            </li>
            <li>
              Walk a few steps forward. Then press the weight forward. From
              there, your shoulders should horizontally abduct and adduct
              while your elbows stay in a fixed position.
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