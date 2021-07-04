<!DOCTYPE html>

<html>
<head>
<title>Brickary | Pages | Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +88 0631 63199</li>
        <li><i class="fa fa-envelope-o"></i>rofikulislamrajib@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="../homepage.php"><i class="fa fa-lg fa-home"></i></a></li>
       <!--  <li><a href="../reg_log/login.php">Login</a></li> -->
        <li><a href="../reg_log/reg.php">Register</a></li>
        <li><a href="../reg_log/logout_process.php">Logout</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/02.jpg');"> 
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
          <li class="active"><a class="drop" href="#">Pages</a>
            <ul>
              <li class="active"><a href="#">Gallery</a></li>
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
              <li><a href="#">Level 2</a></li>
            </ul>
          </li> -->
          <li><a href="../reg_log/view.php">View All</a></li>
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
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <section id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
   <!--  <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Lorem</a></li>
      <li><a href="#">Ipsum</a></li>
      <li><a href="#">Dolor</a></li>
    </ul> -->

    <!-- ################################################################################################ -->
    <h6 class="heading">Gallery</h6>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- ################################################################################################ -->
  </section>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>
          <header class="heading">Gallery Title Goes Here</header>
          <ul class="nospace clear">
            <li class="one_quarter first"><a href="#"><img src="../images/demo/gallery/01.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/02.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/03.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/04.png" alt=""></a></li>
            <li class="one_quarter first"><a href="#"><img src="../images/demo/gallery/05.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/06.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/07.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/08.png" alt=""></a></li>
            <li class="one_quarter first"><a href="#"><img src="../images/demo/gallery/09.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/10.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/11.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/12.png" alt=""></a></li>
          </ul>
         <!--  <figcaption>Gallery Description Goes Here</figcaption> -->
        </figure>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <!-- <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li class="current"><strong>7</strong></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav> -->
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
    <?php
        include "footer.html";
    ?>