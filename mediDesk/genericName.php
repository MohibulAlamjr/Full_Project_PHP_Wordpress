<!DOCTYPE html>
<html>
<head>
	<title>Companey add</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="asset/css/astyle.css">
</head>
<body >

<h1 class="companey">Generic Name</h1>
<div class="container">
	  <!-- Content here -->
	  <div class="row">
    <div class="col-sm-3">
    
    </div>
    <div class="col-sm-3 formcss">
      <form action="genericNameControl.php" method="post">
	

  

  <div class="form-group">
    <label for="exampleInputEmail1">Generic Name:</label>
    <input  type="text" name="genericName" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Companey Name">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Generic ID</label>
    <input type="number" name="genericid" required="" class="form-control" id="exampleInputPassword1" placeholder="Companey Code">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <div class="col-sm-3">
      
    </div>
  </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js""></script>
</body>
</html>