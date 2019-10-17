<?php

if (isset($_POST['strengths'])){
	$strengths = $_POST['strengths']; // note that the strengths variable is actually an array (per the HTML form), although it could have only a single element	
} else {
	$strengths = [];
}


$numberStrengths = count($strengths);

if ($numberStrengths > 0) {
	$personalStrengths = "Personal strengths include: ";
	foreach($strengths as $strengthCategory){
		$personalStrengths = $personalStrengths . "\n" . $strengthCategory;
	}
} else {
	$personalStrengths = "Personal strengths unspecified";
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];
$questions = $_POST['questions'];


$msg = $firstName . " " . $lastName . "\n" . "Age: " . $age . "\n" . "Email: " . $email . "\n" . "Phone: " . $phone . "\n" .
       $personalStrengths . "\n" . "Comments: " . $comments . "\n" . "Questions: " . $questions;
	


//function to echo the msg variable (for testing purposes only)	
//echo nl2br($msg);	
	

	
//function to forward email message to random@gmail.com
//mail("random@gmail.com","Volunteer Registration",$msg);

/*
note (per w3schools.com) about the above function:
"for the mail function to be available, PHP requires an installed and working email system...
the program to be used is defined by the configuration settings in the php.ini file"
*/



//function to redirect to join.php...note that this is a built-in PHP HTTP function
header("location: join.php");
 












?>