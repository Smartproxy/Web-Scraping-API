<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://scrape.smartproxy.com/v1/tasks', [
  'body' => '{"target":"universal","parse":false,"url":"https://www.reddit.com/user/thegoldinthemountain/","headless":"html"}',
  'headers' => [
    'Content-Type' => 'application/json',
    'accept' => 'application/json',
    'authorization' => 'Basic U1B1c2VybmFtZTpTUHBhc3N3b3Jk',
  ],
]);

echo $response->getBody();