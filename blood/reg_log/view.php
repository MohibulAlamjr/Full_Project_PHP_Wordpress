
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>All Donor View</title>
    <link rel="stylesheet" type="text/css" href="styles/view.css" />
    <link rel="stylesheet" type="text/css" href="../layout/styles/style.css">
    <link rel="stylesheet" href="../search/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../search/style/css/bootstrap.css">
</head>
<body>

<!-- ##########################################################################################
****************************************************Header******************************************
########################################################################################## -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +88 0631 63199</li>
        <li><i class="fa fa-envelope-o"></i>rofikulislamrajib@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="../homepage.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="reg.php">Register</a></li>
        <li><a href="logout_process.php">Logout</a></li>
       <!--  <li><a href="login.php">Login</a></li> -->
      </ul>
    </div>
  </div>
</div>
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/bg.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <a href="../homepage.php"><img src="../images/logo.png"></a>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../homepage.php">Home</a></li>
          <li><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="../pages/gallery.php">Gallery</a></li>
            </ul>
          </li>
          <!-- <li><a class="drop" href="#">Dropdown</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="">Lavel 2</a></li>
            </ul>
          </li> -->
          <li class="active"><a href="view.php">View All</a></li>
            <li><a href="#" class="drop">Search Blood</a>
                <ul>
                    <li><a href="../search/search_by_group.php">Search By Group</a></li>
                    <li><a href="../search/search_by_name.php">Search By Name</a></li>
                    <li><a href="../search/search_by_date.php">Search By Date</a></li>
                </ul>
            </li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
<!-- ##########################################################################################
****************************************************Header******************************************
########################################################################################## -->



<?php

$mysqli = new mysqli("localhost", "root", "", "blood");
 

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 

$sql = "SELECT * FROM donor";

if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Email</th>";
                // echo "<th>Password</th>";
                echo "<th>Contact</th>";
                echo "<th>Location</th>";
                echo "<th>Age</th>";
                echo "<th>Weight</th>";
                echo "<th>Blood Group</th>";
                echo "<th>Date</th>";
                echo "<th colspan='2'>Operations</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                // echo "<td>" . $row['pass'] . "</td>";
                echo "<td>" . $row['Contact'] . "</td>";
                echo "<td>" . $row['Location'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['weight'] . "</td>";
                echo "<td>" . $row['blood_group'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td> <a class='btn btn-warning' href='update.php?id=$row[id]'>Edit</a></td>";
                echo "<td> <a  href='delete.php?id=$row[id]' class='btn btn-danger'>Delete</a> </td>";
            echo "</tr>";
        }
        echo "</table>";

        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/03.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h3 class="heading">Sandhani Donor Club, Narayangonj</h3>
    <nav>
      <ul class="nospace inline pushright uppercase">
        <li><a href="../homepage.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="../about1.php">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Terms</a></li>
      </ul>
    </nav>
    <ul class="faico clear">
      <li><a class="faicon-facebook" href="https://www.facebook.com/%E0%A6%B8%E0%A7%87%E0%A6%9A%E0%A7%8D%E0%A6%9B%E0%A6%BE%E0%A7%9F-%E0%A6%B0%E0%A6%95%E0%A7%8D%E0%A6%A4%E0%A6%A6%E0%A6%BE%E0%A6%A8-%E0%A6%B8%E0%A7%87%E0%A6%BE%E0%A6%A8%E0%A6%BE%E0%A6%B0%E0%A6%97%E0%A6%BE%E0%A7%8D%E0%A6%81-133391677272887"><i class="fa fa-facebook"></i></a></li>
      <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
      <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
      <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script src="../layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>