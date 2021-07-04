<!DOCTYPE html>
<html>
<head>
	<title>VehicleID</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="loginbody">
	<div class="title">
		<h1>Traffic Management System</h1>
	</div>

	<div class="loginform">
		<form  action="vehicleidManage.php" method="post"><br><br>
			<label style="margin-top: 80px;" >Your Id:</label><br>
			<input type="text" name="uid"><br><br>
			<label style="margin-top: 80px;" >Vehicle Id:</label><br>
			<input type="text" name="vid"><br>
			

			 
		 <button type="submit" name="type" value="<?php echo $type;?>" > Login</button>  
			
			
		</form>
	</div>






</body>
</html>

