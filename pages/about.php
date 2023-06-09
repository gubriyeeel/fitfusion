<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FitFusion</title>
  <link rel="stylesheet" href="../stylesheets/about.css" />
  <link rel="stylesheet" href="../stylesheets/index.css" />

  <script src="https://kit.fontawesome.com/9824d21dba.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Header -->
  <?php

  include 'header.php';

  ?>
  <!-- ! Header -->
  <!-- Content -->
  <section class="body__container">
    <div>
      <a title="Back" id="back__button" href="../pages/home.php#about">
        <i i class="fa-solid fa-circle-chevron-left"></i>
      </a>
    </div>
    <div class="body__header">
      <h1 class="section__title">about us</h1>
    </div>
    <div class="main__content">
      <div class="content__card">
        <img src="../assets/images/about-founder.jpg" alt="" />
        <div class="content__text">
          <h2 class="section__title">how we started</h2>
          <p class="about__paragraph">
            <span class="company__name"><span class="fit">fit</span><span class="fusion">fusion</span>
            </span>
            was born out of a passion for fitness and a desire to create a
            space where people of all fitness levels could come together and
            reach their goals. the founder, Andrea, had been a personal
            trainer for years and had always dreamed of opening her own gym.
            she wanted to create a community where people could feel
            supported, motivated, and empowered to be their best selves.
          </p>
        </div>
      </div>
      <div class="partners__card">
        <div class="content__text">
          <h2 class="section__title">who we are partnered with</h2>
          <p class="about__paragraph">
            <span class="company__name"><span class="fit">fit</span><span class="fusion">fusion</span>
            </span>
            is proud to be partnered with brands such as
            <strong>Nike</strong>, <strong>Under Armour</strong>, and
            <strong>Reebok</strong> to bring their members the latest and
            greatest in workout gear.
          </p>
        </div>
        <div class="partners__logos">
          <img id="partners__logo" src="../assets/images/partners-nike.png" alt="" />
          <img id="partners__logo" src="../assets/images/partners-ua.png" alt="" />
          <img id="partners__logo" src="../assets/images/partners-reebok.png" alt="" />
        </div>
      </div>
      <div class="content__card">
        <img src="../assets/images/about-team.jpg" alt="" />
        <div class="content__text">
          <h2 class="section__title">our team</h2>
          <p class="about__paragraph last">
            at
            <span class="company__name"><span class="fit">fit</span><span class="fusion">fusion</span>
            </span>
            , the team takes pride in the positive feedback and high ratings
            they consistently receive. members rave about the welcoming and
            inclusive environment, the challenging yet fun workouts, and the
            knowledgeable and supportive trainers. fitFusion has become a
            second home to many members who have found a sense of belonging in
            the community.
          </p>

        </div>
      </div>
    </div>
  </section>
  <!-- ! Content -->
  <!-- Contact -->
  <?php

  include 'footer.php';

  ?>
  <!-- ! Contact -->
  <script src="../app.js"></script>
</body>

</html>