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
		<form method="post" action="registration.php">
			Name: 
			<input type="text" name="name" required/><br>
			Username: 
			<input type="text" name="username" required/><br>
			Email: 
			<input type="email" name="email" required/><br>
			Password:
			<input type="password" name="password" required/><br>

			<input type="submit" />
		</form>
	</body>
</html>