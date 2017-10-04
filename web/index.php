<?php

require_once '../vendor/autoload.php';
use Twilio\Rest\Client;

$sid = 'ACa4f3cd8fc3f81e9affc4990d28142e80';
$token = '30030ba27276e7fbe2fa41e2b390f22d';
$client = new Client($sid, $token);

$client->messages->create(
    '19172445030',
    array(
        'from' => '19172677334',
        'body' => 'Hello from Victor Vargas CS 643 Fall 2017'
    )
);

echo "SMS sent";