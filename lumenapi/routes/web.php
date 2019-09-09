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
$router->get('/key', function(){
	return str_random(32);
});

$router->get('/get-method', function(){
	return "This is GET Method";
});

$router->post('/post-method', function(){
	return "This is POST Method";
});

$router->get('/user/{id}', function($id){
	return "User ID : " . $id;
});

$router->get('/post/{postId}/comments/{commentId}', function ($postId, $commentId){
	return 'Post ID : ' . $postId . '. Comment ID : ' . $commentId;
});
