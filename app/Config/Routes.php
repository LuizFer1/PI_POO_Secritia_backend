<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);

$routes->group('user', function (RouteCollection $routes) {
    $routes->get(
        'login',
        'Login::index'
    );
    $routes->post(
        'process',
        'Login::process'
    );
    $routes->get(
        'usuarios',
        'UsuarioController::listUsers'
    );
    $routes->get(
        'registro',
        'UsuarioController::index'
    );
    $routes->post(
        'create-user',
        'UsuarioController::createUser'
    );
    $routes->post(
        'create-lider',
        'UsuarioController::createLeader',
    );
    $routes->post(
        'create-ceo',
        'UsuarioController::createCeo',
        ['filter' => 'isAdmin']
    );
});

$routes->group('publish', function (RouteCollection $routes) {
    $routes->get(
        'publicacao',
        'PublicacaoController::list'
    );
    $routes->post(
        'publicacoes',
        'PublicacaoController::createPublicacao'
    );
});
$routes->group('comment', function (RouteCollection $routes) {
    $routes->get(
        'comentario',
        'ComentarioController::list'
    );
    $routes->post(
        'comentarios',
        'ComentarioController::createComentario'
    );
});
$routes->group('reactions', function (RouteCollection $routes) {
    $routes->get(
        'reacoes',
        'ReacaoController::list'
    );
    $routes->post(
        'reacoes',
        'ReacaoController::createReacao'
    );
});

$routes->get('grupos', 'GrupoController::list');
$routes->post('add-grupo', 'GrupoController::createGroup');

$routes->get('departamentos', 'DepartamentoController::list');
$routes->post('add-grupo', 'DepartamentoController::createDepartament');







