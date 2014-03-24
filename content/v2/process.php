<?php

$your_email = 'brandon@thisispartone.com';

if ($_SERVER['REQUEST_METHOD'] != 'POST') exit;

foreach($_POST as $key => $value) $_POST[$key] = urldecode(trim($value));

$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];
$code    = $_POST['code'];
$company    = $_POST['company'];
$address    = $_POST['address'];
$state    = $_POST['state'];
$zip    = $_POST['zip'];
$tnumber    = $_POST['tnumber'];
$contact    = $_POST['contact'];

$errors  = array();

if ($name == '') {
  $errors[] = "Please enter your name";
}

if ($email == '') {
  $errors[] = "Please enter your email address";
} else if (strpos($email, '@') === false) {
  $errors[] = "Please enter a valid email address";
}

$time = date('r');
$body = <<<EOD
A contact form was sent to you from $name on $time.

Name: $name
Email: $email  
Message: $message
EOD;

mail($your_email,
     "Contact Form",
     $body,
     "From: $your_email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=ISO-8859-1");
header("Location: ./index.php");
die('OK'); // send success indicator

?>
