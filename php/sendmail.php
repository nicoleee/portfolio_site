<?php

echo "Submit Button works!";

$recieverEmail = 'i7752205@bournemouth.ac.uk';

$subject = $_POST["subject"];
$email = $_POST["email"];

$mailHeader = "From: " . $email . "\r\n";
$mailHeader = "Reply-To: " . $email . "\r\n";

$emailSubject = 'Message from Contact Form on myportfoliosite.com: ' . $subject;

mail(recieverOfEmail, subjectOfEmail, message, mailHeader);

?>