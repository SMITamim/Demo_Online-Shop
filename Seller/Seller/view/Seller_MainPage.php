<?php
session_start();
include "../View/Seller_Navigation.php";


if(isset($_SESSION["username"]))
{
  header("location: SellerLogin.php");
}


?>

<html>
<head>
    <title>Seller Home Page</title>
</head>
<body>
    <h1>Seller Home Page</h1>
    <hr>

    
</body>
</html>
<html>
<head>
    <title>Login Page</title>
</head>    
<body>
Welcome sir! <h3><?php echo $_SESSION["username"];  ?></h3>

Do you want to <a href ="../control/SellerLogout.php"> LogOut </a>
</body>
</html> 