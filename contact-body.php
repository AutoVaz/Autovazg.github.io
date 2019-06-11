<?php

	$btnpost = $_POST['btnpost'];
	// $message = $_POST['mailpost'];
		$to = "gameg1676@gmail.com";
		$subject = "asd";
		$from = "gameg1676@gmail.com";
		$message = "asd";
		$headers = "From: $from";
		mail($to, $subject, $message, $headers);
 ?>


