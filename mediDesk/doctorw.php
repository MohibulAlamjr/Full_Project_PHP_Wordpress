
<?php

if (isset($_POST['Login'])) {



  $varify=$_POST['Login'];


  if ($varify=='Search For medicine') {
    # code...
  
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

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result td", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

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
     <div class="search-box">



        <input class="form-control" type="text" autocomplete="off" placeholder="Search country..." />
        <input style="margin-left: 100%;margin-top: -11%;" class="btn btn-primary mb-2" type="submit" name="">
        <div style="font-size: 18px; color: #fff;"class="result"></div>

    </div>


    <div class="col-sm-3">
      

    </div>
  </div>
</div>

</body>
</html>

<?php
}elseif($varify=='Prescribe to patient'){
 
   header("location:http://localhost/mediDesk/prescribe.php");
}else{
  header("location:http://localhost/mediDesk/");
}

 


}else{



   header("location:http://localhost/mediDesk/");
}


?>
