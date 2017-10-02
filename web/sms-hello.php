<?php
// Get the Twilio-PHP helper library from twilio.com/docs/libraries/php,
// following the instructions to install it with Composer.
require_once "vendor/autoload.php";
use Twilio\Twiml;

$response = new Twiml();
$message = $response->message();
$message->body('Hello from Victor Vargas CS 643 Fall 2017');

header("content-type: text/xml");
echo $response;
