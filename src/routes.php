<?php
use core\Router;
use src\controllers\LotericaController;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', 'LotericaController@add');
$router->post('/novo', 'LotericaController@addAction');
$router->get('/sortear', 'LotericaController@sort');

$router->get('/jogo/{id}/editar', 'LotericaController@edit');
$router->post('/jogo/{id}/editar', 'LotericaController@editAction');

$router->get('/jogo/{id}/excluir', 'LotericaController@del');