<?php
include("../model/model.php");

if(isset($_POST["createaccount"]))
{
  $firstname=$_POST["fname"];
  $lname=$_POST["lname"];
  $age=$_POST["age"];
  $pass=$_POST["pass"];
  if(empty($firstname) ||empty($lname)||empty($age)||empty($pass))
  {
      echo"all fields are requred";
  }
  else{
      $mydb=new DB();
      $conobj=$mydb->opencon();
      $mydb->InsertData($firstname,$lname,$age,$pass,"person",$conobj);
      $mydb->closecon($conobj);
  }
}
?>