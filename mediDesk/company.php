<!DOCTYPE html>
<html>
<head>
	<title>Companey add</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/astyle.css">
</head>
<body >

<h1 class="companey">Company Details</h1>
<div class="container">
	  <!-- Content here -->
	  <div class="row">
    <div class="col-sm-3">
    
    </div>
    <div class="col-sm-3 formcss">
      <form action="companyControl.php" method="post">
	

  

  <div class="form-group">
    <label for="exampleInputEmail1">Companey Name:</label>
    <input  type="text" name="companeyName" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Companey Name">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Companey Code:</label>
    <input type="number" name="companyCode" required="" class="form-control" id="exampleInputPassword1" placeholder="Companey Code">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total Product:</label>
    <input  type="number" name="totalProduct" required="" class="form-control" id="exampleInputPassword1" placeholder="Total Product">
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