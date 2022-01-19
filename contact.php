<?php 

$severname = "localhost";
$username = "root";
$password = "";
$databasename ="nike";
 

$conn = mysqli_connect( $severname, $username , $password , $databasename );


$sql =  "INSERT INTO `users` (`id`, `firstname`, `email`, `nummer`, `sms` )
 VALUES (NULL, '{$_POST ["firstname"]}', '{$_POST["email"]}', '{$_POST["nummer"]}', '{$_POST["sms"]}'  );";

mysqli_query($conn , $sql );


  header("Refresh:3; url=./index.html");

?>
<link rel="stylesheet" href="style.css">

<div class="center">
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
</div>

