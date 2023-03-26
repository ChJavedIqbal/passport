
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


$sql = "DELETE FROM `trip` WHERE `dest`= 'Russia'";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows $aff <br>";

if($result){
    echo "Deleted successfully ";
}
else{
    $err = mysqli_error($conn);
    echo "Not Deleted successfully" . $err;
}



?>