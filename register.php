<?php
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./assets/css/register.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="assets/js/register.js"></script>
  <title>Tech Café</title>
</head>
<body>

  <?php if (isset($_POST['reg_button'])) {
    echo '
      <script>
        $(document).ready(function () {
          $(".first").hide();
          $(".second").show();
        })
      </script>
    ';
  } ?>

  <div class="page">
    <div class="register">
      <div class="header">
        <h1 class="cafe">Tech Café</h1>
      </div>
      <div class="form">

        <!-- Login Form -->
        <div class="first">
          <form action="register.php" method="POST">
            <input type="email" name="log_email" placeholder="Email Address"
              value="<?php
                if (isset($_SESSION['log_email'])) {
                  echo $_SESSION['log_email'];
                } ?>" required>
            <input type="password" name="log_password" placeholder="Password" value="" required>
            <?php if (in_array('Email or password was incorrect<br>', $error_array)) {
              echo 'Email or password was incorrect<br>';
            } ?>
            <input type="submit" name="log_button" value="Log In">

            <a href="#" id="signup" class="signup">Need an account? Sign up here!</a>

          </form>
        </div>


        <div class="second"><!-- Register Form -->
          <form action="register.php" method="POST">
            <input type="text" name="reg_fname" placeholder="First Name"
              value="<?php
                if (isset($_SESSION['reg_fname'])) {
                  echo $_SESSION['reg_fname'];
                } ?>"
              required>
            <?php if (in_array('Your first name must be between 2 and 25 characters<br>', $error_array)) {echo 'Your first name must be between 2 and 25 characters<br>';}?>

            <input type="text" name="reg_lname" placeholder="Last Name"
              value="<?php
                if (isset($_SESSION['reg_lname'])) {
                  echo $_SESSION['reg_lname'];
                } ?>"
             required>
            <?php if (in_array('Your last name must be between 2 and 25 characters<br>', $error_array)) {echo 'Your last name must be between 2 and 25 characters<br>';}?>

            <input type="email" name="reg_email" placeholder="Email"
            value="<?php
                if (isset($_SESSION['reg_email'])) {
                  echo $_SESSION['reg_email'];
                } ?>"
              required>
            <?php if (in_array('Email already in use<br>', $error_array)) {echo 'Email already in use<br>';}
            else if (in_array('Invalid email format<br>', $error_array)) {echo 'Invalid email format<br>';}?>

            <input type="password" name="reg_password" placeholder="Password" required>
            <input type="password" name="reg_password2" placeholder="Confirm Password" required>

            <?php if (in_array('Passwords do not match<br>', $error_array)) {echo 'Passwords do not match<br>';}
            else if (in_array('Password must contain english characters and numbers<br>', $error_array)) {echo 'Password must contain english characters and numbers<br>';}
            else if (in_array('Your password must be between 5 and 30 characters<br>', $error_array)) {echo 'Your password must be between 5 and 30 characters<br>';}?>

            <input type="submit" name="reg_button" value="Register">

            <?php if (in_array("<span>You've successfully registered!<span>", $error_array)) {echo "<span>You've successfully registered!<span>";} ?>
            <a href="#" id="signin" class="signin">Have an account? Log in here!</a>

          </form>
        </div>

      </div>

    </div>
  </div>


</body>
</html>
