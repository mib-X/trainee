<?php

use Core\Router as Router;

spl_autoload_register();

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('HOST', "http://" . $_SERVER['HTTP_HOST']);

session_start();
$appHelper = new \Core\AppHelper();
try {
    $appHelper->setupOptions();
} catch (Exception $exception) {
    echo $exception->getMessage();
    exit();
}

$router = new Router();
$router->dispatcher($router->getTrack());
