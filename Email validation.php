<?php

$email = readline("Please input your full email: ");
$defaultKey = "ema_live_r6T0TzduDtCkBPrOlQh73By2TlYQHWuUpTpIzTgf";
$url = "https://api.emailvalidation.io/v1/info?apikey=$defaultKey&email=$email";
$apiContents = file_get_contents($url);
$userEmail = json_decode($apiContents);

if ($userEmail->format_valid === true) {
    echo "The email $userEmail->email by the user $userEmail->user exists" . PHP_EOL;
} else {
    echo "The email $email does not exist." . PHP_EOL;
}