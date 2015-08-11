<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$message = $_POST['message'];
$to = 'mike@mikelirette.com';
$email_subject = "New Lead Information";
$headers = "CC: mail+leads_red_leaf_weddings_b567-062e3d0af5ff@mailto.shootq.com" . "\r\n";
$headers .= "Content-type: text/plain; charset=ISO-8859-1; format=flowed" . "\r\n";

mail("$to", "$email_subject", "First Name: $firstName\r\n"."\r\nLast Name: $lastName\r\n"."\r\nEmail: $email\r\n"."\r\nPhone: $phone"."\r\nWedding Date: $date"."\r\nMessage: $message", $headers);

?>
