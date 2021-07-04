<!DOCTYPE html>
<html>
<head>
	<title>Delete Information</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="deleteManage">

<a style="text-decoration: none;" class="navbar-brand" href="http://localhost/trafficManagement/">
                <h1 style="color: #fff">ATMS</h1>
                <!-- <img src="images/logo.png" alt="logo"> -->
            </a>
<div class="form">


	<form action="deleteManage.php" method="post">
		<div>
			<label><h2>Delete information of</h2></label>
			<input class="radiob" type="radio" name="cate" value="admininfo" checked> Admin
			<input class="radiob"  type="radio" name="cate" value="ownerinfo"> Owner
			<input class="radiob"  type="radio" name="cate" value="driverinfo"> Driver
		</div>
		<div>
			<label><h2>Input ID</h2></label>
			<input type="text" name="dsid">
		</div>
		<br><br>
		<button type="Submit">Delete</button>
	</form>
</div>

</body>
</html>