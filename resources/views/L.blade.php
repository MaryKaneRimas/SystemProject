<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="icon" href="img/logo.png">
	<link href="/css1/sample.css" rel="stylesheet">
</head>
<body>
	<div class="div1">
	
	</div>
	<div class="div2">
		<form method="post" action="/L">
		@csrf
		<center><img src="img/logo.png" width="25%">
		<br>
		<b>LOG IN</b>
		<br><br>
		<input type="text" name="username" placeholder="Username" size="30" class="inputL">
		<br>
		<input type="Password" name="password" placeholder="Password" size="30" class="inputL">
		<br>
		<button class="blue" type="submit" name="login_user"><a href="H"> Log in</a></button> &nbsp;<button class="yellow"><a href="R" >Register</a></button>
		<br><br><br>
		</center>
		</form>
	</div>
	


</body>
</html>