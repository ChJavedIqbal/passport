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
//Create Table in database
$sql = "CREATE TABLE trip (sno INT(6) NOT NULL AUTO_INCREMENT,
 name VARCHAR (12) NOT NULL, 
 dest VARCHAR(6) NOT NULL, PRIMARY KEY(sno))";



$result = mysqli_query($conn, $sql);

if($result){
    echo "Table was created successfully";
}
else{
    echo "Table was not created successfully" . mysqli_error($conn) ;
}


?>