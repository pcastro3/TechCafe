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
  <link rel="stylesheet" href="./assets/css/index.css">
  <title>Tech Café</title>
</head>
<body>
  alkefj;kj
