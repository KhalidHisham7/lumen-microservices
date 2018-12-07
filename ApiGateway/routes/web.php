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

$router->get('/authors' , 'AuthorController@index');
$router->post('/authors' , 'AuthorController@store');
$router->get('/authors/{author}' , 'AuthorController@show');
$router->patch('/authors/{author}/update' , 'AuthorController@update');
$router->delete('/authors/{author}' , 'AuthorController@destroy');

$router->get('/books' , 'BookController@index');
$router->post('/books' , 'BookController@store');
$router->get('/books/{book}' , 'BookController@show');
$router->patch('/books/{book}/update' , 'BookController@update');
$router->delete('/books/{book}' , 'BookController@destroy');
