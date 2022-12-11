<?php
    include "../View/NavigationBar.php";
?>
<?php
    echo "<br>";
    setcookie("Mainpage","/",time()+(86400*30),"/");

    if(isset($_COOKIE["Mainpage"]))
    {
        echo "You have visited me before";
    }
    else
        echo "You are visiting me first time. Thank you!!!";

?>