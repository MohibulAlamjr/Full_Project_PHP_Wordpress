<!DOCTYPE html>
<html>
<head>
	<title>MediDesk</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="asset/js/main.js" type="text/javascript"></script>
  <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="asset/css/style.css">


</head>
<body>






<div>
	
	<div class="container">
		 <div class="row">
		    <div class="col-sm-12 medihead wow fadeInUp">
		      <h1 class="heading">MEDI DESK</h1>
		      <h3>A proper solution for all kind of general medical problems</h3>
		    </div>
		    <div class="col-sm-12 wow fadeInLeft slow delay-2s">
					      <div class="row">
					    <div class="col-sm-4">
					      	<div >
					      		<button onclick="document.getElementById('id01').style.display='block'" class="btn btn-success roundbutton">
					      			
					      		    <h1>Login</h1>
                                 </button>


								             <div id="id01" class="modal">
								  
													  <form class="modal-content animate" action="public.php" method="post">
													    <div class="imgcontainer">
													      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
													      <img src="img_avatar2.png" alt="Medi Desk" class="avatar">
													    </div>

													    <div class="container">
													      <label for="uname"><b>Username</b></label>
													      <input type="text" placeholder="Enter Username" name="uname" required>

													      <label for="psw"><b>Password</b></label>
													      <input type="password" placeholder="Enter Password" name="psw" required>
													        
													      <button type="submit" name="Login">Login</button>
													      <label>
													        <input type="checkbox" checked="checked" name="remember"> Remember me
													      </label>
													    </div>

													    <div class="container" style="background-color:#f1f1f1">
													      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
													      <span class="psw">Forgot <a href="#">password?</a></span>
													    </div>
													  </form>
								</div>

								
					      		
					      	</div>
					    </div>
					    <div class="col-sm-4">
					      <div >
					      		<a href="#"><button class="btn btn-success roundbutton">
					      			<h2  class="slideInLeft">Visit Our</h2>
					      		    <h1>Site</h1>
                                 </button></a>

					      	</div>
					    </div>
					    <div class="col-sm-4">
					      <div >
					      		<button class="btn btn-success roundbutton">
					      			<h2  class="slideInLeft">Our</h2>
					      		    <h1>Blog</h1>
                                 </button>
					      	</div>
					    </div>
					  </div>
		    </div>
		    <div class="col-sm-12 secoundrow wow fadeInRight slow delay-2s" >
					      <div class="row">
					    <div class="col-sm-4">
					     <div >
					      		<button class="btn btn-info roundbutton">
					      			<h2>Our</h2>
					      		    <h1>Policy</h1>
					      		</button>
					      		
					      	</div>
					    </div>
					    <div class="col-sm-4">
					     <div >
					      		<button class="btn btn-info roundbutton">
					      			<h2>Contact</h2>
					      		    <h1>With Us</h1>
					      		</button>
					      		
					      	</div>
					    </div>
					    <div class="col-sm-4">
					     <div >
					      		<a href="http://localhost/mediDesk/signUp.php"><button  class="btn btn-primary roundbutton">
					      			<h2>SIGN</h2>
					      		    <h1>UP</h1>
					      		</button></a>
					      		        


					      	</div>
					    </div>
					  </div>
		    </div>
    
         </div>
</div>

</div>





























<script>
								// Get the modal
								var modal = document.getElementById('id01');

								// When the user clicks anywhere outside of the modal, close it
								window.onclick = function(event) {
								    if (event.target == modal) {
								        modal.style.display = "none";
								    }
								}
								</script>


								<script>
								// Get the modal
								var modal = document.getElementById('id02');

								// When the user clicks anywhere outside of the modal, close it
								window.onclick = function(event) {
								  if (event.target == modal) {
								    modal.style.display = "none";
								  }
								}
								</script>

								<script>
					              new WOW().init();
					              </script>



</body>
</html>