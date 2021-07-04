<!DOCTYPE html>
<html>
<head>
	<title>current data</title>
</head>
<body>
<?php



$id=$_POST['type'];

 
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

$sql = "SELECT signalName, speed, lane FROM currentdata
WHERE vehicleId='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Signal Name: " . $row["signalName"]. " - Speed: " . $row["speed"]. " -Lane" . $row["lane"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
 

?>
</body>
</html>