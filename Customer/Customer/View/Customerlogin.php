<?php
    //include("../model/model.php");
    //include("../COntrol/regihandle.php");
   // include("..Control/registrationhandle.php");
    
     include "../Control/CustomerLoginCheck.php";
     if(isset($_SESSION["uname"]))
     {
        header("location: CustomerProfile.php");
     }
     else 
     {
        include "../Control/CustomerRegistrationCheck.php";
     }  
   
     include("../COntrol/regihandle.php");
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>
<body>
    <h2 id="labels"><b>Customer Login</b></h2>
    <hr>
    
    <form action="" method="post" enctype="multipart/form-data">
    <a href="http://localhost/WT_Project/View/Homepage.php">Back</a>
        <table>
            <tr id="labels">
                <td>User name : </td>
                <td><input type="text" placeholder="Enter your user name" name="uname"></td>
            </tr>
            <tr id="labels">
                <td>Password : </td>
                <td><input type="password" placeholder="Enter your Password" name="password"></td>
            </tr>
        </table>
        <input type="submit" value="Login"class="loginbutton" name="submit">
        <input type="submit" value="Create New Account"class="registrationbutton" name="registration">
    
     


</body>
</html> 