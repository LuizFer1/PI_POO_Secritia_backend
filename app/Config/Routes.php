<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Produto::index');
$routes->get('/usuarios', 'UsuarioController::index');
$routes->post('add-pessoa','UsuarioController::createUser');
