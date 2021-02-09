<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="icon" href="img/logo.png">
	<link href="/css1/sample.css" rel="stylesheet">
</head>
<body>
	<div class="div1">
	
	</div>
	<div class="div2">
		<center><img src="img/logo.png" width="25%">
		<br>
		<b>REGISTER</b>
		<br><br>
		<form method="POST" action="/R">
		@csrf
		<input type="text" name="firstname" placeholder="Firstname" size="15" class="inputL"> <input type="text" name="last Name" placeholder="Last Name" size="15" class="inputL">
		<br>
		<input type="text" name="Username" placeholder="Username" size="36" class="inputL">
		<br>
		<input type="Password" name="password" placeholder="Password" size="36" class="inputL">
		<br>
		<button type="submit" name="btnInsert" class="yellow">Register</button>
		<br><br>
		</center>
		</form>
	</div>
	


</body>
</html>