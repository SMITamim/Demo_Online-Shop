<?php
include ("..//control/registrationhandle.php");
?>
<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>
<body>
</form>
    <form action="" method="post">
        <input type="submit" name="fetch"class="loginbutton" value="Fetch Data">
    </form>
    <form action="" method="post">
        <input type="text" name="searchdata">
        <input type="submit" name="search"class="searchbutton" value="Search">
        <input type="submit" name="delete"class="deletebutton" value="Delete">


    </form>
    <form action="" method="post">
        <input type="text" name="fname" value="<?php echo "$fname"; ?>"> 
        <input type="text" name="lname" value="<?php echo "$lname"; ?>"> 
        <input type="text"name="age" value="<?php echo" $age";?>">
        <input type="text" name="pass" value="<?php echo "$pass"; ?>"> 

        <input type="submit" name="update"class="loginbutton" value="update">
    </form>
</body>
</html>