<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="welcomeBody">
	<?php

if($type=='admininfo'){
	$type='an: Admin';
} elseif ($type=='ownerinfo') {
	$type='an: Owner';}
	else {
		$type = 'a: Driver';
	};

	?>
 <a class="navbar-brand" href="http://localhost/trafficManagement/">
                <h1>ATMS</h1>
                <!-- <img src="images/logo.png" alt="logo"> -->
            </a>

	 <div class="WelcomeForm">
		<div class="profileimg">
			<img src="images/profileicon.png">
		</div>
		<div class="formwelcome">
			<h1>Welcome <br> <?php 
            if ($wgender=='male') {
            	echo "Mr. ".$wfname." ".$wlname;
            }else{
            	echo "Mrs.".$wfname." ".$wlname;
            }
			?></h1>
            <h3 >You are Successfully Login as <?php echo  $type ?></h3>
			 
        </div>
       
       <div class="adminOption" >
       	<button><a href="addinfo.php">Add Info.</a></button>
       	<button><a href="updateInfo.php">Update Info.</a></button>
       	<button><a href="delete.php">Delete Info.</a></button>
       </div>
       
	</div> 


</body>
</html>