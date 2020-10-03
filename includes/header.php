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
  <title>Tech Café</title>
</head>
<body>
  <nav class="header">
    <a href="includes/handlers/logout.php">
      <i class="fa fa-sign-out" aria-hidden="true" href=''></i>
    </a>
  </nav>
