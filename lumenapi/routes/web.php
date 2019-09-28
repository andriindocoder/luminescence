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

//Generate Application Key
$router->get('/key', 'ExampleController@generateKey');

$router->get('/user/{id}', 'ExampleController@getUser');
$router->get('/post/cat1/{cat1}/cat2/{cat2}', 'ExampleController@getPost');

$router->get('/admin/home', ['middleware' => 'age', function(){
	return 'Old Enough';
}]);

$router->get('/fail', function(){
	return 'Not yet mature';
});

$router->get('foo/bar', 'ExampleController@fooBar');
$router->post('bar/foo', 'ExampleController@fooBar');

$router->post('user/profile/request', 'ExampleController@userProfile');

