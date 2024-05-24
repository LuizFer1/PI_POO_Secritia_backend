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

$routes->group('Publish', function (RouteCollection $routes) {
    $routes->get(
        'publicacao',
        'PublicacaoController::list',
        ['filter'=> 'token']
    );
});
$routes->group('Comment', function (RouteCollection $routes){
    $routes->get('comentario',
    'ComentarioController::list',
    ['filter' => 'token']
);
});

$routes->get('grupos','GrupoController::list');
$routes->post('add-grupo','GrupoController::createGroup');

<<<<<<< HEAD
$routes->get('publicacoes', 'PublicacaoController::list');
$routes->post('publicacoes', 'PublicacaoController::createPublicacao');




$routes->get('comentarios', 'ComentarioController::list');
$routes->post('comentarios', 'ComentarioController::createComentario'); 


$routes->get('reacoes', 'ReacaoController::list');
$routes->post('reacoes', 'ReacaoController::createReacao');
=======
$routes->get('departamentos','DepartamentoController::list');
$routes->post('add-grupo','DepartamentoController::createDepartament');

$routes->get('login', 'Login::index');
$routes->post('login/process', 'Login::process');

>>>>>>> origin/main
