<?php

session_start();
include('_dbconnect.php');


   class signup extends Database
   {
       public $username;
       public $email;
       public $password;
       public $sql;

       public function insert()
       {
           if (isset($_POST['submit'])) {
               $this->username = $_POST['username'];

               $this->email = $_POST['email'];

               $this->password = $_POST['password'];

               $this->sql = "INSERT INTO `ooplogin` ( `username`, `email`, `password`) VALUES ( '$this->username', '$this->email', '$this->password')";

               if ($this->getConnection()->query($this->sql)) {

                   if ($this->username == "" || $this->email == "" || $this->password == "")
                   {
                       $_SESSION['signup'] = false;
                       header("location: index.php");
                   }
                   else
                   {
                       header("location: index.php");
                       $_SESSION['signup'] = true;
                   }
               }
               else
               {
                   die('connection failed');
               }

           }


       }

   }

$obj = new signup;
   $insert =  $obj->insert();



?>