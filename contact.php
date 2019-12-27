<?php
if (isset($_POST['submit'])) {
  echo "Worked";
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent = "From: $name \n Message: $message";
$recipient = "jessicaekbailey@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" ."<a herf='index.html' style='text-decoration:none;color:color:#ff0099;'> Return Home<a/>";
?>
