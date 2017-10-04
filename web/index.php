<?php

require('../vendor/autoload.php');
use Twilio\Rest\Client;

$sid = 'ACa4f3cd8fc3f81e9affc4990d28142e80';
$token = '30030ba27276e7fbe2fa41e2b390f22d';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '15512004783',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '19172677334',
        // the body of the text message you'd like to send
        'body' => 'Hello from Victor Vargas CS 643 Fall 2017'
    )
);

echo "message sent";
