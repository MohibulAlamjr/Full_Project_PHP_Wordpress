<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "blood");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<link rel="stylesheet" type="text/css" href="../layout/styles/style.css">
    <link rel="stylesheet" href="../search/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../search/style/css/bootstrap.css">
</head>
<body>

<!-- ##########################################################################################
****************************************************Header******************************************
########################################################################################## -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +88 0631 63199</li>
        <li><i class="fa fa-envelope-o"></i>rofikulislamrajib@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="../homepage.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/bg.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <a href="../homepage.php"><img src="../images/logo.png"></a>
      </div>
      <nav id="mainav" class="fl_right">
           <ul class="clear">
                    <li class="active"><a href="../homepage.php">Home</a></li>
                    <li><a class="drop" href="#">Pages</a>
                        <ul>
                            <li><a href="../pages/gallery.php">Gallery</a></li>
                        </ul>
                    </li>
                   
                    <li><a href="../reg_log/view.php">View All</a></li>
                    <li><a href="#" class="drop">Search Donor</a>
                        <ul>
                            <li><a href="../search/search_by_group.php">Search By Group</a></li>
                            <li><a href="../search/search_by_name.php">Search By Name</a></li>
                            <li><a href="../search/search_by_date.php">Search By Date</a></li>
                        </ul>
                    </li>
                </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
<!-- ##########################################################################################
****************************************************Header******************************************
########################################################################################## -->

	<div class="registration-form"> 
		<h2>Registration Form</h2>
		<form method="post" action="register_manage.php"> 
			<div>
				<label for="fname">First Name</label>
				<input type="text" id="fname" name="fname" required="" />
			</div>
			<div>
				<label for="lname">Last Name</label>
				<input type="text" id="lname" name="lname" required="" />
			</div>
			<div>
				<label for="email">Email</label>
				<input type="email" id="email" name="email" required="" />
			</div>
			
            <div>
        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact" pattern="[0-9]{11}" title="11 numeric characters only" maxlength="11" required="" />
      </div>
            <div>
        <label for="location">Location</label>
        <input type="text" id="location" name="location" required="" />
      </div>
			<div>
				<label for="age">Age</label>
				<input type="number" id="age" name="age" min="18" max="55" required="">
			</div>
			<div>
				<label for="weight">Weight</label>
				<input type="number" id="weight" name="weight" min="45" required="">
			</div>
            <div>
                <label for="date">Last Donate Date:</label>
                <input type="date" id="date" name="date" required="">
            </div>
            <div>
                <label for="blood_group">Blood Group</label>
                <select name="blood_group" id="blood_group" class="btn btn-danger">
                    <option value="A+ve">A+ve</option>
                    <option value="B+ve">B+ve</option>
                    <option value="AB+ve">AB+ve</option>
                    <option value="O+ve">O+ve</option>
                    <option value="A-ve">A-ve</option>
                    <option value="B-ve">B-ve</option>
                    <option value="AB-ve">AB-ve</option>
                    <option value="O-ve">O-ve</option>
                </select>
            </div>
			<div>
			<button type="submit" class="col-md-3">Register</button>
			</div>
			<p>Alrady Registered? Please <a href="login.php">Login Here</a></p>
		</form>
	</div>

<?php
include "../pages/footer.html";
?>