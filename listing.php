<?php
require_once(__DIR__ . '/client/GitHubClient.php');
$client = new GitHubClient();

$username = '';
$password = '';

$owner = 'paddlepaddle';
$repo = 'paddle';

$client->setCredentials($username, $password);
$client->setPage();
$client->setPageSize(20);
//var_dump($client->activity);
$commits = $client->activity->notifications->listYourNotifications($owner, $repo);

print_r($commits);