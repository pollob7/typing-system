<?php
	if(isset($_COOKIE['apple##'])){
?>
	
	<!DOCTYPE html>
	<html>
		<head>
			<title></title>
			<link href="asset/style.css" type="text/css" rel="stylesheet" />
			<link href="asset/bootstrap.css" type="text/css" rel="stylesheet" />
			<link href="asset/bootstrap.js" type="text/css" rel="stylesheet" />
		</head>
		<body>
			<div class="container" id="nav">
				<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
					<a class="navbar-brand" href="#" id="page_logo"><b>My Profile</b></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Profile</a>
							</li>
						</ul>
						
						
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="login_form.php">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="logout.php">Logout</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>




			<div class="container" id="left">
				<h1>wesrdt fyguhijo kpijuygtretf yguhijokl</h1>
			</div>
		</body>
	</html>


<?php
	}else{
		header("LOCATION: login_form.php?error=Login please.");
	}
?>