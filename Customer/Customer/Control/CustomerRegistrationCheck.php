<?php
  //  session_start();
    if(isset($_POST["login"]))
    {
        if(empty($_POST["uname"]) || empty($_POST["password"]))
        {
            echo "user name and password require";
        }
        
    }
    if(isset($_POST["registration"]))
    {
   
        header("location: ../View/CustomerReg.php");
        
    }
?>