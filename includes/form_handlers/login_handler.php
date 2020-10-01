<?php

if (isset($_POST['log_button'])) {
  $email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL);

  $_SESSION['log_email'] = $email; //store email into session var
  $password = md5($_POST['log_password']);

  //Check to see if credentials exist
  $check_db_query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
  $check_login_query = mysqli_num_rows($check_db_query);

  if ($check_login_query == 1) {
    $row = mysqli_fetch_array($check_db_query);
    $fname = $row['fname'];

    $_SESSION['fname'] = $fname;
    header("Location: index.php");
    exit();
  }
  else {
    array_push($error_array, 'Email or password was incorrect<br>');
  }
}

?>
