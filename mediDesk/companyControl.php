<?php

include 'databaseconnect.php';

$cName=$_POST['companeyName'];

$cCode=$_POST['companyCode'];

$tProduct=$_POST['totalProduct'];

$sql = "INSERT INTO company_details (companyCode,companyName,totalProduct)
VALUES ('$cCode', '$cName', '$tProduct')";

if ($conn->query($sql) === TRUE) {
	echo "Insert successfully ";
    include'company.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


































?>