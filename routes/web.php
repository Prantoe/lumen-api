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
use Illuminate\Support\Str;


$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function (){
    $random = Str::random(40);
    return $random;
});

$router->post('/post', function(){
    return "postt";
});

// security
$router->get('/security', 'SecurityController@index');
$router->post('/security/add', 'SecurityController@add');

// lampu
$router->get('/lampu', 'LampuController@index');
$router->post('/lampu/add', 'LampuController@add');

// kebakaran
$router->get('/kebakaran', 'KebakaranController@index');
$router->post('/kebakaran/add', 'KebakaranController@add');

// kebocoran gas
$router->get('/kebocoran', 'KebocoranController@index');
$router->post('/kebocoran/add', 'KebocoranController@add');

// kipas otomatis
$router->get('/kipas', 'KipasController@index');
$router->post('/kipas/add', 'KipasController@add');

// greenhouse
$router->get('/greenhouse', 'GreenhouseController@index');
$router->post('/greenhouse/add', 'GreenhouseController@add');