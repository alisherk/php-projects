<?php
declare(stric_types=1); 

require(dirname(__DIR__) . '/vendor/autoload.php');

use Dotenv\Dotenv; //Dotenv\Dotenv means there is namespace called Dotenv and class Dotenv on it

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$db = new Database($_ENV['DB_HOST'], $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);

$db = new Database($_ENV['DB_HOST'], $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);

$refresh_token_gateway = new RefreshTokenGateway($db, $_ENV["SECRET_KEY"]);

echo $refresh_token_gateway->deleteExpired(), "\n"; 

?>