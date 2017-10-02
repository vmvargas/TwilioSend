<?php

require_once '../vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

$account_sid = 'ACa4f3cd8fc3f81e9affc4990d28142e80';
$auth_token = '30030ba27276e7fbe2fa41e2b390f22d';
$client = new Client($account_sid, $auth_token);

$messages = $client->accounts("ACa4f3cd8fc3f81e9affc4990d28142e80")
  ->messages->create("+19172445030", array(
        'From' => "+19172677334",
        'Body' => "Hello from Victor Vargas CS 643 Fall 2017",
  ));