<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//connecting to the database

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

$sql = "SELECT * FROM `trip`";


$result = mysqli_query($conn, $sql);


$num = mysqli_num_rows($result);
echo 'Records found in  database '. $num . "<br>";

while($row = mysqli_fetch_assoc($result)){
   echo $row['sno'] . "Hello ". $row['name']."Welcome to ".$row['dest'];
    echo "<br>";
}




?>