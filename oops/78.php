<?php






class viceroy{
   public $name;
    public $year;

    function __construct($name, $year){
        $this->name = $name;
        $this->year = $year;

    }
}

$simon = new viceroy('simon', '1924');
echo "the british  viceroy of india, simon is appointed in : $simon->year";


//class jingru{
//
//    public $name;
//    public $salary;
//
//    function __construct($name, $salary){
//        $this->name = $name;
//        $this->salary = $salary;
//
//    }
//
//}
//$javed = new jingru('javed', '290');
//
//echo "The salary of javed jingru is: $javed->salary";




//class Employee{
//    public $name;
//    public $salary;
//
//
//function __construct($name, $salary)
//{
//    $this->name = $name;
//    $this->salary = $salary;
//}
//
//
//
//}
//$javed = new Employee(" javed ",' 200 ');
//echo "the salary of javed is $javed->salary ";


?>