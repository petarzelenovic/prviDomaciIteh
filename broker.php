<?php

$host = "localhost";
$user = "root";
$pw = "";
$db = "bazar";


$conn = mysqli_connect($host, $user, $pw,$db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
