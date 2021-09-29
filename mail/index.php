<?php
/*-------How to send Email------- */

//$to = "helloyahoobaba@gmail.com,findjquery@gmail.com"; //------multiple Email
$to = "helloyahoobaba@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
//$from = "hello@yahoobaba.net";
//$headers = "From: $from";

$headers = [
  "MIME-Version:1.0",
  "Content-type: text/plain; charset=utf-8",
  "From: hello@yahoobaba.net",
  "Cc: findjquery@gmail.com",
  "Bcc: abc@gmail.com"
];

$headers = implode("\r\n", $headers);
//mail($to ,$subject,$message,$headers);
//echo "Mail Sent.";


if (mail($to, $subject, $message, $headers)) {
  echo "Email Sent.";
} else {
  echo "Email Failed.";
}
