<!DOCTYPE html>

<html>
<head>
    <title>HOME | Sandhani Donor Club</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="../layout/styles/style.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/css/bootstrap.css">
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
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
                <!-- <li><a href="../reg_log/login.php">Login</a></li> -->
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
                   
                    <li><a href="../reg_log/view.php">View All</a></li>
                    <li class="active"><a href="#" class="drop">Search Blood</a>
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
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="container">
        <h2>Search here for donor</h2>
        <div class="container">
            <form action="date_search.php" method="post">
                <h1>Search All Donor Who Donated At Date</h1>
                <div>
                    <div>
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date">
                    </div>
                    <button type="submit" class="btn btn-success">Search</button>
                </div>
            </form>
        </div>
    </div>


<?php

include "../pages/footer.html";

?>