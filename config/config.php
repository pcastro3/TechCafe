<?php
ob_start();
session_start();

$con = mysqli_connect("localhost", "root", "", "techcafe");

$query2 = "SELECT * FROM products ORDER by id ASC";
$result2 = mysqli_query($con, $query2);

if (mysqli_connect_errno()) {
  echo "Failed to connect: " . mysqli_connect_errno();
}

?>
