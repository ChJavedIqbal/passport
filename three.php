<?php

$fptr  = fopen("myfile.txt","r");

if(!$fptr){
    die("Unable to open this file . Please enter a valid filename");

}
$content = fread($fptr, filesize("myfile.txt"));
echo $content;
fclose($fptr);
?>