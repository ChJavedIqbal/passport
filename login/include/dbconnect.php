<?php


$servername = "localhost";
$username = "root";
$password = "9090";
$database = "Mylogin";
$conn = mysqli_connect($servername,$username, $password, $database);

if(!$conn){
 die("Connection failed" . mysqli_connect_error());
}



?>



