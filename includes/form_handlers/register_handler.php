<?php

$fname = "";
$lname = "";
$em = "";
$password = "";
$password2 = "";
$error_array = array();

if (isset($_POST['reg_button'])) {
  // isset checks to see if a var is set/exists/declared
  // $_POST collects data from the HTML form. The brackets that follow refer to a specific element in the form


  // First Name
  $fname = strip_tags($_POST['reg_fname']);
  $fname = str_replace(' ', '', $fname);
  $fname = ucfirst(strtolower($fname));
  $_SESSION['reg_fname'] = $fname; //Stores first name into session var

  // Last Name
  $lname = strip_tags($_POST['reg_lname']);
  $lname = str_replace(' ', '', $lname);
  $lname = ucfirst(strtolower($lname));
  $_SESSION['reg_lname'] = $lname; //Stores last name into session var

  // Email
  $em = strip_tags($_POST['reg_email']);
  $em = str_replace(' ', '', $em);
  $em = strtolower($em);
  $_SESSION['reg_email'] = $em; //Stores email into session var

  // Password
  $password = strip_tags($_POST['reg_password']);
  $password2 = strip_tags($_POST['reg_password2']);

  //Validate Email
  if (filter_var($em, FILTER_VALIDATE_EMAIL)) {
    $em = filter_var($em, FILTER_VALIDATE_EMAIL);

    //Check if email is already in use
    $e_check = mysqli_query($con, "SELECT email FROM users WHERE email='$em'");
    $num_rows = mysqli_num_rows($e_check);

    if ($num_rows > 0) {
      array_push($error_array, 'Email already in use<br>');
    }
  } else {
    array_push($error_array, 'Invalid email format<br>');
  }

  if (strlen($fname) > 25 || strlen($fname) < 2) {
    array_push($error_array, 'Your first name must be between 2 and 25 characters<br>');
  }

  if (strlen($lname) > 25 || strlen($lname) < 2) {
    array_push($error_array, 'Your last name must be between 2 and 25 characters<br>');
  }

  if ($password != $password2) {
    array_push($error_array, 'Passwords do not match<br>');
  } else {
    if (preg_match('/[^A-Za-z0-9]/', $password)) {
      array_push($error_array, 'Password must contain english characters and numbers<br>');
    }
  }

  if (strlen($password) > 30 || strlen($password) < 5) {
    array_push($error_array, 'Your password must be between 5 and 30 characters<br>');
  }

  if (empty($error_array)) {
    $password = md5($password);

    $query = mysqli_query($con, "INSERT INTO users VALUES (NULL, '$fname', '$lname', '$em', '$password')");

    array_push($error_array, "<span>You've successfully registered!<span>");

    //Clear Sessions vars
    $_SESSION['reg_fname'] = '';
    $_SESSION['reg_lname'] = '';
    $_SESSION['reg_email'] = '';
  }
}

?>
