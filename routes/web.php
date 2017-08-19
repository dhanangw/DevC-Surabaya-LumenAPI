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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->post('/posts', 'PostController@store');
$app->get('/posts', 'PostController@index');
$app->get('/posts/{id}', 'PostController@show');
$app->put('/posts/{id}', 'PostController@update');
$app->delete('/posts/{id}', 'PostController@delete');
