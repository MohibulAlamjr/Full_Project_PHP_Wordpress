<?php
include 'databaseconnect.php';


 $name2=$_POST['name1'];

 $x=(explode(",",$name2));



 $dlist;

$sql = "SELECT diease FROM prescribtion WHERE did='$x[1]' ORDER BY issudate DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $dlist=$row["diease"];
    }
} else {
    echo "0 results";
}







if ($dlist=="1") {
    $sql = "UPDATE prescribtion SET diease='$x[0]' WHERE did='$x[1]' ORDER BY issudate DESC LIMIT 1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}






}else{
  
  $val=$dlist.",".$x[0];
 

 
 $sql = "UPDATE prescribtion SET diease=' $val' WHERE did='$x[1]' ORDER BY issudate DESC LIMIT 1";

if ($conn->query($sql) === TRUE) {
    $xy=(explode(",",$val));
    $l=count($xy);
    echo "Disease are:"."<br>";
   echo "<ol>";
   for($i=0;$i<$l;$i++){
   echo "<li>".$xy[$i]."</li>";

   }echo "</ol>";
} else {
    echo "Error updating record: " . $conn->error;
}


}