<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);






class car{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function get_name(){
        return $this->name;
    }


    function get_color(){
        return $this->color;
    }

}

$honda = new car('honda','red');
echo "name: " . $honda->get_name();
echo " color: ".$honda->get_color();

















//
//class Vegetables{
//   public $name;
//   public $color;
//
//
//    function set_name($name){
//        $this->name = $name;
//
//    }
//    function get_name(){
//       return $this->name;
//    }
//    function set_color($color){
//        $this->color = $color;
//
//    }
//    function get_color()
//    {
//        return $this->color;
//    }
//
//}
//
//$spinach = new Vegetables();
//$spinach->set_name('spinach');
//$spinach->set_color('green');
//echo "name: " . $spinach->get_name();
//echo " color: " . $spinach->get_color();
//
//$ladyfinger = new Vegetables();
//$ladyfinger->set_name('ladyfinger');
//$ladyfinger->set_color('green');
//echo " name: " . $ladyfinger->get_name();
//echo " color: " . $ladyfinger->get_color();

















//class fruit{
//    public $name;
//    public $color;
//
//    function set_name($name)
//    {
//            $this->name = $name;
//
//    }
//    function get_name()
//    {
//        return $this->name;
//    }
//    function set_color($color)
//    {
//        $this->color = $color;
//    }
//    function get_color()
//    {
//        return $this->color;
//    }
//}
//
//$apple = new fruit();
//$apple->set_name('Apple ');
//$apple->set_color('red ');
//
//echo 'name: '. $apple->get_name();
//echo 'color: ' . $apple->get_color();






















//class Player{
//    //properties
//    public $name;
//    public $speed = 5;
//    public $running = false;
//    //Methods
//    function set_name($name){
//        $this->name = $name;
//    }
//    function get_name(){
//        return $this->name;
//    }
//    function run(){
//        $this->running = true;
//    }
//    function stopRun(){
//        $this->running = false;
//    }
//}
//
//echo "lets understand oops<br>";
//$player1 = new Player();
//$player1->set_name('harry<br>');
//echo $player1->get_name();
//
//$player2 = new Player();
//$player2->set_name('rohan<br>');
//echo $player1->get_name();
//
//
//$player3 = new Player();
//$player3->set_name('javed<br>');
//echo $player1->get_name();



?>