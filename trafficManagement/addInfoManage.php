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

$id=$_POST['userId'];
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];

$username=$_POST['userName'];
$tpass=$_POST['userPass'];
$tage=$_POST['userAge'];
$tgeneder=$_POST['gender'];
$category=$_POST['cate'];
$temail=$_POST['email'];







$sql = "INSERT INTO $category (id,fname,lname,uname,pass,email,age,gender)
VALUES ('$id', '$firstname', '$lastname','$username','$tpass','$temail','$tage','$tgeneder')";

if ($conn->query($sql) === TRUE) {
	echo "<h3 style='color: green;'>Data inserted succesfully</h3>";
    include 'addinfo.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>