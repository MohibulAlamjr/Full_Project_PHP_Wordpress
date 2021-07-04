<?php

include'databaseconnect.php';
//get value
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['psw'];
$cpass=$_POST['cPsw'];
$currentCity=$_POST['cCity'];
$gender=$_POST['gender'];
$homeTown=$_POST['hCity'];
$phone=$_POST['phone'];
$nid=$_POST['nid'];
$blood=$_POST['blood'];
$relation=$_POST['relation'];
$varify=$_POST['reg'];



session_start();

if (isset($_POST['reg'])) {


//pass check
$pass=$_POST['psw'];
$cpass=$_POST['cPsw'];
if ($pass==$cpass) {
	


//client check

	$varify=$_POST['reg'];
	if ($varify=='Register as Patient') {

       //public

		//id genaret

						$x;

				$sql = "SELECT id FROM public ORDER BY id DESC LIMIT 1";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				       $x= $row["id"];
				       
				} }else {
				    echo "0 results";
				}


				$y=strlen($x);
				$r=0;
				for($i=1;$i<$y;$i++){

				    
				    
				     $r=$r.$x[$i];
				    

				}



				$k=intval($r);
				$k=$k+1;
				$u=strval($k);
				$id=$x[0].$u;
				

		
//public database
   
				$sql = "INSERT INTO public (serial,fName,lName , pass,currentCity,gender,homeTown,phone,nid,bloodGroup,relation,id )
				VALUES ('','$fname', '$lname','$pass','$currentCity','$gender','$homeTown','$phone','$nid','$blood','$relation', '$id')";

				if ($conn->query($sql) === TRUE) {





					?>
				<!-- 	welcome for public -->

					   <!DOCTYPE html>
						<html>
						<head>
							<title>Welcome To medi Desk</title>
							<meta charset="utf-8">
						  <meta name="viewport" content="width=device-width, initial-scale=1">
						  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
						  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
						  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
						  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
						  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
						 <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" type="text/javascript"></script>
						 <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
						<link rel="stylesheet" type="text/css" href="asset/css/signUp.css">
						</head>
						<body>



						<div class="container">
						  <div class="row">
						    <div class="col-sm-3"></div>
						     
						    <div class="col-sm-6">
						      <div class="welcomeBox">
						      	<h1>Medi Desk</h1>
						      	<h2>Welcome</h2>
						      	<p>You are Successfully registered!</p>
						      	<p>Your ID is: <span><?php echo $id; ?></span></p>
						      	<p>Keep it for Login</p>
						      	<a href="http://localhost/mediDesk/"><button type="button" class="btn btn-primary">Login</button></a>

						      </div>
						    </div>
						    </div>
						    <div class="col-sm-3">
						      
						    </div>
						  </div>
						</div>
						
						</body>
						</html>

					<?php
				   
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}

				




          


	}else{
      //Doctor

			$x;

				$sql = "SELECT id FROM doctor ORDER BY id DESC LIMIT 1";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				       $x= $row["id"];
				       
				} }else {
				    echo "0 results";
				}


				$y=strlen($x);
				$r=0;
				for($i=1;$i<$y;$i++){

				    
				    
				     $r=$r.$x[$i];
				    

				}



				$k=intval($r);
				$k=$k+1;
				$u=strval($k);
				$id=$x[0].$u;
				

		
//doctor database
   
				$sql = "INSERT INTO doctor (serial,fName,lName , pass,currentCity,gender,homeTown,email,nid,bloodGroup,relation,id )
				VALUES ('','$fname', '$lname','$pass','$currentCity','$gender','$homeTown','$phone','$nid','$blood','$relation', '$id')";

				if ($conn->query($sql) === TRUE) {




					?>



<!-- welcome for Doctor
 -->

                    <!DOCTYPE html>
						<html>
						<head>
							<title>Welcome To medi Desk</title>
							<meta charset="utf-8">
						  <meta name="viewport" content="width=device-width, initial-scale=1">
						  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
						  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
						  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
						  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
						  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
						 <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" type="text/javascript"></script>
						 <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
						<link rel="stylesheet" type="text/css" href="asset/css/signUp.css">
						</head>
						<body>



						<div class="container">
						  <div class="row">
						    <div class="col-sm-3"></div>
						     
						    <div class="col-sm-6">
						      <div class="welcomeBox">
						      	<h1>Medi Desk</h1>
						      	<h2>Welcome</h2>
						      	<p>You are Successfully registered!</p>
						      	<p>Your ID is: <span><?php echo $id; ?></span></p>
						      	<p>Keep it for Login</p>
						      	<a href="http://localhost/mediDesk/"><button type="button" class="btn btn-primary">Login</button></a>

						      </div>
						    </div>
						    </div>
						    <div class="col-sm-3">
						      
						    </div>
						  </div>
						</div>
						
						</body>
						</html>


					<?php
				   
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
	}













}else{

echo "<h1>Sorry! Your password doesn't match.</h1>";
echo '<a href="http://localhost/mediDesk/signUp.php"><button>SignUp Again</button></a>';
echo "<button";

}
  
 




}else
{

 
  header("location:http://localhost/mediDesk/signUp.php");

}


















$conn->close();



?>

