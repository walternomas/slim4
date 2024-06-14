<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class ContactController
{
    function index(Request $request, Response $response, array $args)
    {
        $view = Twig::fromRequest($request);
        $data = [
            'title' => 'Contact Page',
            'h1' => 'Contact Me!'
        ];

        return $view->render($response, "contact.html", $data);
    }
}