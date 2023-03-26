<?php
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

$sql = "SELECT * FROM `trip` WHERE `dest` = 'bihar'";


$result = mysqli_query($conn, $sql);


$num = mysqli_num_rows($result);
echo 'Records found in  database '. $num . "<br>";
$no = 1;
if($num>0){
while($row = mysqli_fetch_assoc($result)){
    echo $no . " Hello ". $row['name']." Welcome to ".$row['dest'];
    $no = $no+1;
    echo "<br>";
}};
//Usage of WHERE clause to update
$sql =  "UPDATE `trip` SET `name` = 'Shehanshah' WHERE `trip`.`sno` = 3";
$result = mysqli_query($conn, $sql);
if($result){
    echo "We updated the record successfully";
}else{
    echo "We could not updated successfully ";
}


?>