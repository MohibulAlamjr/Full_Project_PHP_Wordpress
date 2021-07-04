<?php

include 'databaseconnect.php';

$cName=$_POST['genericName'];

$cCode=$_POST['genericid'];



$sql = "INSERT INTO  genericname(id,gname)
VALUES ('$cCode', '$cName')";

if ($conn->query($sql) === TRUE) {
	echo "Insert successfully ";
    include'genericName.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


































?>