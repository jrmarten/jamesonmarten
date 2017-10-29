<?php     //start php tag
//include connect.php page for database connection
// replace with PDO
require('connect.php');

print_r($resource);

$result = mysql_query('SHOW TABLES;', $con);

//print_r( mysql_fetch_array($result) );


//vars to get data
$firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
$lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
$phone = $_POST["phone"];
$email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);

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
		$email_content .= "Email Address: $email \n";
		$email_content .= "Phone Number: $phone \n";
		$email_content .= "Comments: $comments";
		
		// send the email
		mail ("jrmarten@gmail.com", "Wedding RSVP", $email_content);
		
		
		// input the data into the emails, and write email content
		$sql = "" .
			"INSERT INTO
				CONTACT
			SET
				firstname = '{$firstname}',
				lastname = '{$lastname}',
				phone = '{$phone}',
				email = '{$email}',
				comments = '{$comments}'";
				
		$res=mysql_query($sql);
		if($res === true) {
			//echo "Record successfully inserted";
			header("Location: http://jamesonmarten.com/wedding");
		}
		else {
			echo "There is some problem in inserting record";
		}
}
?>

