<?php

use App\Http\Route;

Route::get('/migrate', 'HomeController@migrate');
Route::get('/seeder', 'HomeController@seeder');

Route::get('/index', 'ViewController@index');
Route::get('/home', 'ViewController@home',true);

Route::post('/user/login', 'UserController@login');
