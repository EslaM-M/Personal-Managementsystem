<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css" type="text/css">
<link rel="stylesheet" type="text/css" href="resources/css/style.css" type="text/css">
<script src="resources/js/bootstrap.min.js" type="text/javascript"></script>
<script src="resources/js/bootstrap.js" type="text/javascript"></script>

	<title></title>
</head>
<body>
<div class="container">
   <div class="contents logincont" >
	<div class="register">
	<form action="logincontroller.php" method="post">
		<h1>Register New User</h1>
		<input name="name" class="input-lg" type="text" placeholder="please write your name">
		<input  name="email" class="input-lg" type="mail" placeholder="please write your email">
		<input name="username" class="input-lg" type="text" placeholder="please write your  username">
		<input name="password" class="input-lg" type="password">
		<input class="btn-primary btn-lg" type="submit" name="submit" value="register">
	</form>
		
	</div>
	<div class="login">
		<h1>Login :</h1>
		<form action="logincontroller.php" method="post">
			
			<input class="input-lg" name="username" type="text" placeholder="please enter a username">
			<input class="input-lg" name="password" type="password">
			<input class="btn-primary btn-lg"  type="submit" name="submit" value="login">
		</form>

	</div>
	</div>
</div>
</body>
</html>