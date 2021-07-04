<?php

//declear variable


include 'databaseconnect.php';
$dID=$_POST['dID'];
$psw=$_POST['psw'];
$pID=$_POST['pId'];

$hCode=$_POST['hCode'];
$x;
$k;




// Doctor password check


$sql = "select * from doctor where id='".$_POST['dID']."' and pass='".$_POST['psw']."'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
   $SESSION['User']=$_POST['dID'];


//match patient id


     $sql = "select * from public where id='".$_POST['pId']."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $SESSION['User']=$_POST['pId'];


 //prescribe code generate


   $sql = "SELECT preserial FROM prescribtion WHERE did='$dID' ORDER BY issudate DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


    while($row = $result->fetch_assoc()) {

         $k=$row["preserial"];

         $rest = substr($k, 8, );
        $r= intval($rest);
        $r=$rest+1;
        $re=strval( $r ) ;
        $pserial=$dID.$pID.$re;


//raw input


$sql = "INSERT INTO prescribtion (pid, did, hcode,preserial)
VALUES ('$pID', '$dID', '$hCode','$pserial')";

}


if ($conn->query($sql) === TRUE) {


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
  
<link rel="stylesheet" type="text/css" href="asset/css/prescription.css">

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>




        
 </head>
 <body>
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
<div class="intro"> <h1>Prescribe to Patient </h1>
<p>Using Those Field</p>
<p >your id is: <input id="gid" type="submit" name="" value="<?php echo$dID ?> "> </p>
<p >your patient id is: <input id="pid" type="submit" name="" value="<?php echo$pID ?> "> </p>
<a href="http://localhost/mediDesk/showmain.php?id=<?php echo $dID?>&pid=<?php echo $pID?>&hid=<?php echo $hCode?>"><button  class="btn btn-success" style="margin-bottom: 20px;">Show Prescribtion</button></a>
</div>


<div class="middlesec">
  
  <div class="container-fluid">
  <div class="row">


    <div class="col-sm-4">


      <div class="diseas">
        
                
         
         <input id="val2" class="form-control" type="text" autocomplete="off" name="yes" placeholder="Search Disease ..." />
         <button id="submit1" style=" margin-left: 227px;margin-top: -9%;"  class="btn btn-primary mb-2">Submit</button>
      
        <div id="show1" class="showdiseas"></div>
           

     </div>


    </div>
    <div class="col-sm-4">


      <div class="medicine">
        

            <!-- <form class="form-inline">
          <div class="form-group mb-2">
            <label for="staticEmail2" class="sr-only">Email</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Password</label>
            <input type="text" class="form-control" id="inputPassword2" placeholder=" Submit here Medicine">
          </div>
          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
               <div class="showmedicine"></div> -->

<div class="search-box">


       
        <input id="val" class="form-control" type="text" autocomplete="off" name="yes" placeholder="Search medicine..." />
        <button id="submit" style=" margin-left: 227px;margin-top: -9%;" class="btn btn-primary mb-2">Submit</button>
        <div id="show" style="font-size: 18px; color: #fff;"class="result showmedicine"></div>
             </div>
             

























</div>
    </div>
    <div class="col-sm-4">
      <div class="medicalbio">
        
          
         <button id="submit2" style=" margin-left: 216px;margin-top: 3%;"  class="btn btn-primary mb-2">Show medical histry</button>
      
        <div id="show2" class="showdiseas"></div>
</div>
      </div>
      
    </div>
</div>
    
  </div>
</div>
 </body>
 </html>




















































<?php


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}else{

  echo "you initial value is not found please contact to admin";




}









 }else{
    echo "Patient ID not exist";
   }









}else{
    echo "Your password is not match";
    echo'<a href="http://localhost/mediDesk/prescribe.php"><button>try again</button></a>';
   }












$conn->close();


?>