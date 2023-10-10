<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://scraper-api.smartproxy.com/v2/scrape', [
  'body' => '{"target":"universal","parse":false,"url":"https://ip.smartproxy.com/"}',
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Basic U1B1c2VybmFtZTpTUHBhc3N3b3Jk',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();
