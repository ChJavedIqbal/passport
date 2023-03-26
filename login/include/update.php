<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('dbconnect.php');
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $sno = $_POST['sno'];
    $sql = ("UPDATE `mylogin` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email' WHERE `sno` = '$sno'");
    $update = mysqli_query($conn, $sql);
    $_SESSION['update'] = "record updated successfully";
    header("location: ../index.php");

}


?>