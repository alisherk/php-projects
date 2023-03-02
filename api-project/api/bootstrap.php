<?php
ini_set("dsiplay_errors", "On");

//require "../src/TaskController.php";
require(dirname(__DIR__) . '/vendor/autoload.php');

use Dotenv\Dotenv; //Dotenv\Dotenv means there is namespace called Dotenv and class Dotenv on it

//USE OF NAMESPACE
//use MyNamespace\MyClass;
//$my_class = new MyClass("alisher class");


set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) {
    ErrorHandler::handleError($errno, $errstr, $errfile, $errline);
});

set_exception_handler("ErrorHandler::handleException");

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

header("Content-Type: application/json; charset=UTF-8");


?>