
<?php

include 'databaseconnect.php';





// Always start this first
session_start();

if (isset($_POST['Login'])) {



$username=$_POST['uname'];


$varify=$username[0];

if($varify=='p'){
  

// $query="select * from test where id='".$_POST['uname']."' and name='".$_POST['psw']."'";
//  $result=mysql_query($con,$query);
//  if(mysqli_fetch_assoc($result)){

    // $SESSION['User']=$_POST['uname'];
    // header("location:http://localhost/mediDesk/public.php");
//  }else{
//    header("location:http://localhost/mediDesk/");
//  }
$sql = "select * from public where id='".$_POST['uname']."' and pass='".$_POST['psw']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $SESSION['User']=$_POST['uname'];
   ?>




<!DOCTYPE html>
<html>
<head>
  <title></title>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="asset/js/main.js" type="text/javascript"></script>
  
<link rel="stylesheet" type="text/css" href="asset/css/public.css">

</head>
<body>
<!---navigation bar-->
<nav class="navbar navbar-expand-lg navbar-lightnavbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="http://localhost/mediDesk/"><h1>MEDI DESK</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Contact us</a>
      
    </div>
  </div>
</nav>



<!--container-->

<div class="container">
  <div class="row">
    <div class="col-sm-3">
     
    </div>
    <div class="col-sm-6">
      <div class="welcome"><h1>Welcome To</h1></div>

       <div class="name">

           <h1>Medi Desk</h1>
           
        </div>
         <p>We are always here With our best services</p>

       <a href="#"><button  type="button" class="btn btn-primary">Show Your Prescriptions</button></a>
       <a href="#"><button type="button" class="btn btn-primary">Get Doctor Serial</button></a>
        </div>
 
    <div class="col-sm-3">
      
    </div>
  </div>
</div>
</body>
</html>












   <?php
   
} 





else {

    header("location:http://localhost/mediDesk/");
      
}

















}elseif ($varify=='d') {
  








$sql = "select * from doctor where id='".$_POST['uname']."' and pass='".$_POST['psw']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $SESSION['User']=$_POST['uname'];
   ?>


<!DOCTYPE html>
<html>
<head>
  <title></title>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="asset/js/main.js" type="text/javascript"></script>
  
<link rel="stylesheet" type="text/css" href="asset/css/public.css">

</head>
<body>
<!---navigation bar-->
<nav class="navbar navbar-expand-lg navbar-lightnavbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#"><h1>MEDI DESK</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Contact us</a>
      
    </div>
  </div>
</nav>



<!--container-->

<div class="container">
  <div class="row">
    <div class="col-sm-3">
     
    </div>
    <div class="col-sm-6">
      <div class="welcome"><h1>Welcome To</h1></div>

       <div class="name">

           <h1>Medi Desk</h1>
           
        </div>
         <p>We are always here With our best services</p>
         <form action="doctorw.php" method="post">

      <!--  <a href="#"><button value="Login" type="button" class="btn btn-primary">Prescribe to patient</button></a>
       <a href="http://localhost/mediDesk/doctorw.php"><button value="Login"  type="button" class="btn btn-primary">Search For medicine</button></a> -->
       <input type="submit" name="Login" value="Prescribe to patient">
       <input type="submit" name="Login" value="Search For medicine">
 
    <div class="col-sm-3">
      
    </div>
  </div>
</div>
</body>
</html>


   <?php
   
} 





else {

    header("location:http://localhost/mediDesk/");
      
}



}elseif ($varify=='c') {
  








$sql = "select * from clintname where id='".$_POST['uname']."' and pass='".$_POST['psw']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $SESSION['User']=$_POST['uname'];
   ?>


<!DOCTYPE html>
<html>
<head>
  <title></title>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="asset/js/main.js" type="text/javascript"></script>
  
<link rel="stylesheet" type="text/css" href="asset/css/public.css">

</head>
<body>
<!---navigation bar-->
<nav class="navbar navbar-expand-lg navbar-lightnavbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#"><h1>MEDI DESK</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Contact us</a>
      
    </div>
  </div>
</nav>



<!--container-->
itisisisisi

<div class="container">
  <div class="row">
    <div class="col-sm-3">
     
    </div>
    <div class="col-sm-6">
      <div class="welcome"><h1>Welcome To</h1></div>

       <div class="name">

           <h1>Medi Desk</h1>
           
        </div>
         <p>We are always here With our best services</p>
         <form action="stat.php" method="post">

      <!--  <a href="#"><button value="Login" type="button" class="btn btn-primary">Prescribe to patient</button></a>
       <a href="http://localhost/mediDesk/doctorw.php"><button value="Login"  type="button" class="btn btn-primary">Search For medicine</button></a> -->
       <input type="submit" name="Login" value="Commpany staticstic">
       
 
    <div class="col-sm-3">
      
    </div>
  </div>
</div>
</body>
</html>


   <?php
   
} 





else {

    header("location:http://localhost/mediDesk/");
      
}



}




else{
 
header("location:http://localhost/mediDesk/");
  
}


}else
{

 
  header("location:http://localhost/mediDesk/");

}

$conn->close();

?>




