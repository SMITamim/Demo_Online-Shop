<?php

    session_start();
    $haserror=0;
    If(isset($_POST["createaccount"]))
    {
        if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["presentaddress"]) || empty($_POST["permanentaddress"]) || empty($_POST["phnNo"]) || 
        empty($_POST["Nid"]) || empty($_POST["email"])|| empty($post["Gender"]))
        {
            echo "All information Require";
        }
        else{
            $haserror=1;
        }

        if($haserror==1)
        {
            $_SESSION["username"]=$_POST["username"];
            $_SESSION["password"]=$_POST["password"];
            $_SESSION["presentaddress"]=$_POST["presentaddress"];
            $_SESSION["permanentaddress"]=$_POST["permanentaddress"];
            $_SESSION["phnNo"]=$_POST["phnNo"];
            $_SESSION["Nid"]=$_POST["Nid"];
            $_SESSION["email"]=$_POST["email"];
            $_SESSION["Gender"]=$_POST["Gender"];
            header("location: ../View/Customerlogin.php");
        }
    }
    if(isset($_POST["login"]))
    {
        header("location: ../View/Customerlogin.php");
    }
    
?>