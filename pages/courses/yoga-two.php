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
      <a title="Back" id="back__button" href="../courses/yoga.php">
        <i i class="fa-solid fa-circle-chevron-left"></i>
      </a>
    </div>
    <div class="courses">
      <div class="course__variation">
        <div class="course__header">
          <h1 class="variation__title">
            yoga <span class="variation__sub">(legs)</span>
          </h1>
          <p class="difficulty"><span>Difficulty:</span> Beginner</p>
        </div>
        <div class="course__videos">
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/yoga2-one.mp4" playsinline muted autoplay loop></video>
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/yoga2-two.mp4" playsinline muted autoplay loop></video>
        </div>
        <div class="course__steps">
          <ol class="steps__list">
            <li>
              Stand straight with your feet hip-width apart and arms at your
              sides.
            </li>
            <li>Inhale and raise your arms straight up over your head.</li>
            <li>
              Exhale and bend your knees, lowering your hips as if you were
              sitting in a chair.
            </li>
            <li>
              Hold the pose for a few breaths, then inhale and stand up
              straight.
            </li>
          </ol>
        </div>
      </div>
      <div class="course__variation">
        <div class="course__header">
          <p class="difficulty"><span>Difficulty:</span> Beginner</p>
        </div>
        <div class="course__videos">
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/yoga2-three.mp4" playsinline muted autoplay loop></video>
          <video class="workout__video" src="http://localhost/FitFusion/assets/videos/yoga2-four.mp4" playsinline muted autoplay loop></video>
        </div>
        <div class="course__steps">
          <ol class="steps__list">
            <li>
              Begin in Crescent Moon Pose with your right foot forward and a
              block nearby.
            </li>
            <li>
              Place the block at the highest height under your left hand.
            </li>
            <li>
              Reach your left arm behind you and take hold of your left foot
              or ankle.
            </li>
            <li>
              Gently pull your foot towards your buttocks while pressing your
              left hand into the block to deepen the stretch in your left
              quad. Hold for a few breaths before releasing and repeating on
              the other side.
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