<?php

use Core\Router as Router;

spl_autoload_register();

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
$router = new Router();

var_export($router->run());