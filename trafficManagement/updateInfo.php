<!DOCTYPE html>
<html>
<head>
	<title>Update Information</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="updateinfo">


<div class="form">
	<form action="updateinfoManage.php" method="post">
		<div>
			<label><h2>Update information of</h2></label>
			<input class="radiob" type="radio" name="cate" value="admininfo" checked> Admin
			<input class="radiob"  type="radio" name="cate" value="ownerinfo"> Owner
			<input class="radiob"  type="radio" name="cate" value="driverinfo"> Driver
		</div>
		<div>
			<label><h2>User ID</h2></label>
			<input type="text" name="usid">
		</div>
		<div>
			<label><h2>Select Field</h2></label>
			<select name="options">
				<option value="null">Select an Option</option>
				<option value="uname">User Name</option>
				<option value="pass">Password</option>
				<option value="email">Email</option>
			</select>
		</div>
		<div>
			<label><h2>New Value</h2></label>
			<input type="text" name="update" >
		</div><br>
		<button type="Submit" >Submit</button>
	</form>
</div>

</body>
</html>