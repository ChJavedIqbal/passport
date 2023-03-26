<?php
$fptr = fopen("myfile.txt", "r");

//echo fgets($fptr)."<br>";
//echo fgets($fptr);

//while($a = fgets($fptr)){
//    echo $a;
//}

while($a = fgetc($fptr)){
    if($a == "."){
        break;

    }else{
        echo $a;
    }
}

fclose($fptr);
?>