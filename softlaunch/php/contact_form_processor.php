<?php

/*
File Name: contact_form_processor.php
Date: 05/10/18
Programmer: Janice Bradford
Project: jsb Animation Studios Portfolio
*/

// see what information is in $_POST
//print_r($_POST);

// error reporting
//error_reporting(E_ALL);

// check that the user has filled in the form and clicked submit
if (isset($_POST)) {

  // define variables and set to empty values
  $firstName = $lastName = $email = $subject = $comment = "";

  // sanitize data and assign to variables
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = test_input($_POST['firstName']);
    $lastName = test_input($_POST['lastName']);
    $email = test_input($_POST['email']);
    $subject = test_input($_POST['subject']);
    $comment = test_input($_POST['comment']);
    $comment = wordwrap($comment, 70);
  }
  
  // variables for email
  $from = 'From: jsb Animation Studios';
  $to = 'janice.bradford@pcc.edu';
  $email_subject = 'jsb Animation Studios Contact Form';

  // compose email body
  $body = "From: " . $firstName . " " . $lastName . "\n\n";
  $body .= "E-mail: " . $email . "\n\n";
  $body .= "Subject: " . $subject . "\n\n";
  $body .= "Comment: " . htmlspecialchars_decode($comment, ENT_NOQUOTES) . "\n";

  // send email
  if ($_POST['send']) {
    if (mail($to, $email_subject, $body, $from)) {
        $message = 'Your message has been sent.  Thank you!';
        echo "<script type='text/javascript'>alert('$message');</script>";
				//echo "to: " . $to . "\n\n";
				//echo "email_subject: " . $email_subject . "\n\n";
				echo "body: " . $body . "\n\n";
				//echo "from: " . $from . "\n\n";
    } else {
        $message = 'Something went wrong, please try again!';
        echo"<script type='text/javascript'>alert('$message');</script>";
    }
		
		//create $sql variable
		$sql = "INSERT INTO contact(
				firstName, 
				lastName, 
				email, 
				subject,
				comment)"
			. " VALUES(
				'$firstName', 
				'$lastName', 
				'$email', 
				'$subject',
				'$comment');";

			// display the value of $sql for debugging
			//echo "<br>2. SQL: " . $sql . "<br>";

			// Perform a query and check for errors
			if (!mysqli_query($con,$sql)) {
					echo("Error description: " . mysqli_error($con));
			} else {
					//$message = 'Your message has been added to our database!\n\n';
					//echo "<script type='text/javascript'>alert('$message');</script>";
			}
  }
	
	unset($_POST);
//exit();
}

?>
