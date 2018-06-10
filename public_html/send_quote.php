<?php
ini_set("include_path", '/home2/agrawalt/php:' . ini_get("include_path") );


require_once "Mail.php";
$from = "Agarwal Traders <server@agrawaltraders.co.in>";
$to = "Abhay SV <monuabhaysv@gmail.com>";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
$host = "in-v3.mailjet.com";
$port = "25";
$username = "8450f1f278c28a12ad880acea57e74f7";
$password = "aaa995d2ecc630dfd4c7841152c7b4c9";
$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'port' => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
 } else {
  echo("<p>Message successfully sent!</p>");
 }
?>