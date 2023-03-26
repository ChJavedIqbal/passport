<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$fptr = fopen("myfile2.txt", "w");

fwrite($fptr,"My name is anhtony ");


?>