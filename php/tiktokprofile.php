<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://scrape.smartproxy.com/v1/tasks', [
  'body' => '{"target":"universal","parse":false,"url":"https://www.tiktok.com/@soukainasing1"}',
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Basic U1B1c2VybmFtZTpTUHBhc3N3b3Jk',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();