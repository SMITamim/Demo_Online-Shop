
<?php
session_start();

$snameErr = $idErr= $stypeErr = "";  
$sname  = $id = $stype = "";  
$flag = false;
$successfulMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["sname"])) {
        $snameErr = " *This field can't be empty";
        $flag = true;
    }
    if (empty($_POST["id"])) {
        $idErr = " *This field can't be empty";
        $flag = true;
    }
    if (empty($_POST["stype"])) {
        $stypeErr = " *This field can't be empty";
        $flag = true;
    }
   
    if (!$flag) {
        $sname = $_POST["sname"];
        $id = $_POST["id"];
        $stype = $_POST["stype"];
    
        $sql = "INSERT INTO 'seller'(sname, id, stype) values('$sname','$id','$stype')";
        $result = mysqli_query($conn, $sql);
        if ($result) 
        {
            $SESSION['uname'] = $row ['uname'];
            $SESSION['name'] = $row ['name'];
            $SESSION['id'] = $row ['id'];
            header("Location: seller.php");
            exit();
        } 
        else 
        {
            $errorMessage = "Error while Updating.";
        }
    }
}
?>