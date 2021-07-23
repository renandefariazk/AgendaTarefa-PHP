<?php
require_once __DIR__."/vendor/autoload.php";

// $uri = $_SERVER['REQUEST_URI'];
// echo "uri=".$uri."<br>";

// $uriPath = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
// echo "uriPath=".$uriPath;
require_once 'routes/routeController.php';
use routes\routeController;

$rotas = new routeController;