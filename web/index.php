<?php

require_once '../vendor/autoload.php';
use Twilio\Rest\Client;

$sid = 'ACa4f3cd8fc3f81e9affc4990d28142e80';
$token = 'YOURAUTHTOKEN';
$client = new Client($sid, $token);

$client->messages->create(
    '19173490168',
    array(
        'from' => '19172677334',
        'body' => 'Hello from Victor Vargas CS 643 Fall 2017'
    )
);

echo "SMS sent to (917)349-0168";
