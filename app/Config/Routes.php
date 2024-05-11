<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/*
    Rotas relacionadas a Usuarios
*/ 
$routes->get('usuarios', 'UsuarioController::listUsers');
$routes->post('add-pessoa','UsuarioController::createUser');

$routes->get('departamentos','DepartamentoController::list');
$routes->post('add-departamento','DepartamentoController::createDepartament');

$routes->get('grupos','GrupoController::list');
$routes->post('add-grupo','GrupoController::createGroup');

$routes->get('publicacao', 'PublicacaoController::list');

$routes->get('comentario', 'ComentarioController::list');
$routes->get('reacao', 'ReacaoController::list');