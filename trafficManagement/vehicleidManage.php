
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

$id=$_POST['uid'];
$pid=$_POST['vid'];
$type=$_POST['type'];



$sql = "UPDATE $type SET vehicleid='$pid' WHERE id='$id'";






if ($conn->query($sql) === TRUE) {
    include "welcomeDriver.php";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
die();
include "logOut.php"

?>