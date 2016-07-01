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
    return $app->welcome();
});

$app->group(['namespace' => 'App\Http\Controllers'], function($app) {
  $app->get('book', 'PostController@index');
  $app->get('book/{id}', 'PostController@getPost');
  $app->post('book/{id}', 'PostController@createPost');
  $app->put('book/{id}', 'PostController@updatePost');
  $app->delete('book/{id}', 'PostController@deletePost');
});
