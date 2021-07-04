 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traffic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uname=$_POST['username'];
$pass=$_POST['pass'];
$type=$_POST['category'];
 

$gpass;

$sql = "SELECT pass,fname,lname,gender FROM $type WHERE uname='$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $gpass= $row["pass"];
        $wfname=$row["fname"];
        $wlname=$row["lname"];
        $wgender=$row["gender"];

             
        if($pass==$gpass){
	if ($type=="admininfo") {
        include "welcome.php";
    }else{
        include "vehicleid.php";

        

    }
	
} else{
	include "forget.php";
}

    }
} else{
	echo "Information Error!";
}




$conn->close();
?> 