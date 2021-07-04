<?php

$mysqli = new mysqli("localhost", "root", "", "blood");
 

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        
        $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            // $pass=$_POST['pass'];
            $contact=$_POST['contact'];
            $location=$_POST['location'];
            $age=$_POST['age'];
            $weight=$_POST['weight'];
            $bgp=$_POST['blood_group'];
            $date=$_POST['date'];
        $sql = "UPDATE donor SET first_name='$fname', last_name='$lname', email='$email', Contact='$contact', Location='$location', age='$age', weight='$weight', blood_group='$bgp', date='$date' WHERE id=$id";

        $mysqli->query($sql);
        
       
        header("location: view.php?sql=$sql");
    }
    ?>