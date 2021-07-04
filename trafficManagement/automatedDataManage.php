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

$id=$_POST['vid'];
$signalName=$_POST['sname'];
$speed=$_POST['speed'];
$lane=$_POST['lane'];




$sql = "INSERT INTO currentdata (vehicleId,signalName,speed,lane)
VALUES ('$id', '$signalName', '$speed','$lane')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 