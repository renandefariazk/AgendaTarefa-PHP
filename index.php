<?php

// require_once "./vendor/autoload.php";
// require_once __DIR__."/vendor/autoload.php";

// $uri = $_SERVER['REQUEST_URI'];
// echo "uri=".$uri."<br>";

require_once 'routes/routeController.php';
use routes\routeController;

//banco
require_once 'models/user.php';
use models\User;
require_once 'models/mes.php';
use models\Mes;
require_once 'models/dias.php';

User::initDB();
Mes::initDB();
Dias::initDB();

// iniciando ROUTES

$rotas = new routeController;