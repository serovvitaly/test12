<?php

include __DIR__ . '/../vendor/autoload.php';

$requestPath = parse_url($_SERVER['REQUEST_URI'])['path'];

use controllers\CityController;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

$routes = new RouteCollection();

$routes->add('city', new Route(
    '/city',
    [
        '_controller' => CityController::class,
        '_action' => 'actionGetList',
    ]
));
$routes->add('/city/{cityId}', new Route(
    '/city',
    [
        '_controller' => CityController::class,
        '_action' => 'actionGetOne',
    ]
));

$urlMatcher = new UrlMatcher($routes, new RequestContext());

try {
    $params = $urlMatcher->match($requestPath);
    call_user_func([
        $params['_controller'],
        $params['_action'],
    ]);
} catch (ResourceNotFoundException $e) {
    var_dump($e->getMessage());
}

