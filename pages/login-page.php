<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FitFusion</title>
  <link rel="stylesheet" href="../stylesheets/login.css" />
  <script src="https://kit.fontawesome.com/9824d21dba.js" crossorigin="anonymous"></script>
</head>

<body>
  <section class="main__container">
    <div class="form__container">
      <a href="#" class="logo">
        <span class="company__name"><span class="fit">fit</span><span class="fusion">fusion</span>
        </span>
      </a>
      <h2>LOGIN</h2>
      <form action="login.php" method="post">

        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Username</label>
        <input class="first__input" type="text" name="uname" placeholder="Username">

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
        <a href="signup.php" class="ca">Create an account</a>
      </form>
    </div>
  </section>
</body>

</html>