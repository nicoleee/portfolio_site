<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
	
	$to = "i7752205@bournemouth.ac.uk";
	$name = $_POST['name'];
	$subject = "Potential Client - " . $name;
	$email = $_POST['email'];
	$from = $name . ' <' . $email . '>';
	$message = $_POST['message'];
	$headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= 'From: ' . $from . "\r\n";

	mail($to, $subject, $message, $headers);

	header("Location: Contact.php?error=false");

}
else {
	header("Location: Contact.php?error=true");
}

?>