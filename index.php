<?php
	include "db.php";
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
								<a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="profile.php">Profile</a>
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


			<div class="container" id="pro">
  				<div class="row" id="pro">
  					<div class="col-md-8" id="left">
  						erdftgvybhujikl,;.loiuykjtfrjytvkuyl m     m m m j b v b b b    b b b huhuhuiiihihuihouhufygyuguguuyuy uhuuhh i iuyiyiy 8y8yiuy989  8yuy 8 8uuy8yyghygvyg h88u8y8yy78 biu;oinp'm[,[np'bo;uv iycutixycuvylibuonk;]]
  					</div>
  					<div class="col-md-4" id="right">

  						<?php
  							
  							$sender= $_COOKIE['sender'];
  							$sql="SELECT * FROM member WHERE username!='$sender'";
  							$result = $connect->query($sql);
							while($data=$result->fetch_assoc()){
							?>
						<div id="member">
							<?php
								echo "Name: ".$old_name = $data['name']."<br>";
								$receiver = $data['username'];
							?>

							<form action="cookie.php" method="post">
			<!--Receiver--> 	<input type="hidden" value="<?php echo $receiver?>" name="receive" />
								<input type="submit" value="Message" />
							</form>
						</div>
						<?php
							}
  						?>
  					</div>
  				</div>
			</div>
		</body>
	</html>


<?php
	}else{
		header("LOCATION: inde.php?error=Login please.");
	}
?>