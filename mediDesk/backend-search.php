<?php
$output = '';
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "medidesk");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM company_details WHERE companyName LIKE ? LIMIT 10";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                 $output .= '<div class="table-responsive">
                    <table class="table table bordered">
                        <tr>
                            <th>Medicine Name</th>
                            
                            
                        </tr>';


                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    
                     $output .= '
            <tr>
                <td id="ro" style="font-size: 18px; color: #fff;">'.$row["companyName"].'</td>
                <td style="font-size: 14px; color: #fff;">'.$row["companyCode"].'</td>
                
            </tr>
        ';
                }
                echo $output;
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
?>