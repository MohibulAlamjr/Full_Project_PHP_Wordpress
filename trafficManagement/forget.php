<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="loginbody">
	<div class="title">
		<h1>Traffic Management System</h1>
	</div>

	<div class="loginform">
		<form action="loginManage.php" method="post"><br><br>
			<label>User Name:</label>
			<input type="text" name="username"><br>
			<label>Password :</label>
			<input type="Password" name="pass"><br><br><br>
			<p class="forgetmessage">Your password doesn't match as a <?php echo $type ?> </p>
			<p class="forget">Forget Password!<a href="#"><u>Contact to Admin</u></a></p>
			<label >Login as</label><br>

			 <button type="submit" value="admin" name="category">Admin</button>
			<button type="submit" value="owner" name="category">Owner</button> 
			<button type="submit" value="driver" name="category">Driver</button>
			
		</form>
	</div>


</body>
</html>