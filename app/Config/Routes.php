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


$routes->get('publicacao', 'PublicacaoController::list');

$routes->get('comentario', 'ComentarioController::list');

$routes->get('grupos','GrupoController::list');
$routes->post('add-grupo','GrupoController::createGroup');

$routes->get('login', 'Login::index');
$routes->post('login/process', 'Login::process');

