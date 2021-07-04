<!DOCTYPE html>
<html>
<head>
  <title>Medicine add</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="asset/css/astyle.css">
</head>
<body >

  <h1 class="companey">Medicine Name</h1>
  <div class="container">
    <!-- Content here -->
      <div class="row">
      <div class="col-sm-3">
    
      </div>
      <div class="col-sm-3 formcss">
        <form action="medicineNameControl.php" method="post">
  

  

            <div class="form-group">
              <label for="exampleInputEmail1">medicine Name:</label>
              <input  type="text" name="medicineName" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter medicine Name">
      
            </div>


             <div class="form-group">
              <label for="exampleInputPassword1">companey name</label>
              <input type="text" name="companeyname" required="" class="form-control" id="exampleInputPassword1" placeholder="Companey name">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Generic name</label>
              <input type="text" name="genericname" required="" class="form-control" id="exampleInputPassword1" placeholder="Generic name">
            </div>
      
            <div class="form-group">
                <label for="sel1">Select list (select one):</label>
                <select class="form-control" id="sel1" name="standard" required="">
                  <option value="11">250mg</option>
                  <option value="12">500mg</option>
                  <option value="13">750mg</option>
                   <option value="14">1000mg</option>
                    <option value="15">1500mg</option>
                     <option value="16">2000mg</option>
                </select>
               
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>