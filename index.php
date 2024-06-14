<?php

use Slim\Views\Twig;
use Slim\Factory\AppFactory;
use App\Controllers\ContactController;
use App\Controllers\BlogController as Blog;
use Slim\Views\TwigMiddleware;

require __DIR__ . "/vendor/autoload.php";

$app = AppFactory::create();

$twig = Twig::create('templates', ['cache' => false]);

$app->add(TwigMiddleware::create($app, $twig));

$app->get('/', 'App\Controllers\HomeController:index');

$app->get('/contact', ContactController::class . ':index');

$app->get('/blog', Blog::class . ':index');

$app->run();
