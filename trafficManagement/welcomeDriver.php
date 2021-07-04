<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="welcomeBody">


<?php



$sql = "SELECT pass,fname,lname,gender FROM $type WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $gpass= $row["pass"];
        $wfname=$row["fname"];
        $wlname=$row["lname"];
        $wgender=$row["gender"];
        }}

else{
	echo "Information Error!";
}

?>


	 <?php

if ($type=='ownerinfo') {
 	$type='an: Owner';}
 	else {
 		$type = 'a: Driver';
 	};

 	?>


	 <div class="WelcomeForm">
		<div class="profileimg">
 			<img src="images/profileicon.png">
 		</div>
 <div class="formwelcome">
			<h1>Welcome <br>  <?php 
if ($wgender=='male') {
           	echo "Mr. ".$wfname." ".$wlname;
            }else{
            	echo "Mrs.".$wfname." ".$wlname;
           }
			?></h1> 
            <h3 >You are Successfully Login as <?php echo  $type ?></h3>
			 
        </div>
       
       <form style="text-align:center; margin-top: 50px;margin-bottom: 20px;" action="activities.php" method="post">
       	

       <button style="background-color: #091bee;color: #fff;" type="submit" name="type" value="<?php echo $pid;?>" > Show Current Activities</button>  
   </form>

<form style="text-align:center; " action="logOut.php" method="post">
       <button style="background-color: #091bee;color: #fff;" type="submit" name="type" value="<?php echo $id;?>" >logout</button>

       </form>

			
       	
       </div>
       
	</div>


</body>
</html>