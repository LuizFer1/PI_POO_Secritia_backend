<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('User', function (RouteCollection $routes) {
    $routes->get(
        'usuarios',
        'UsuarioController::listUsers',
        ['filter' => 'token']
    );
    $routes->post(
        'create-user',
        'UsuarioController::createUser',
        ['filter' => 'token']
    );
});

