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
    echo "connection was successful";
}


//Variables to be inserted into the table
$name = "Vikrant";
$destination = "Russia";


//sql query to be executed
$sql = "INSERT INTO trip (name, dest) VALUES ( '$name', '$destination')";


$result = mysqli_query($conn, $sql);


if($result){
    echo "The record has been created Successful</br>";
}
else{
    echo "Record was not created successfully" . mysqli_error($conn) ;
}






?>