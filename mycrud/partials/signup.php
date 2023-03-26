<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include("_dbconnect.php");
    $fname = test($_POST['fname']);
    $lname = test($_POST['lname']);
    $email = test($_POST['email']);
    $password = test($_POST['password']);
}
if($fname == "" || $lname == "" || $email == "" || $password == "")
{

    $_SESSION['empty'] =true;
    header('location:../index.php');


}

else {
    $sql = "INSERT INTO `mylog` ( `fname`, `lname`, `email`,`password`) VALUES ('$fname','$lname','$email','$password')";
    $result = mysqli_query($conn,$sql);

    if($result){
        header('location: login.php');
    }
    else{
        $_SESSION['wrong'] =true;
        header('location:../index.php');
    }
}

function test($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
