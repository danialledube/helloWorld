<?php
// Create an array of the values submitted by the user
$postVars = array();
foreach ($_POST as $key => $value) {
	// Verify that there is no malicious content
	$value = clean_input($value);
  $postVars[$key] = "$value";
}

// Create a mySqli database connection
$mysqli = new mysqli('localhost', 'danialle_hw', '7od-rXTHnbB1', 'danialle_helloworld');

// Insert values into database
$add_registration = insert($mysqli, $postVars);

// Notify user of result

if ($add_registration) {
	echo "Your registration has been completed successfully. Thank you";
} else {
	echo "There was an error processing your registration.";
}


// function clean_input
// @param unknown_type $input
// return unknown_type $input
// This function will clean up the user inputed data 
// before inserting into the database by trimming extra 
// characters, removing slashes and converting special characters
function clean_input ($input){
	$input = trim($input);
	$input = stripslashes($input);
	$input = htmlspecialchars($input);
	return $input;
} //end of function clean_input ($input) 


// function insert
// @param unknown $connection
// @param array $data 
// return boolean $input
// This function will insert the user inputed data 
// into the registration table 
function insert ($connection, $data) {
	$query = "INSERT INTO registrations
				(first_name, last_name, address, address2, city, state, zip, country, create_date)
			  VALUES
				('" . $data["firstName"]. "',
				 '" . $data["lastName"]. "',
				 '" . $data["address"]. "',
				 '" . $data["address2"]. "',
				 '" . $data["city"]. "',
				 '" . $data["state"]. "',
				 '" . $data["zip"]. "',
				 '" . $data["country"]. "',
				 NOW()
				)
			 ";
	$result = $connection->query($query);
	return $result;
}

?>