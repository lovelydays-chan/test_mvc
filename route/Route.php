<?php

$route->get('/', 'BoardController@Index');
$route->get('/board', 'BoardController@Index');
$route->get('/board/shares', 'BoardController@shares');
$route->get('/board/users/login', 'UsersController@index');
$route->get('/profile', 'UsersController@showProfile');
$route->post('/board/users/login', 'UsersController@login');
$route->get('/board/shares/add', 'SharesController@index');
$route->post('/board/shares/add', 'SharesController@add');
$route->get('/board/users/logout', 'UsersController@logout');
$route->get('/board/users/register', 'UsersController@register');
$route->post('/board/users/register', 'UsersController@add');
