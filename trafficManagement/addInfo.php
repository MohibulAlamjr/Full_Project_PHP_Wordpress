<!DOCTYPE html>
<html>
<head>
	<title>Add Information</title>
  <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="addinfoBody">
   <a class="navbar-brand" href="http://localhost/trafficManagement/">
                <h1 style="margin-left: 97px; text-decoration: none;">ATMS</h1>
                <!-- <img src="images/logo.png" alt="logo"> -->
            </a>

   <form action="addInfoManage.php" method="post">
   	<div class="addinfoform">
   	<label>First Name:</label><br>
   	<input type="text" name="fname"><br>
   	<label>Last Name:</label><br>
   	<input type="text" name="lname"><br>
   	<label>User ID:</label><br>
   	<input type="text" name="userId"><br>
   	<label>User Name:</label><br>
   	<input type="" name="userName"><br>
   	<label>Password : </label><br>
   	<input type="Password" name="userPass"><br>
   	<label>Email : </label><br>
   	<input type="email" name="email"><br>
   	<label>Age:</label><br>
   	<input type="number" name="userAge"><br><br>
   	<div>
   		<label>Gender:</label><br>
		<input class="radiob" type="radio" name="gender" value="male" checked> Male
		<input class="radiob"  type="radio" name="gender" value="female"> Female
		<input class="radiob"  type="radio" name="gender" value="other"> Other
   	</div><br>
  	<label>Register as:</label><br>
   	<input class="radiob" type="radio" name="cate" value="admininfo" checked> Admin
  <input class="radiob"  type="radio" name="cate" value="ownerinfo"> Owner
  <input class="radiob"  type="radio" name="cate" value="driverinfo"> Driver
  </div>
   	
   <input  type="submit">
   </div>
   </form>
</body>
</html>