<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

   /*  $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    }); */

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });

    $app->get('/', function ($request, $response) {

        $quotes = json_decode(
            file_get_contents(__DIR__ . '/../data/quotes.json'),
            true
        );

        $random = $quotes[array_rand($quotes)];

        $response->getBody()->write($random['quote']);

        return $response;
    });

    $app->get('/browse', function ($request, $response) {
        $response->getBody()->write("Browse Page");
        return $response;
    });

    $app->get('/browse/{id}', function ($request, $response, $args) {
        $response->getBody()->write("Quote ID: " . $args['id']);
        return $response;
    });

    $app->get('/about', function ($request, $response) {
        $response->getBody()->write("About Page");
        return $response;
    });

};
