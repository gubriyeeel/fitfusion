<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FitFusion</title>
  <link rel="stylesheet" href="http://localhost/FitFusion/stylesheets/signup.css" />
  <script src="https://kit.fontawesome.com/9824d21dba.js" crossorigin="anonymous"></script>
</head>

<body>
  <section class="main__container">
    <div class="form__container">
      <a href="#" class="logo">
        <span class="company__name"><span class="fit">fit</span><span class="fusion">fusion</span>
        </span>
      </a>
      <h2>SIGN UP</h2>
      <form action="signup-check.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
          <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>Name</label>
        <?php if (isset($_GET['name'])) { ?>
          <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
        <?php } else { ?>
          <input type="text" name="name" placeholder="Name">
        <?php } ?>

        <label>Username</label>
        <?php if (isset($_GET['uname'])) { ?>
          <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
        <?php } else { ?>
          <input type="text" name="uname" placeholder="Username">
        <?php } ?>


        <label>Password</label>
        <input type="password" name="password" placeholder="Password">

        <label>Confirm password</label>
        <input type="password" name="re_password" placeholder="Confirm password"><br>

        <button type="submit">Sign Up</button>
        <a href="login-page.php" class="ca">Already have an account?</a>
      </form>
    </div>
  </section>
</body>

</html>