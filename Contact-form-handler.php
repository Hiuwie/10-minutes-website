<?php

	// collects the data from the form in html
	$name = $_POST["name"];
	$visitor_email = $_POST["email"];
	$message = $_POST["message"];

	// the address of the email that will receive the mail
	$email_from = "enquiry@10minuteswiththestar.co.za";

	// the main subject to show on address what mail is about
	$email_subject ="10 minutes with the star Enqueiry ";

	// This will be sent to the address
	$email_body = "User name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";

	// the address to where I want to recive enquires 
	$to = "info@10minuteswiththestar.co.za";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	// location of the html file
	header("Location:Contact.js");
?>