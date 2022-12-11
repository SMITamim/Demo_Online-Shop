<?php

class DB{

    function openCon(){
            
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "wt_project";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        if($conn->connect_error){
            echo "Connection error";
        }

        return $conn;
        
    }

    function closeCon($conn){
        $conn->close();
    }
    
    function InsertData($conn, $tablename, $name, $email, $username, $password, $confirmpassword){
        $sqlstr = "INSERT INTO $tablename (name, email, uname, password, cpassword) Values ('$name','$email','$username','$password', '$confirmpassword')";
        
        if($conn->query($sqlstr)){
            echo "record inserted";
        }
        else{
            echo"can not insert".$conn->error;
        }

    }

    function fetchData($conn, $tablename){
        $sqlstr="SELECT * FROM $tablename";
        $results = $conn->query($sqlstr);
        return $results;
    }

    function searchUser($conn, $tablename, $name){
        $sqlstr = "SELECT * FROM $tablename WHERE name='$name'";
        $results = $conn->query($sqlstr);
        return $results;
    }

    function updateData($conn, $tablename, $name, $email, $username, $password, $confirmpassword){
        $sqlstr = "UPDATE $tablename SET name='$name',email='$email', uname='$username', password='$password', cpassword='$confirmpassword' WHERE email='$email'";
        $conn->query($sqlstr);

    }

    function deleteData($conn, $tablename, $name){
        $sqlstr = "DELETE FROM $tablename WHERE Name='$name'";

        if($conn->query($sqlstr)){
            echo "Data deleted";
        }
        else{
            echo "Data not deleted".$conn->error;
        }
    }

}

?>