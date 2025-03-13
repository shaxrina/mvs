<?php

require_once '../core/Router.php';
require_once '../core/Controller.php';
require_once '../config/database.php';
require_once '../app/Controllers/PostController.php';
require_once '../app/Controllers/UserController.php';

// Routingni sozlash
$router = new Router();

$router->get('/', 'UserController@loginForm');
$router->get('/users/register', 'UserController@registerForm');
$router->post('/users/register', 'UserController@register');
$router->post('/users/login', 'UserController@login');
$router->get('/users/logout', 'UserController@logout');

$router->get('/posts/index', 'PostController@index');
$router->get('/posts/create', 'PostController@create');
$router->post('/posts/store', 'PostController@store');
$router->get('/posts/show', 'PostController@show');
$router->get('/posts/edit', 'PostController@edit');
$router->post('/posts/update', 'PostController@update');
$router->get('/posts/delete', 'PostController@destroy');

$router->dispatch();
