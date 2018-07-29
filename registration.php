<?php
	include "db.php";
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);



		$member="SELECT * FROM member WHERE username = '$username' OR email = '$email' ";
		$result = $connect->query($member);
		while($data=$result->fetch_assoc()){
			$old_username = $data['username'];
			$old_email = $data['email'];
		}
		if($result->num_rows>0){
			if($username == $old_username){
				//echo "It is resently used, Please typing the different username";
				header("LOCATION: registration_form.php?error=It is resently used, Please typing the different username");
			}else{
				//echo "It is resently used, Please typing the different email";
				header("LOCATION: registration_form.php?error=It is resently used, Please typing the different email");
			}
		}else{
			$sql="INSERT INTO member(name, username, email, password) VALUES('$name', '$username', '$email', '$password')";
			if($connect->query($sql)===TRUE){
				//echo "Registration Successfully";
				header("LOCATION: login_form.php?success=Registration sucessfully login please.");
			}else{
				echo "Registration not sucessfully";
			}
		}
		/*if($username != $old_username){
			if($email != $old_email){
				
			}else{
				echo "Please typing the different username";
			}
		}else{
			echo "It is resently used, Please typing the different username";
		}*/
	}else{
		header("LOCATION: registration_form.php");
	}
?>