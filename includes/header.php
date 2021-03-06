<?php
require 'config/config.php';

if (isset($_SESSION['fname'])) {
  $userLoggedIn = $_SESSION['fname'];
} else {
  header('Location: register.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.js"></script>
  <script src="./assets/js/bootstrap.js"></script>
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./assets/css/font-awesome-4.7.0//css/font-awesome.css">
  <link rel="stylesheet" href="./assets/css/index.css">
  <link rel="stylesheet" href="./assets/css/header.css">
  <link rel="stylesheet" href="./assets/css/menu.css">
  <title>Tech Café</title>
</head>
<body>
  <div class="wrapper">
    <nav class="header">
      <a href="#" class="flex">
        <span class="lpic"></span>
      </a>
      <h1 class="flex title">Tech Café</h1>
      <span class="message flex"><?php
        if (isset($_SESSION['fname'])) {
          $userLoggedIn = $_SESSION['fname'];
          echo "Hello, " . $userLoggedIn;
        }?>
      </span>

      <a href="includes/handlers/logout.php" class="flex">
        <i class="fa fa-sign-out" aria-hidden="true" href=''></i>
      </a>

    </nav>
  </div>
  <div>
    <img src="./assets/images/landing.jpg" class="landing fade-in" alt="">
  </div>
