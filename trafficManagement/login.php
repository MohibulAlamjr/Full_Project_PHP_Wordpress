<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="loginbody">
	<div class="title">
		<h1><a style="text-decoration: none;color: #fff;" href="index.php">Traffic Management System</a></h1>
	</div>

	<div class="loginform">
		<form action="loginManage.php" method="post"><br><br>
			<label>User Name:</label><br>
			<input type="text" name="username"><br>
			<label>Password :</label><br>
			<input type="Password" name="pass"><br><br><br>
			<label style="margin-bottom: 200px;">Login as</label><br>

			 <button type="submit" value="admininfo" name="category">Admin</button>
			<button type="submit" value="ownerinfo" name="category">Owner</button> 
			<button type="submit" value="driverinfo" name="category">Driver</button>
			
		</form>
	</div>


</body>
</html>