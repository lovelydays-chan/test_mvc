<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once 'autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = str_replace('//', '/', str_replace(basename(__DIR__), '', $_SERVER['REQUEST_URI']));
// Strip query string (?foo=bar) and decode URIs
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

$bootstrap = new Lnw\Core\Bootstrap($routeInfo);
$controller = $bootstrap->createController();
if ($controller) {
    new Lnw\Core\Database();
    $controller->executeAction();
}
