<?php
  if(isset( $_POST['email']))
  $email = $_POST['email'];
  $content="Email: $email";
  $recipient = "lizaleee333@gmail.com";
  $mailheader = "From: $email \r\n";
  mail($recipient, "BDE Mail List", $content, $mailheader) or die("Error!");
  echo "Email sent!";
?>
