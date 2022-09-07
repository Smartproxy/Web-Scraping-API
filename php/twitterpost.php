<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://scrape.smartproxy.com/v1/tasks', [
  'body' => '{"target":"universal","parse":false,"headless":"html","url":"https://twitter.com/elonmusk/status/1552317587694010368?cxt=HHwWgIC-keOn-IorAAAA","device_type":"desktop"}',
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Basic U1B1c2VybmFtZTpTUHBhc3N3b3Jk',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();