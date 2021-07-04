<!DOCTYPE html>
<html>
<head>
	<title>Security</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="asset/js/main.js" type="text/javascript"></script>
  
<link rel="stylesheet" type="text/css" href="asset/css/public.css">

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<style type="text/css">.checkbox {
  background: rgb(30,68,106);
  background: -moz-linear-gradient(145deg, rgba(30,68,106,0.5382528011204482) 0%, rgba(30,103,176,0.44861694677871145) 94%);
  background: -webkit-linear-gradient(145deg, rgba(30,68,106,0.5382528011204482) 0%, rgba(30,103,176,0.44861694677871145) 94%);
  background: linear-gradient(145deg, rgba(30,68,106,0.5382528011204482) 0%, rgba(30,103,176,0.44861694677871145) 94%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#1e446a",endColorstr="#1e67b0",GradientType=1);
  padding: 40px;
}
</style>
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



<!--container-->

<div class="container">
  <div class="row">
    <div class="col-sm-3">
     
    </div>


    <div class="col-sm-6">
     <div class="checkbox">



        <form action="security.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Your ID</label>
    <input name="dID" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your Id with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="psw">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Patient ID</label>
    <input name="pId" type="text" class="form-control" id="exampleInputPassword1">
  </div>
   
   <div class="form-group">
    <label for="exampleInputPassword1">Hospital Code</label>
    <input name="hCode" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>


    <div class="col-sm-3">
      

    </div>
  </div>
</div>

</body>
</html>
</body>
</html>