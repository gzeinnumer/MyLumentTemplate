<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


// API route group
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('register', 'AuthController@register');
    $router->post('login', 'AuthController@login');

    //USERS
    $router->post('users/all', 'UserController@all');
    $router->post('users/insert', 'UserController@insert');
    $router->post('users/single/{id}', 'UserController@single');
    $router->post('users/delete', 'UserController@delete');
    $router->post('users/update', 'UserController@update');
});