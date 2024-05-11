<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
<<<<<<< HEAD
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
=======
/*
    Rotas relacionadas a Usuarios
*/ 
$routes->get('usuarios', 'UsuarioController::index');
$routes->post('add-pessoa','UsuarioController::createUser');

$routes->get('departamentos','DepartamentoController::list');
$routes->post('add-departamento','DepartamentoController::createDepartament');

$routes->get('grupos','GrupoController::list');
$routes->post('add-grupo','GrupoController::createGroup');
>>>>>>> 39747a5ead199a3730ab985a7c7e9d35aec76996
