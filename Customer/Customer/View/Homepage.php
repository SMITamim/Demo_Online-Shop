<?php
   

    include "../View/NavigationBar.php";
?>
<?php
    echo "<br>";
    setcookie("Homepage","/",time()+(65567*30),"/");

    if(isset($_COOKIE["Homepage"]))
    {
        echo "You have visited this site before";
    }
    else
        echo "You are visiting me first time. Thank you!!!";

?>