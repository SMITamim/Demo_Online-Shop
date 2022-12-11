<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<title>Faculty Edit</title>
</head>
<body>
    
<form action="update.php" method="post" onnsubmit="return valid()">
        <h2>Update Info</h2> 

<p id="labels"> Seller Name: </p>
        <input type="text" name="sname" placeholder="Seller Name" id="sname" onkeyup="snameError()">
        <p id="nameerror"></p>
        

        
        

        <p id="labels"> Enter Seller Id: </p>
        <input type="text" name="id" placeholder="Seller Id" id="id" onkeyup="sidError()">
        <p id="nameerror"></p>

        <p id="labels"> Enter Seller Type: </p>
        <input type="text" name="stype" placeholder="Seller Type" id="stype" onkeyup="stError()">
        <p id="nameerror"></p>
        
        
        <button type="submit">Update</button>
</form> 
</body>

<footer>
    <script src="validation.js"></script>
</footer>
</html>


