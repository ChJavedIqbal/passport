<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Employee{
    public $name;
    public $lang;
    public $salary;

   public function __construct($name, $lang, $salary){
        $this->name = $name;
        $this->lang = $lang;
        $this->salary = $salary;

}
public function describe(){
       echo "Name of the programmer: $this->name<br>";
       echo "language of the programmer: $this->lang<br>";
       echo "salary of the programmer: $this->salary<br>";
}

}

$harry = new Employee('harry','Php',3);
echo $harry->describe();
?>