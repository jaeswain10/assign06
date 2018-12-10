<<?php

$servername = "localhost";
$username = "s4gccodec_db1";
$password = "58%XtMcfdDNy";
$database =  "s4gccodec_db1";

//create fann_get_total_connections

$conn= mysqli_connect($servername, $username, $password, $database);

//Check connection

if(!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



 ?>
