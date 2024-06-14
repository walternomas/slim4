<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class BlogController
{
    function index(Request $request, Response $response, array $args)
    {
        $view = Twig::fromRequest($request);
        $data = [
            'title' => 'Blog Page',
            'category' => 'blog'
        ];

        return $view->render($response, "blog.html", $data);
    }
}