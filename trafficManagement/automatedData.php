<!DOCTYPE html>
<html>
<head>
	<title>Auto Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		*{
			color: #fff;
		}
		.autobody button{
			margin-left: 40%;

		}
	</style>
</head>
<body class="autobody">
	<form action="automatedDataManage.php" method="post" style="color: black;">
		<div class="autoleftform">
			<div class="input">
				<label>Vehicle ID:</label><br>
				<input type="text" name="vid"><br>
			</div>
		</div>
		<div class="autorightform">
			<div class="input">
				<label>Signal Name:</label><br>
				<input type="text" name="sname"><br>
			</div>
			<div class="input">
				<label>Speed:</label><br>
				<input type="number" name="speed"><br>
			</div>
			<div class="input">
				<label>RFID No:</label><br>
				<input type="text" name="rfidnumber"><br>
			</div>
			<div class="input">
				<label>Lane Maintane:</label><br>
				<input type="text" name="lane"><br>
			</div>
			<button type="Submit">Submit</button>
		</div>
		
	</form>
	
    
</body>
</html>