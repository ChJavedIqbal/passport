<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if(isset($_SESSION['status'])){
session_unset();
session_destroy();
    header('location:../index.php');
}
else{
    header("location:../main.php");
}
?>