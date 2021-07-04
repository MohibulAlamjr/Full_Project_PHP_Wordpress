<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
</head>
<body>
<?php

$vid=$_POST['type'];
$type = substr($vid, 0, 3);

if($type=='own'){
	$type="ownerinfo";
}else{
	$type="driverinfo";
}

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

// sql to delete a record
$sql = "UPDATE $type SET vehicleid='0' WHERE id='$vid'";

if ($conn->query($sql) === TRUE) {
    include "index.php";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>
</body>
</html>