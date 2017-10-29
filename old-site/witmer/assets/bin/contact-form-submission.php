<?php

// make sure form is submitted
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {
    header("Location: assets/bin/contact-form.php"); exit;
}
//vars to get data
$name = $_POST["contact_name"];
$email_address = $_POST["contact_email"];
$phone_number = $_POST["contact_phone"];
$message = $_POST["contact_message"];
	
// check for name
if (empty ($name))
    $error = "You must enter your name.";
// check for email address
elseif (empty ($email_address)) 
    $error = "You must enter your email address.";
// check for valid email address
elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email_address))
    $error = "You must enter a valid email address.";
// check for phone number
elseif (empty ($phone_number))
	$error = "You must enter your phone number.";
// check for a custom message
elseif (empty ($message))
    $error = "You must enter a message.";
		
// error validation
if (isset($error)) {
    header("Location: assets/bin/contact-form.php?e=".urlencode($error)); exit;
}
		
// input the data into the emails, and write email content
$email_content = "Name: $name\n";
$email_content .= "Email Address: $email_address\n";
$email_content .= "Phone Number: $phone_number\n";
$email_content .= "Message:\n\n$message";
	
// send the email
mail ("$email_address", "WitmerAssociates.com Contact Request", $email_content);
	
// send the user back to the form
header("Location: ../../index.html"); exit;

?>
