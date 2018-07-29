<?php
	session_start();
	session_unset();
	session_destroy();
	setcookie("apple##", "", time()-3600, "/");
	header("LOCATION: login_form.php");
?>