<?php
session_start();

if(!isset($_SESSION["uname"]))
{
    header("location: customerlogin.php");
}


?>

<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>    
<body>
<h1 id="labels2">Welcome!!</h1> <h3 id="labels"><?php echo $_SESSION["uname"];  ?></h3>
<a id="labels3" href ="../View/ViewData.php"> Edit profile </a>

<h1 id="labels">Do you want to</h1> <a id="labels3" href ="../control/CustomerLogout.php"> LogOut </a>
</body>
</html> 