<?php

require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application;
use app\controllers\SiteController;
use app\controllers\AuthController;

$app = new Application(dirname(__DIR__));

$app->router->get('/', function(){
    return 'Hello World';
});

$app->router->get('/contact', 'contact');
$app->router->post('/contact', [SiteController::class, 'contact']);
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/login', [AuthController::class, 'register']);
$app->run();