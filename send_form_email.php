<?php 
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$telephone = $_POST['user_phone'];
$message = $_POST['message'];
$formcontent="From: $name \n Telephone: $telephone \n Message: $message";
$recipient = "tetley640@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you, your message has been sent!" . " -" . "<a href='index.html' style='text-decoration:none;color:#00b6ff;font-weight:bold;font-size:40px;'> Return Home</a>";
?>