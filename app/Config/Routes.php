<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Produto::index');
$routes->post('add-pessoa','UsuarioController::createUser');
