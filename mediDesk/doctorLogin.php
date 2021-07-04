
<?php

include 'databaseconnect.php';





// Always start this first
session_start();

if (isset($_POST['ogin'])) {



$username=$_POST['uname'];


$varify=$username[0];

if($varify=='d'){
  

// $query="select * from test where id='".$_POST['uname']."' and name='".$_POST['psw']."'";
//  $result=mysql_query($con,$query);
//  if(mysqli_fetch_assoc($result)){

    // $SESSION['User']=$_POST['uname'];
    // header("location:http://localhost/mediDesk/public.php");
//  }else{
//    header("location:http://localhost/mediDesk/");
//  }
$sql = "select * from test where id='".$_POST['uname']."' and pass='".$_POST['psw']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $SESSION['User']=$_POST['uname'];
  

  echo "done!";
   
} 





else {

    header("location:http://localhost/mediDesk/");
      
}
$conn->close();
















}else{
 
header("location:http://localhost/mediDesk/");
  
}


}else
{

 
  header("location:http://localhost/mediDesk/");

}



?>




