<?php
	session_start();
	include "db.php";
	if(isset($_POST['user_email'])){
		$user_email = $_POST['user_email'];
		$password = md5($_POST['password']);

		$sql = "SELECT * FROM member WHERE username = '$user_email' OR email='$user_email' ";
		$result = $connect->query($sql);
		if($result->num_rows>0){
			while ($data = $result->fetch_assoc()){
				$old_password = $data['password'];
				$old_username = $data['username'];
				
			}

			if($password == $old_password){
				setcookie("apple##", "mango##", time()+3600, "/");
				setcookie("sender", "$old_username", time()+3600, "/");
				header("LOCATION: profile.php");
			}else{
				header("LOCATION: login_form.php?error=Your password is wrong!!");
			}


		}else{
			//echo "szdxfcgvhbjnkml";
			header("LOCATION: login_form.php?error=Please different email or username");
		}
	}else{
		header("LOCATION: login.php?error=Login please.");
	}
?>