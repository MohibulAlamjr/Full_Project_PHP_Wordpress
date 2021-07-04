<!DOCTYPE html>

<html>
<head>
    <title>HOME | Sandhani Donor Club</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="../layout/styles/style.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="../reg_log/styles/view.css">
    <link rel="stylesheet" href="../reg_log/styles/style.css">
    <link rel="stylesheet" href="../search/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../search/style/css/bootstrap.css">
</head>
<body id="top">

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
                
                <li><a href="../reg_log/reg.php">Register</a></li>
                <li><a href="../reg_log/logout_process.php">Logout</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/04.jpg');">
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
                <a href="../"homepage.php><img src="../images/logo.png"></a>
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <li class="active"><a href="../homepage.php">Home</a></li>
                    <li><a class="drop" href="#">Pages</a>
                        <ul>
                            <li><a href="../pages/gallery.php">Gallery</a></li>
                        </ul>
                    </li>
                   
                    <li><a href="../reg_log/view.php">View All</a></li>
                    <li><a href="#" class="drop">Search Donor</a>
                        <ul>
                            <li><a href="search_by_group.php">Search By Group</a></li>
                            <li><a href="search_by_name.php">Search By Name</a></li>
                            <li><a href="search_by_date.php">Search By Date</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- ################################################################################################ -->
        </header>
    </div>


    <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "blood");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $a = $_POST['date'];
    // Attempt select query execution
    $sql = "SELECT * FROM donor WHERE date='$a'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr>";
            echo "<th>id</th>";
            echo "<th>first_name</th>";
            echo "<th>last_name</th>";
            echo "<th>email</th>";
            echo "<th>Contact</th>";
            echo "<th>Location</th>";
            echo "<th>Blood Group</th>";
            echo "<th>Date</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['Contact'] . "</td>";
                echo "<td>" . $row['Location'] . "</td>";
                echo "<td>" . $row['blood_group'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);

    include "../pages/footer.html";
    ?>
