<?php
declare(strict_types=1);

//echo dirname(__DIR__), "\n"; // gets parent of the project - /Applications/XAMPP/xamppfiles/htdocs/web
//echo __DIR__; //gets parent of the directory /Applications/XAMPP/xamppfiles/htdocs/web/api
require(__DIR__ . "/bootstrap.php");

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$parts = explode("/", $path);

$resource = $parts[3];

$id = $parts[4] ?? null;

if ($resource != "tasks") {
    http_response_code(404);

    exit;
}
$db = new Database($_ENV['DB_HOST'], $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);

$user_gateway = new UserGateway($db);

$auth = new Auth($user_gateway, new JWTCodec($_ENV["SECRET_KEY"]));

//apache server removes HTTP_AUTHORIZATION so we can not access it like so $_SERVER["HTTP_AUTHORIZATION"]
//$headers = apache_request_headers(); $headers["authorization"];

//another way is to configure apache server to include auth headers in .htaccess file which we have done
if (!$auth->authAccessToken()) {
    exit;
}

$user_id = $auth->getUserID();

$task_gateway = new TaskGateway($db);

$controller = new TaskController($task_gateway, $user_id);

$controller->processRequest($_SERVER['REQUEST_METHOD'], $id);


?>