<?php     //start php tag

//vars to get data
$firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
$lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
$address = $_POST["address"];
$address2 = $_POST["address2"];
$city = filter_var($_POST["city"], FILTER_SANITIZE_STRING);
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];
$phone = $_POST["phone"];
$email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
$contact = $_POST["contact"];
$message = $_POST["message"];


//check firstname
if($firstname != ''){
	if(!preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["firstname"]) === 0){
		$errors[] = 'First Name must be from letters, dashes, spaces and must not start with dash';
	}
}
else{
    $errors[] = 'First Name is required';
}

//check lastname
if($lastname != ''){
	if(!preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["lastname"]) === 0){
		$errors[] = 'Last Name must be from letters, dashes, spaces and must not start with dash';
	}
}
else{
    $errors[] = 'Last Name is required';
}

//check address
if($address != ''){
    if(!preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["address"]) === 0){
    	$errors[] = 'Address is not valid';
    }
}
else{
    $errors[] = 'Address is required';
}

//check city
if(!$city){
	$errors[] = 'City is required';
}

//check state

//check zipcode
if(strlen($zipcode) == 0 || preg_match('/^[0-9]{5}$/', $zipcode) === false) {
      $errors[] = 'Zip Code is not valid.';
}

//check phone
if(strlen($phone) == 0 || preg_match('/^[0-9]{10}$/', $phone) === false) {
      $errors[] = 'Phone Number is not valid.';
}


//check email
if(strlen($email) == 0 || preg_match("/^[a-zA-Z]w+(.w+)*@w+(.[0-9a-zA-Z]+)*.[a-zA-Z]{2,4}$/", $email) === false) {
      $errors[] = 'Email Address is not valid.';
}

//check to see if errors are present
if( count($errors) ) {

	// send back to form
	print_r($errors);

} else {
		//email writing
		$email_content = "Name: $firstname $lastname \n";
		$email_content .= "Address: $address $address2 \n";
		$email_content .= "City, State, Zip: $city, $state, $zipcode\n";
		$email_content .= "Email Address: $email \n";
		$email_content .= "Phone Number: $phone \n";
		$email_content .= "Message: $message \n";
		
		// send the email
		mail ("$contact@witmerassociates.com", "WitmerAssociates.com Contact Request", $email_content);
		
		
		
		header("Location: http://witmerassociates.com");
		
}
?>

