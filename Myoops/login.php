<?php
session_start();

include('_dbconnect.php');
class login extends Database{
    public $email;
    public $password;
    public $sql;
    public function select(){
        if(isset($_POST['submit'])){
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];

            $this->sql = "SELECT * FROM `ooplogin` WHERE  `email`='$this->email'AND `password` = '$this->password'";
            $queryResult=$this->getConnection()->query($this->sql);
            if($queryResult->num_rows==0){
                return false;

            }
            else{
                $_SESSION['status'] = true;
                header("location: welcome.php");
            }
        }
    }



}

$login = new login;
$result =  $login->select();


?>