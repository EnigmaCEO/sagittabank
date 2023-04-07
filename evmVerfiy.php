<?php
// Dependencies to install:
// $ composer require guzzlehttp/guzzle

require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://authapi.moralis.io/challenge/verify/evm', [
  'body' => '{"message":"defi.finance wants you to sign in with your Ethereum account:\n0xAb5801a7D398351b8bE11C439e05C5B3259aeC9B\n\n\nURI: https://defi.finance\nVersion: 1\nChain ID: 1\nNonce: Px7Nh1RPzlCLwqgOb\nIssued At: 2022-11-30T10:20:00.262Z","signature":"0xa8f89a58bf9b433d3100f9e41ee35b5e31fb8c7cd62547acb113162ec6f2e4140207e2dfbd4e387e1801ebc7f08a9dd105ac1d22b2e2ff0df5fa8b6d9bdcfe491c"}',
  'headers' => [
    'Accept' => 'application/json',
    'X-API-Key' => 'YOUR_API_KEY',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();