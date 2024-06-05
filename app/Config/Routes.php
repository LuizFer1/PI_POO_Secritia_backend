<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get(
    '/',
    'Home::index',
    [
        'as' => 'home',
        'filter' => 'login'
    ]
);



$routes->group('user', function (RouteCollection $routes) {
    $routes->get(
        'perfil',
        'ProfileController::index',
    );
    $routes->get(
        'login',
        'Login::index',
        ['as' => 'login']
    );
    $routes->post(
        'process',
        'Login::process'
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
        ['filter' => 'isCeo']
    );
    $routes->post(
        'create-ceo',
        'UsuarioController::createCeo',
        ['filter' => 'isAdmin']
    );
    $routes->get(
        'logout',
        'Login::logout',
    );
});

$routes->group('publish', function (RouteCollection $routes) {
    $routes->get(
        'publicacao',
        'PublicacaoController::list'
    );
    $routes->post(
        'create',
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
        'create/(:any)',
        'ReacaoController::createReacao/$1'
    );
    $routes->get(
        'delete/(:any)',
        'ReacaoController::deleteRecord/$1'
    );
});

$routes->get('grupos', 'GrupoController::list');
$routes->post('add-grupo', 'GrupoController::createGroup');

$routes->group('departament', function (RouteCollection $routes) {
    $routes->get(
        'departamentos',
        'DepartamentoController::list'
    );
    $routes->get(
        'register-departament',
        'DepartamentoController::index'
    );
    $routes->post(
        'add-departament',
        'DepartamentoController::createDepartament'
    );
});






