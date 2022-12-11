<?php

include("../model/model.php");

if(isset($_REQUEST["Submit"]))
{
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$username=$_REQUEST["userName"];
$password=$_REQUEST["password"];
$confirmpassword=$_REQUEST["confirmpassword"];
$gender=$_REQUEST["gender"];

if($name>3)
    {
        echo "Please enter a valid Name";
    }
else 
{ 
    echo "Your Name is ".$_REQUEST["name"]; 
}
echo "<br>";


if($email>3)
    {
        echo "Please enter a valid email";
    }
else 
{ 
    echo "Your Email is ".$_REQUEST["email"]; 
}
echo "<br>";
if($username>3)
    {
        echo "Please enter your User Name";
    }
else 
{ 
    echo "Your User Name is ".$_REQUEST["userName"]; 
}
echo "<br>";


if($password<=3)
    {
        echo "Please enter a valid password";
    }
else 
{ 
    echo "Your password is set"; 
}
echo "<br>";
if($confirmpassword==$password)
    {
        echo "Your Password is saved";
    }
else 
{ 
    echo "Comfirm yours password again"; 
}


 echo "<br>" ;
 echo "Your name is ".$_REQUEST["name"]."<br>";
 echo "Your user name is ".$_REQUEST["userName"];
 
 echo "<br>" ;

 $pass=$_REQUEST["password"];

 if(strlen($pass)<=3)
 {
     echo "Your password is invalid, try to give more then 5 charecters";
 }
 else{
        echo "Your password is set";
     }
 echo "<br>";

 if(isset($_REQUEST["gender"]))
 {
     echo "You have selected ".$_REQUEST["gender"];
 }
else{
        echo "You have'nt selected any option" ;
    }
    $mydb = new DB();
            $connobj = $mydb->openCon();
            $mydb->InsertData($connobj, "seller", $name, $email, $username, $password, $confirmpassword, $gender);
            

}
?>
