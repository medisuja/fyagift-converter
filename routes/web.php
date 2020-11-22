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
    // return $router->app->version();
    return view('error/Forbidden');
});

/*
$router->get('/converter', 'ConverterController@index');
$router->get('/converter/{id}', 'ConverterController@show');
$router->post('/converter/{id}/update', 'ConverterController@update');
$router->post('/converter/{id}/delete', 'ConverterController@delete');
*/

$router->post('/converter/create', 'ConverterController@create');
$router->get('/converter/to-pdf/{order_id}', 'ConverterController@toPdf');


