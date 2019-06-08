<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];



// Create the email and send the message
// $to = 'info@ryosakai.net'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.

// $email_subject = "Website Contact Form:  $name";
// $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
// $headers = "From: noreply@ryosakai.net\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: $email_address";

// mail($to,$email_subject,$email_body,$headers);

$mail_to_send_to = "rsakai@gmail.com";
$your_feedbackmail = "info@ryosakai.net";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";

$headers = "From: $your_feedbackmail" . "\r\n" . "Reply-To: $email" . "\r\n" ;
mail( $mail_to_send_to, "Feedback Form Results", $email_body, $headers );

return true;
?>