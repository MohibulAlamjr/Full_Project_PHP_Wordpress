<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="asset/js/main.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="asset/css/signUp.css">

</head>
<body>




<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h2>Welcome To</h2>
                        <h1>Medi Desk</h1>
                        <a href="http://localhost/mediDesk/"><button class="btn btn-primary">Login</button></a><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Registration as a Patient</h3>
                                <div class="row register-form">

                                    <div class="col-md-6">


                                    	<form action="signupControl.php" method="post">
                                        <div class="form-group">
                                            <input name="fname" type="text" class="form-control" placeholder="First Name *" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="lname" type="text" class="form-control" placeholder="Last Name *" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="psw" type="password" class="form-control" placeholder="Password *" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="cPsw" type="password" class="form-control"  placeholder="Confirm Password *" vrequired=""/>
                                        </div>
                                         <div class="form-group">
                                            <input name="cCity" type="text" class="form-control" placeholder="Current City *" required="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                               
                                                </label>
                                                <label class="radio inline"> 
                                                
                                                    <input type="radio" name="gender" value="Others">
                                                    <span>Others</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="hCity" type="text" class="form-control" placeholder="Home Town*"required="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="phone" type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="nid" type="text" class="form-control" placeholder="NID/Bith Certificate *" required="" />
                                        </div>
                                       
                                        <div class="form-group">
                                            <select name="blood" class="form-control">
                                                <option class="hidden" selected disabled="">Please select your Blood Group</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>

                                            </select>
                                        </div>
                                        <select name="relation" class="form-control">
                                                <option class="hidden"  selected disabled>Marital position</option>
                                                <option value="Married">Married</option>
                                                <option value="Unmarried">Unmarried</option>
                                                
                                            </select>
                                        <input type="submit" class="btnRegister" name="reg"  value="Register as Patient"/>
                                    </div>

                                </form>
                                </div>
                            </div>







                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Registration as a Doctor</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                    	<form action="signupControl.php" method="post">
                                        <div class="form-group">
                                            <input name="fname" type="text" class="form-control" placeholder="First Name *" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="lname" type="text" class="form-control" placeholder="Last Name *" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="psw" type="password" class="form-control" placeholder="Password *" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="cPsw" type="password" class="form-control"  placeholder="Confirm Password *" required="" />
                                        </div>
                                         <div class="form-group">
                                            <input name="cCity" type="text" class="form-control" placeholder="Current City *" required="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="hCity" type="text" class="form-control" placeholder="Designation  *" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="phone" type="email"  name="phone" class="form-control" placeholder="Your Email*" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="nid" type="text" class="form-control" placeholder="NID/Bith Certificate *" required="" />
                                        </div>
                                       
                                        <div class="form-group">
                                            <select name="blood" class="form-control">
                                                <option class="hidden" selected disabled="">Please select your Blood Group</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>

                                            </select>
                                        </div>
                                        <select name="relation" class="form-control">
                                                <option class="hidden"  selected disabled>Marital position</option>
                                                <option value="Married">Married</option>
                                                <option value="Unmarried">Unmarried</option>
                                                
                                            </select>
                                        <input type="submit" class="btnRegister" name="reg"  value="Register as Doctor"/>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>








</body>
</html>