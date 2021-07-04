<?php

$mysqli = new mysqli("localhost", "root", "", "blood");


if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
echo "connected";

$sql = "DELETE FROM donor WHERE id=$_GET[id]";
if($mysqli->query($sql) === true){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

header('location: view.php');

$mysqli->close();
?>