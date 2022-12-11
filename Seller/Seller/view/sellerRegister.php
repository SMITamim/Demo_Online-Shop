<!DOCTYPE html>
<html>
<head>

<title></title>
<link rel="stylesheet" href="../CSS/seller.css">
</head>


<body>


<form action="sellerRegsterProcess.php" method="post">

<fieldset>
<legend><b>REGISTRATION</b></legend><br>
<label>Name : </label>
<input type="text" name="name" class="form-control" /><br />
<hr>



<label>Email : </label>
<input type="text" name="email" class="form-control" /><br />
<hr>



<label>User Name : </label>
<input type="text" name="userName" class="form-control" /><br />
<hr>



<label>Password : </label>
<input type="Password" name="password" class="form-control" /><br />
<hr>



<label>Confirm password : </label>
<input type="Password" name="confirmpassword" class="form-control" /><br />
<hr>



<fieldset>
<legend>
<label>Gender : </label> <br>
</legend>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label> <br><br>
</fieldset>
<hr>



<fieldset>
<legend>
<label>Date of Birth : </label>
</legend>
<input type="Date" name="dateOfBirth" class="form-control" /> (mm/dd/yyyy)<br />
</fieldset>
<hr>



<input type="submit" name="submit" value="Submit" class="button submitbutton" >
<input type="reset" name="reset" value="Reset" class="button resetbutton" >
<br/>
</fieldset>
</form>
</body>

</html>