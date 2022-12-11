<?php
    
    //include "../Control/CustomerRegValidation.php";
    include "../Control/CustomerRegistrationCheck.php";
    include("../COntrol/regihandle.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration page</title>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>
<body>
   
    <h2 id ="labels"><b>Customer Registration</b></h2>
    <hr>
    <form action="" method="post" enctype="multipart/form-data" onsubmit="return validatename()">
    <div id="mylelativepostion">
    <a href="http://localhost/WT_Project/View/Customerlogin.php">Back</a>
        <table>
            <tr id ="labels">
                <td >First Name :</td>
                <td><input type="text" placeholder="Enter username" name="fname" id="fname"onekeyup="validatename()"></td>
                <p id="nameerror"></p>
            </tr>
            <tr id ="labels">
                <td>Last Name :</td>
                <td><input type="text" placeholder="Enter username" name="lname"></td>
            </tr>
            <tr id ="labels">
                <td>Age :</td>
                <td><input type="number" placeholder="Enter age" name="age"></td>
            </tr>
            <tr id ="labels">
                <td>Password :</td>
                <td><input type="password" placeholder="Enter password" name="pass"></td>
            </tr>
            
            
           

                

           

            
        </table>
        <br>
      
        <input  type="submit" value="Registration"class="registrationbutton" name="createaccount">
        
        <input type="submit" value="Login"class="loginbutton"  name="submit">

    </form>
    
</div>
<script src="../js/validation.js"></script>
</body>
</html>