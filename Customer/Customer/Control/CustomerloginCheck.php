<?php
session_start();
if(isset($_POST["submit"]))
{
    if($_POST["uname"]=="laden" && $_POST["password"]=="12345")
    {
        $_SESSION["uname"]=$_POST["uname"];
        $_SESSION["password"]=$_POST["password"];

        header("location:  ../view/CustomerProfile.php");
    }
    else
    {
        echo"Your password and username is not valid";
    }
}

?>    