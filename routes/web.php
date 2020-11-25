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

$router->post('/to-pdf', 'ConverterController@create');
$router->get('/get-file/{name}', 'ConverterController@getFileUrl');
$router->get('/converter/to-pdf/{order_id}', 'ConverterController@toPdf');
