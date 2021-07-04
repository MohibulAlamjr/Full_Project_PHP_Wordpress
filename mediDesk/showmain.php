<?php
include 'databaseconnect.php';

$dID=$_GET['id'];
$pID=$_GET['pid'];
$hID=$_GET['hid'];




  // DOCTOR

$sql = "SELECT fName,lName,homeTown,email FROM doctor WHERE id='$dID' ";
         $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $fname=$row["fName"];
      $lname=$row["lName"];
      $deg=$row["homeTown"];
      $mail=$row["email"];
     
    }
} else {
    echo "something went to be worng";
}




// prescribtion

$sql = "SELECT preserial,issudate FROM prescribtion WHERE did='$dID' ORDER BY issudate DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $serial=$row["preserial"];
      $date=$row["issudate"];
    }
} else {
    echo "0 results";
}

// PATIENT


$sql = "SELECT fName,lName FROM public WHERE id='$pID' ";
         $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $Pfname=$row["fName"];
      $Plname=$row["lName"];
      
     
    }
} else {
    echo "something went to be worng";
}



// hopital


$sql = "SELECT name FROM hospitalname WHERE id='$hID' ";
         $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $hname=$row["name"];
      
      
     
    }
} else {
    echo "something went to be worng";
}



?>




<!DOCTYPE html>
<html>
<head>
	<title>prescribtion</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"> 
  </script> 
  
  <script src= 
"https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"> 
  </script> 
  
<link rel="stylesheet" type="text/css" href="asset/css/showmain.css">



</head>
<body>
  <div>
	<div id="html-content-holder" class="main">
<div class="container mys">
  <div class="row ">
    <div class="col-sm-8 head hosname">
      <h1><?php echo " ". $hname ;?></h1>
      <h2 style="font-size: 22px;">Phone:+88092526662</h2>
      <h2 style="font-size: 22px;">email:xxxxxx@gmail.com</h2>
    </div>
    <div class="col-sm-4 head logo">
      <img src="asset\image\mmm.png">
    </div>
    
  </div>
</div>
<div class="doctor">
	<div class="container ">
  <div class="row drow">
  	<!-- doctor name -->
    <div class="col-sm-6  docname">
      <h2 >Name:<?php echo " ". $fname." ". $lname ;?></h2>

      <p><?php echo $deg; ?></p>
      <p>Email: <?php echo " ".$mail; ?></p>

    </div>

    <div class="col-sm-6">
      <p>Prescription serial:<b> <?php echo " ".$serial; ?></b></p>
       <p>Date: <b> <?php echo " ".$date; ?></b></p>
       <p>Patinet ID:<b> <?php echo " ".$pID; ?></b></p>
    </div>

  </div>
</div>
</div>





<div class="container">
  <div class="row">
    <div class="col-sm">
     <p>Patient Name:<b><?php echo " ". $Pfname." ". $Plname ;?></b></p>
    </div>
    
  </div>
</div>






<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <h5> <u>Disease\test:</u></h5>

          <?php
          $sql = "SELECT diease FROM prescribtion WHERE did='$dID' ORDER BY issudate DESC LIMIT 1";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row

           
              while($row = $result->fetch_assoc()) {
                 echo "<tr>";
                         if($row['diease']==1){
                              
                         }else
                         {
                           $val=$row['diease'];
                          $xy=(explode(",",$val));
                  $l=count($xy);
                  
                 echo "<ol>";
                 for($i=0;$i<$l;$i++){
                 echo "<li>".$xy[$i]."</li>";

                 }echo "</ol>";
                                  
                                       
                         }
                         
                      
              }
          } else {
              echo "0 results";
          }
          $conn->close();
          ?>

    </div>
    <div class="col-sm-6">
      <h5> <u>Medicine:</u></h5>
<?php

include 'databaseconnect.php';
          $sql = "SELECT medicine FROM prescribtion WHERE did='$dID' ORDER BY issudate DESC LIMIT 1";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row

           
              while($row = $result->fetch_assoc()) {
                 echo "<tr>";
                         if($row['medicine']==2){
                              
                         }else
                         {

                          $val=$row['medicine'];
                                          $xy=(explode(",",$val));
                    $l=count($xy);
                    
                   echo "<ol>";
                   for($i=0;$i<$l;$i++){
                   echo "<li>".$xy[$i]."</li>";

                   }echo "</ol>";
                                         
                                         }
                                         
                      
              }
          } else {
              echo "0 results";
          }
          $conn->close();
          ?>





 
    </div>
    <div class="col-sm-3">
      <h5> <u>Discussion:</u></h5>
    </div>
  </div>
</div>

</div>











<div id="previewImage">First Preview Then Download</div> 


  <input id="btn-Preview-Image" type="button"
        value="Preview" /> 
    
  <a id="btn-Convert-Html2Image" href="#"> 
    Download 
  </a> 

  <br/> 
  
  
  

  <script> 
    $(document).ready(function() { 
    
      // Global variable 
      var element = $("#html-content-holder"); 
    
      // Global variable 
      var getCanvas; 

      $("#btn-Preview-Image").on('click', function() { 
        html2canvas(element, { 
          onrendered: function(canvas) { 
            $("#previewImage").append(canvas); 
            getCanvas = canvas; 
          } 
        }); 
      }); 

      $("#btn-Convert-Html2Image").on('click', function() { 
        var imgageData = 
          getCanvas.toDataURL("image/png"); 
      
        // Now browser starts downloading 
        // it instead of just showing it 
        var newData = imgageData.replace( 
        /^data:image\/png/, "data:application/octet-stream"); 
      
        $("#btn-Convert-Html2Image").attr( 
        "download", "GeeksForGeeks.png").attr( 
        "href", newData); 
      }); 
    }); 
  </script> 

</div>



</body>
</html>