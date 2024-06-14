<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController
{
    function index(Request $request, Response $response, array $args)
    {
        $response->getBody()->write("Welcome to Home!");
        return $response;
    }
}