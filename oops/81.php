<?php

class Employee{
    public $name = 'harry';
    private $salary = 1200;
    private $grade = 3;

    function showName(){
        echo "The name of this employee is $this->name";
    }

}

class Programmer extends Employee{
    public $language = "php";
    function changeLanguage($lang){
        $this->language = $lang;
    }
}


$rohan = new Employee();
$rohan->name = "rohan";
$rohan->showName();

$shubham = new Employee();
$shubham->name = "shubham";
$shubham->showName();

 $geeta = new Programmer() ;
 $geeta->name = 'geeta';
 echo $geeta->changeLanguage('python');
 $geeta->showName();

?>