<?php

/*
 * Auth Routes
 */

$router->post('/register', 'Auth\AuthController@register');
$router->post('/login', 'Auth\AuthController@login');
