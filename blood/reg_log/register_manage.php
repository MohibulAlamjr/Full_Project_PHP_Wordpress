<!DOCTYPE html>

<html>
<head>
    <title>HOME | Sandhani Donor Club</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="../layout/styles/style.css" rel="stylesheet" type="text/css" media="all">
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
            </ul>
        </div>
    </div>
</div>
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/01.jpg');">
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
                <a href="../homepage.php"><img src="../images/logo.png"></a>
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <li class="active"><a href="../index.html">Home</a></li>
                    <li><a class="drop" href="#">Pages</a>
                        <ul>
                            <li><a href="../pages/gallery.php">Gallery</a></li>
                        </ul>
                    </li>
                   
                    <li><a href="../reg_log/view.php">View All Donor</a></li>
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


<?php

$link = mysqli_connect("localhost", "root", "", "blood");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$a = $_POST['fname'];
$b = $_POST['lname'];
$c = $_POST['email'];

$d1 = $_POST['contact'];
$d2 = $_POST['location'];
$e = $_POST['age'];
$f = $_POST['weight'];
$g = $_POST['blood_group'];
$h = $_POST['date'];

// Attempt insert query execution
$sql = "INSERT INTO donor (first_name, last_name, email, contact, location, age, weight, blood_group, date) VALUES ('$a', '$b', '$c', '$d1', '$d2', '$e', '$f', '$g', '$h')";
if(mysqli_query($link, $sql)){
    echo "<h1>Records inserted successfully.</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
//include "view.php";
?>


    <div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/02.jpg');">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle center">
                <h3 class="heading">Augue eget iaculis mauris</h3>
                <p>Morbi sed molestie metus nunc malesuada lorem ut consectetur.</p>
            </div>
            <ul class="nospace group center">
                <li class="one_third first">
                    <article><a href="#"><i class="btmspace-30 icon fa fa-500px"></i></a>
                        <h6 class="heading font-x1">Sodales sollicitudin</h6>
                        <p>Cursus elit tristique et sed id convallis arcu sed ac facilisis ligula nec maximus felis imperdiet condimentum [&hellip;]</p>
                        <footer><a href="#">Read More &raquo;</a></footer>
                    </article>
                </li>
                <li class="one_third">
                    <article><a href="#"><i class="btmspace-30 icon fa fa-envira"></i></a>
                        <h6 class="heading font-x1">Maecenas et bibendum</h6>
                        <p>Dolor et vestibulum phasellus scelerisque magna sapien non maximus sem faucibus id vestibulum neque eros [&hellip;]</p>
                        <footer><a href="#">Read More &raquo;</a></footer>
                    </article>
                </li>
                <li class="one_third">
                    <article><a href="#"><i class="btmspace-30 icon fa fa-empire"></i></a>
                        <h6 class="heading font-x1">Placerat ullamcorper</h6>
                        <p>Ac iaculis eleifend nibh nulla aliquet orci quis urna tristique egestas sed scelerisque dolor ipsum placerat [&hellip;]</p>
                        <footer><a href="#">Read More &raquo;</a></footer>
                    </article>
                </li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
   
    <div class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/03.png');">
        <footer id="footer" class="hoc clear">
            <!-- ################################################################################################ -->
            <h3 class="heading">Sandhani donor Club, Narayangonj</h3>
            <nav>
                <ul class="nospace inline pushright uppercase">
                    <li><a href="../index.html"><i class="fa fa-lg fa-home"></i></a></li>
                    <li><a href="#">About</a></li>
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
