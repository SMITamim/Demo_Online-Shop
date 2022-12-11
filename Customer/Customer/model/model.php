<?php

class DB
{
    function opencon()
    {
       $dbhost="localhost";
       $dbuser="root";
       $dbpass="";
       $dbame="mydb";
       $conn=new mysqli($dbhost,$dbuser,$dbpass,$dbame);
       if($conn->connect_error)
       {
       echo"canntot create connection object".$conn->connect_error;
       }
       return $conn;
    }
    
function InsertData($fname,$lname,$age,$pass, $tablename,$conn)
{
    $sqlstr="INSERT INTO $tablename(fname,lname,age,pass) VALUES('$fname','$lname','$age','$pass')";


if($conn->query($sqlstr)==TRUE)
 {
    echo "record inserted";
 }
else{
    echo"record canntot inserted".$conn->error;
}
}
function fetchData($conn,$tablename)
{
    $sqlstr="SELECT * FROM $tablename";
    $results=$conn->query($sqlstr);
return $results;
}
function searchUser($conn,$tablename,$fname)
{
    $sqlstr="SELECT * FROM $tablename WHERE fname='$fname'";
    $results=$conn->query($sqlstr);
return $results;
}
function updateData($tablename,$fname,$lname,$age,$pass,$conn)
{
    $sqlstr="UPDATE $tablename SET fname='$fname',lname='$lname',age='$age',pass='$pass'WHERE fname='$fname'";
    if($conn->query($sqlstr))
    {
        echo"updated";
    }
    else{
        echo"not updated";
    }
}
function deleteData($tablename,$fname,$conn)
{
    $sqlstr="DELETE  FROM $tablename WHERE fname='$fname'";
    if($conn->query($sqlstr))
    {
        echo"Deleted";
    }
    else{
        echo"not deleted".$conn->error;
    }

}
function closecon($conn){
$conn->close();


}

}
?>