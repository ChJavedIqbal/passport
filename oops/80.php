<?php

class Fruit{

    public $name;
    public $color;
    public $weight;

function set_name($name){
    return $this->name;
}



}
$Mango = new Fruit();
echo "$Mango->set_name('Mango')";
//$Mango->color = 'yellow';
//$Mango->weight = '10gms';



?>