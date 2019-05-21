<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'Zahid@hasan.com';
	$email_subject = "New Form";
	$email_body = "User Name: $name.\n"
					"User Email: $visitor_email.\n"
					"User Message: $message.\n"

	$to = "abc@gmail.com";
	$headers = "From: $email_form \r\n";
	$headers .=  "Reply-To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers)

	header("Location: index.html");

?>
