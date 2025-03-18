<?php

use App\Http\Route;

//Route::get('/migrate', 'HomeController@migrate');
//Route::get('/seeder', 'HomeController@seeder');

Route::get('/index', 'ViewController@index');
Route::get('/home', 'ViewController@home',true);
Route::get('/clientes', 'ViewController@clientes',true);
Route::get('/enderecos', 'ViewController@enderecos',true);

Route::post('/user/login', 'UserController@login');
Route::post('/cliente', 'ClienteController@store',true);
Route::post('/cliente/delete', 'ClienteController@delete',true);
Route::post('/endereco', 'EnderecoController@store',true);
Route::post('/endereco/delete', 'EnderecoController@delete',true);
