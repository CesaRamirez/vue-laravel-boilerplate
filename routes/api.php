<?php

/*
 * Auth Routes
 */

$router->post('/register', 'Auth\AuthController@register');
$router->post('/login', 'Auth\AuthController@login');
$router->post('/logout', 'Auth\AuthController@logout');
$router->post('/logout', 'Auth\AuthController@logout');

$router->middleware('jwt.auth')->group( function ( $router ) {
    $router->get('/me', 'Auth\AuthController@user');
});
