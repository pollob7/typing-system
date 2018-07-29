<?php
	include "db.php";
	if(isset($_COOKIE['receiver'])){
		

		
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
				<?php
					$sender = $_COOKIE['sender'];
					$receiver = $_COOKIE['receiver'];

					$sent="SELECT * FROM msg WHERE (sent_user='$sender' AND received_user='$receiver') OR (sent_user='$receiver' AND received_user='$sender')";
					$p = $connect->query($sent);
						while($inform=$p->fetch_assoc()){
							if($inform['sent_user']==$sender){
							echo "<div class='row'>";
								echo "<div class='col-md-4 col-sm-12'>";
									echo $inform['sms'];
								echo "</div>";
								echo "<div class='col-md-8'>";
								echo "</div>";
							echo "</div>";
							}else{
								echo "<div class='row'>";
								echo "<div class='col-md-8'>";
								echo "</div>";
								echo "<div class='col-md-4 col-sm-12'>";
									echo $inform['sms'];
								echo "</div>";
							echo "</div>";
							}
						}
					/*$sql="SELECT * FROM msg WHERE sent_user='$receiver' AND received_user='$sender'";
					$result = $connect->query($sql);
						while($data=$result->fetch_assoc()){
							echo "<div class='row'>";
								echo "<div class='col-md-8'>";
								echo "</div>";
								echo "<div class='col-md-4 col-sm-12'>";
									echo $data['sms'];
								echo "</div>";
							echo "</div>";
						}*/
				?>
  				<form action="message.php" method="post">
					<input type="hidden" value="<?php echo $_COOKIE['sender'] ?>" name="sent_user">
					<input type="hidden" value="<?php echo $_COOKIE['receiver'] ?>" name="received_user">
					<textarea name="sms" id="textarea" required></textarea>
					<input type="submit" value="Sent" />
				</form>
			</div>
		</body>
	</html>


<?php
	
	}else{
		header("LOCATION: index.php?error=please select the member");
		//echo "please select the member";
	}
?>
						
					
									
				