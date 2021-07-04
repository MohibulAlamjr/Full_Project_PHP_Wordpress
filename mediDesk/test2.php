<?php
include 'databaseconnect.php';


 $x=$_POST['name1'];

 



 $sql = "SELECT medicine,diease,issudate FROM prescribtion WHERE pid='$x' ORDER BY issudate DESC LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

  echo "<table class='table table-striped'>";
            echo "<tr>";
                echo "<th>Medicines</th>";
                echo "<th>Disease</th>";
               echo "<th>Date</th>";
              
            echo "</tr>";
    while($row = $result->fetch_assoc()) {
       echo "<tr>";
               if($row['medicine']==2){
                    
               }else
               {
                 echo "<td>" . $row['medicine'] . "</td>";
             echo "<td>" . $row['diease'] . "</td>";
                echo "<td>" . $row['issudate'] . "</td>";
               }
               
            echo "</tr>";
    }echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>



