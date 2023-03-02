<?php
require __DIR__ . "/vendor/autoload.php";

$client = new GuzzleHttp\Client;

$res = $client->request('GET', "https://api.github.com/alisherk/repos", [
    "headers" => [
        "Authorization" => "token YOUR_TOKEN",
        "User-Agent" => "daveh"
    ]
]);

echo "this is your resp " . ' ' .$res->getStatusCode(), "\n";

echo $res->getHeader("content-type")[0], "\n";

echo substr($res->getBody(), 0, 100);
