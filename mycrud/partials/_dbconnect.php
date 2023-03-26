<?php

$servername ="localhost";
$username = "root";

$password = "9090";
$database = "mylog";

$conn = mysqli_connect($servername, $username,$password, $database);

if(!$conn){
   die("connection failed " . mysqli_connect_error());
}


?>

