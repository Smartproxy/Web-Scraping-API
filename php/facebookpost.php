<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://scrape.smartproxy.com/v1/tasks', [
  'body' => '{"target":"universal","parse":false,"headless":"html","url":"https://www.facebook.com/zuck/posts/pfbid0HeY54v4LMcv2EMxDz5RvnWaR6swsGFWikzUbrsEFtvxu9n4GCx7zA2YTM69XdiYnl"}',
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Basic U1B1c2VybmFtZTpTUHBhc3N3b3Jk',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();