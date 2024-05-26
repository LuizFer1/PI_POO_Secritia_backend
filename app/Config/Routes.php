<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/*
    Rotas relacionadas a Usuarios
*/ 
$routes->get('usuarios', 'UsuarioController::index');
$routes->post('add-pessoa','UsuarioController::createUser');

$routes->get('departamentos','DepartamentoController::list');
$routes->post('add-departamento','DepartamentoController::createDepartament');

$routes->get('grupos','GrupoController::list');
$routes->post('add-grupo','GrupoController::createGroup');

$routes->get('login', 'Login::index');
$routes->post('login/process', 'Login::process');
