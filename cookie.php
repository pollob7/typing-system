<?php
	setcookie("receiver", $_POST['receive'], time()+3600, "/");
	header("LOCATION:  message_form.php");
?>