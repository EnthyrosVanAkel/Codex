<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
/*
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

// Authentication routes...
Route::get('admin/login', 'AdminController@login');
Route::post('admin/login', 'AdminController@acceso');
Route::get('admin/logout', 'AdminController@logout');

// Registration routes...
Route::get('admin/register', 'AdminController@registrar');
Route::post('admin/register', 'AdminController@registrado');

//Home
Route::get('admin/home', 'HomeController@index');
Route::get('admin/home/addbook','HomeController@agregar_libro');
Route::post('admin/home','HomeController@guardar_libro');

Route::get('admin/home/{id}','HomeController@mostrar_libro');
Route::get('admin/home/{id}/editar','HomeController@editar_libro');
Route::patch('admin/home/{id}','HomeController@modificar_libro');
Route::delete('admin/home/{id}','HomeController@borrar_libro');



// ################ API ################

Route::post('xyz/api/create_reader','APIController@crear_lector');
Route::patch('xyz/api/modify_reader/{id}','APIController@modificar_lector');