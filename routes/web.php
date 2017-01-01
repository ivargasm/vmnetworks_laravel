<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','FrontController@index');
Route::get('servicios','FrontController@servicios');
Route::get('contacto','FrontController@contacto');
Route::get('tarjeta/{id}','FrontController@tarjeta');
Route::get('admin','FrontController@admin');

Route::resource('email','MailContactoController');
Route::post('enviado','MailContactoController@send');

Route::resource('usuarios','UsuariosController');

Route::resource('blog','BlogController');
Route::get('newArticle','BlogController@newArticle');

Route::resource('log','LoginController');
Route::get('logout','LoginController@logout');

Auth::routes();
Route::get('home','FrontController@index');

Route::resource('tips','TipsController');
