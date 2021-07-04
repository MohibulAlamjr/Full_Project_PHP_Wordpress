<?php
include 'databaseconnect.php';

$mName=$_POST['medicineName'];
$gName=$_POST['genericname'];
$cName=$_POST['companeyname'];
$stnd=$_POST['standard'];
$gCode;
$cCode;

$sql = "SELECT id FROM genericname WHERE gname='$gName'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $cCode= $row["id"];
    }
} else {
    echo "0 results";
}


$sql = "SELECT companyCode FROM company_details WHERE companyName='$cName'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $gCode= $row["companyCode"];
    }
} else {
    echo "0 results";
}

$mcode=$cCode.$gCode.$stnd;

$sql = "INSERT INTO mediname (id, mediN)
VALUES ('$mcode', '$mName')";

if ($conn->query($sql) === TRUE) {
	echo "Insert successfully ";
    include 'medicineName.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

