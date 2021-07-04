<html>
<head>
    <title>Updage</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <link rel="stylesheet" type="text/css" href="../layout/styles/style.css">
    <link rel="stylesheet" href="../search/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../search/style/css/bootstrap.css">
</head>

<body>
<div class="registration-form">
    <h2>Update Your Information:</h2>

<?php


$mysqli = new mysqli("localhost", "root", "", "blood");
 

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
    if (isset($_GET['id'])) {
		$id = $_GET['id'];
        $sql = "SELECT * FROM donor WHERE id=$id";
		$record = $mysqli->query($sql);

		
			$n = $record->fetch_array();
		$id=$n['id'];
            $fname=$n['first_name'];
            $lname=$n['last_name'];
            $email=$n['email'];
            $contact=$n['Contact'];
            $location=$n['Location'];
            // $pass=$n['pass'];
            $age=$n['age'];
            $weight=$n['weight'];
            $bgp=$n['blood_group'];
            $date=$n['date'];
		
    }
?>
    <form method="POST" action="edit.php">
        <div>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" required="" value="<?php echo $fname; ?>" />
        </div>
        <div>
            <label for="lname">Last: Name</label>
            <input type="text" id="lname" name="lname" required="" value="<?php echo $lname; ?>" />
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required="" value="<?php echo $email; ?>" />
        </div>
        <!-- <div>
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" required="" value="<?php echo $pass; ?>" />
        </div> -->
            <div>
        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact" pattern="[0-9]{11}" title="11 numeric characters only" maxlength="11" required="" value="<?php echo $contact; ?>" />
      </div>
            <div>
        <label for="location">Location</label>
        <input type="text" id="location" name="location" required="" value="<?php echo $location; ?>" />
      </div>
        <div>
            <label for="age">Age</label>
            <input type="number" id="age" name="age" min="18" max="55" required="" value="<?php echo $age; ?>" >
        </div>
        <div>
            <label for="weight">Weight</label>
            <input type="number" id="weight" name="weight" min="45" required="" value="<?php echo $weight; ?>" >
        </div>

          <div>
                <label for="date">Last Donate Date:</label>
                <input type="date" id="date" name="date" required="" value="<?php echo $date; ?>" >
            </div>

        <div>
            <label for="blood_group">Blood Group</label>
            <select name="blood_group" id="blood_group" class="btn btn-danger" required="" value="<?php echo $bgp; ?>
                <option >Select One</option>
                <option value="A+ve">A+ve</option>
                <option value="B+ve">B+ve</option>
                <option value="AB+ve">AB+ve</option>
                <option value="O+ve">O+ve</option>
                <option value="A-ve">A-ve</option>
                <option value="B-ve">B-ve</option>
                <option value="AB-ve">AB-ve</option>
                <option value="O-ve">O-ve</option>
            </select>
        </div>
        <div>
<!--            <button type="submit" name="submit" class="col-md-3">Update</button>-->
            <input type="submit" name="submit" class="btn btn-success" value="submit">
        </div>

    </form>


</body>
</html>
