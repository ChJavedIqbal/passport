<?php

$servername = "localhost";
$username = "root";
$password = "9090";
$database = "DBharry1";
//create a connection

$conn = mysqli_connect($servername, $username, $password, $database);


//die if connection was successful
if (!$conn) {
die("Sorry we failed to connect: " . mysqli_connect_error());

} else {
echo "connection was successful<br>";
}
?>