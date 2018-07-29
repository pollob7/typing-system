<?php
	include "db.php";
	$sent_user = $_POST['sent_user'];
	$received_user = $_POST['received_user'];
	$sms = $_POST['sms'];
	$sql="INSERT INTO msg(sent_user, received_user, sms) VALUES('$sent_user', '$received_user', '$sms')";
	if($connect->query($sql)===TRUE){
		header("LOCATION: message_form.php");
	}else{
		echo "Message not sent";
	}
?>