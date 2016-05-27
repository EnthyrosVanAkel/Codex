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

Route::get('/', 'StaticController@index');
/*
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

// Authentication routes...
Route::get('xyz/admin/login', 'AdminController@login');
Route::post('xyz/admin/login', 'AdminController@acceso');
Route::get('xyz/admin/logout', 'AdminController@logout');

// Registration routes...
Route::get('xyz/admin/register', 'AdminController@registrar');
Route::post('xyz/admin/register', 'AdminController@registrado');

//Home
Route::get('xyz/admin/home', 'HomeController@index');
Route::get('xyz/admin/home/addbook','HomeController@agregar_libro');
Route::post('xyz/admin/home','HomeController@guardar_libro');

Route::get('xyz/admin/home/{id}','HomeController@mostrar_libro');
Route::get('xyz/admin/home/{id}/editar','HomeController@editar_libro');
Route::patch('xyz/admin/home/{id}','HomeController@modificar_libro');
Route::delete('xyz/admin/home/{id}','HomeController@borrar_libro');



// ################ API ################

//LIBROS

Route::get('xyz/api/libros_list','APIController@lista_libros');
//LECTORES
Route::post('xyz/api/create_reader','APIController@crear_lector');
Route::patch('xyz/api/modify_reader/{id}','APIController@modificar_lector');