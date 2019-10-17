<?php

if (isset($_POST['events'])){
	$events = $_POST['events']; // note that the events variable is actually an array (per the HTML form), although it could have only a single element	
} else {
	$events = [];
}


$numberEventsAdvanceRegistration = count($events);

if ($numberEventsAdvanceRegistration > 0) {
	$eventAdvanceRegistration = "Event(s) selected: ";
	foreach($events as $eventName){
		$eventAdvanceRegistration = $eventAdvanceRegistration . "\n" . $eventName;
	}
} else {
	$eventAdvanceRegistration = 'Event unselected';
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$msg = $eventAdvanceRegistration . "\n" . $firstName . " " . $lastName . "\n" . "Age: " . " " . $age . "\n" . "Email: " . $email . "\n" . "Phone: " . $phone . "\n" ;



//function to echo the msg variable (for testing purposes only)
//echo nl2br($msg);	
 
 
 
//function to forward email message to random@gmail.com
//mail("random@gmail.com","Event Registration",$msg);

/*
note (per w3schools.com) about the above function:
"for the mail function to be available, PHP requires an installed and working email system...
the program to be used is defined by the configuration settings in the php.ini file"
*/



//function to redirect to events.php...note that this is a built-in PHP HTTP function
header("location: events.php");
 












?>