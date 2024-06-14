<?php

use Slim\Factory\AppFactory;
use App\Controllers\ContactController;
use App\Controllers\BlogController as Blog;

require __DIR__ . "/vendor/autoload.php";

$app = AppFactory::create();

$app->get('/', 'App\Controllers\HomeController:index');

$app->get('/contact', ContactController::class . ':index');

$app->get('/blog', Blog::class . ':index');

$app->run();
