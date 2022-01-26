<?php 

$servername = "localhost";
$username = "root";
$password = "";
$databasename ="nike";
 

$conn = mysqli_connect( $servername, $username , $password , $databasename );


$sql =  "INSERT INTO `review` (`id`, `firstname`, `sms`, `nummer`, `email` )
 VALUES (NULL, '{$_POST["firstname"]}', '{$_POST["sms"]}', '{$_POST["nummer"]}', '{$_POST["email"]}'  );";

mysqli_query($conn , $sql );

 header("Refresh:3; url=./index.php");

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
