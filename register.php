<?php 
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = isset($_POST['gender']) ? $_POST['gender'] : NULL;
	$email = $_POST['email'];
	$address1 = $_POST['address1'];

	$message = "";
	if (empty($firstname)) {
		$message .= "First Name is Empty";
		$message .= "<br>";
	}
	if (empty($lastname)) {
		$message .= "Last Name is Empty";
		$message .= "<br>";
	}
	if (!isset($gender) or empty($gender)) {
		$message .= "Gender not Selected";
		$message .= "<br>";
	}
	if (empty($email)) {
		$message .= "Email is Empty";
		$message .= "<br>";
	}
	
	if (empty($address1)) {
		$message .= "Street/House/Road is Empty";
		$message .= "<br>";
	}
	

	if ($message === "") {
		echo "Registration Successful";
	}
	else {
		echo $message;
	}
?>