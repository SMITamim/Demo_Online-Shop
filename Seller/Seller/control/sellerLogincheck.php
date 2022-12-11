<?php
session_start();

if(isset($_POST["submit"]))
{
    if($_POST["uname"]=="Sakib" && $_POST["password"]=="1234")
    {
        $_SESSION["uname"]=$_POST["uname"];
        $_SESSION["password"]=$_POST["password"];

        header("location:  ../view/Seller_Mainpage.php");
    }
    else
    {
        echo"Your password and username is not valid";
    }
}

?> 