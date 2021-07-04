 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traffic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$category= $_POST['cate'];
$usid = $_POST['usid'];
$option = $_POST['options'];
$newValue = $_POST['update'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE ownerinfo SET $option ='$newValue' WHERE id='$usid'";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Record updated successfully</h1>";
    include 'updateOwner.php';
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 