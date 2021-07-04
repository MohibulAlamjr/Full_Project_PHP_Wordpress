<?php
include 'databaseconnect.php';


 $name2=$_POST['name1'];

 $x=(explode(",",$name2));

 $dlist;
 $countm;


// count medicine

$sql = "SELECT count FROM mediname WHERE mediN='$x[0]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $countm=$row["count"];
    }
} else {
    echo "0 results";
}

$countm++;
  $sql = "UPDATE mediname SET count='$countm' WHERE mediN='$x[0]'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}





// insert value



$sql = "SELECT medicine FROM prescribtion WHERE did='$x[1]' ORDER BY issudate DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $dlist=$row["medicine"];
    }
} else {
    echo "0 results";
}







if ($dlist=="2") {
    $sql = "UPDATE prescribtion SET medicine='$x[0]' WHERE did='$x[1]' ORDER BY issudate DESC LIMIT 1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}






}else{
  
  $val=$dlist.",".$x[0];
 

 
 $sql = "UPDATE prescribtion SET medicine=' $val' WHERE did='$x[1]' ORDER BY issudate DESC LIMIT 1";

if ($conn->query($sql) === TRUE) {
    $xy=(explode(",",$val));
    $l=count($xy);
    echo "Medicine are:"."<br>";
   echo "<ol>";
   for($i=0;$i<$l;$i++){
   echo "<li>".$xy[$i]."</li>";

   }echo "</ol>";
} else {
    echo "Error updating record: " . $conn->error;
}


}















$conn->close();













 
// $sql = "INSERT INTO yes (name)
// VALUES ('$name2')";
//$sql="SELECT name FROM yes ORDER BY name DESC LIMIT 1;"









































//  $sql = "SELECT name FROM yes ORDER BY id DESC LIMIT 1";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row


//     while($row = $result->fetch_assoc()) {



//          $k=$row["name"];
//          $x=(explode(",",$k));
// 			$y=count($x);
// 			echo "<ol>";

// 			for($i=0;$i<$y;$i++){

			
// 			echo'<li>'.$x[$i].'</li>';

// }echo "</ol>";

//     }
// } else {
//     echo "0 results";
// }
  


// $conn->close();


?>