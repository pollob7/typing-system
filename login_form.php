<?php
	if(isset($_COOKIE['apple##'])){
		header("LOCATION: profile.php");
	}else{
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<div>
			<?php
				if(isset($_GET['error'])){
					echo $_GET['error'];
				}
				if(isset($_GET['success'])){
					echo $_GET['success'];
				}
			?>
		</div>
		<form action="login.php" method="post">
			Username or Email: 
			<input type="text" name="user_email" required /> <br>
			Password: 
			<input type="password" name="password" required /> <br>
			<input type="submit" />
		</form>
		<a href="registration_form.php">Create a new account?</a>
	</body>
	</html>
<?php
	}
?>