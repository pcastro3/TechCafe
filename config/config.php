<?php
ob_start();
session_start();

$con = mysqli_connect("localhost", "root", "", "techcafe");

if (mysqli_connect_errno()) {
  echo "Failed to connect: " . mysqli_connect_errno();
}

?>
