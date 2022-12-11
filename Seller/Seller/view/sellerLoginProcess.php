<?php

include("../model/model.php");

$login=$_REQUEST["uname"];

if($uname=="")
    {
        echo "Please enter your User Name";
    }
else 
{ 
    echo "Your User Name is ".$_REQUEST["uname"]; 
}
echo "<br>";

$password=$_REQUEST["password"];

 if($password==$_REQUEST["password"])
 {
     echo "Your password is correct, Login.......";
    

     $email=$_REQUEST["email"];
     
     if($email=="")
         {
             echo "Please enter a valid Email";
         }
     else 
     { 
         echo "Your Email is ".$_REQUEST["email"]; 
     }
     echo "<br>";
     
     $password=$_REQUEST["password"];
     
      if($password==$_REQUEST["password"])
      {
          echo "Your password is correct, Login.......";
          
      }
      else{
             echo "Your password is invalid, try to give right password";
          }
      echo "<br>";
     
      $data = file_get_contents("../Files/SellerData.json");
                         $mydata = json_decode($data);
     
         
                         echo "my value: ".$mydata[1]->lname;
                     
     
     
     
     
 }
 else{
        echo "Your password is invalid, try to give right password";
     }
 echo "<br>";
                
?>