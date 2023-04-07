<?php
// Dependencies to install:
// $ composer require guzzlehttp/guzzle

require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://authapi.moralis.io/challenge/request/evm', [
  'body' => '{"domain":"defi.finance","chainId":1,"address":"0xAb5801a7D398351b8bE11C439e05C5B3259aeC9B","statement":"Please confirm","uri":"https://defi.finance/","expirationTime":"2020-01-01T00:00:00.000Z","notBefore":"2020-01-01T00:00:00.000Z","timeout":15}',
  'headers' => [
    'Accept' => 'application/json',
    'X-API-Key' => 'YOUR_API_KEY',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();