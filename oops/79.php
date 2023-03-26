<?php


class Employee{
    public $name;
    public $salary;

    function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

function __destruct()
{
    echo "I am destructing: $this->name <br>";
}


}

$javed = new Employee('javed', '200');
$skilled = new Employee('skilled', '100');
$decoder = new Employee('decoder', '300');

echo  "javed salary is $javed->salary <br>";
echo "skilled salary is $skilled->salary <br>";
echo "decoder salary is $decoder->salary <br>";


?>