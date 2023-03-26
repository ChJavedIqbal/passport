<?php


//include 'dbconnect.php';

require 'dbconnect.php';



$sql = "SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo $num;
echo "Records found in the database";
while($row = mysqli_fetch_assoc($result)){
    echo $row['sno'] . ".Hello" . $row['name'] . "Welcome to" . $row['dest'];
    echo "<br>";
}
?>