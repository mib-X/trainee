<?php

use Core\Router as Router;

spl_autoload_register();

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('HOST', "http://" . $_SERVER['HTTP_HOST']);
$router = new Router();

$router->Dispatcher($router->getTrack());