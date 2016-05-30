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
Route::get('XYZ/admin/login', 'AdminController@login');
Route::post('XYZ/admin/login', 'AdminController@acceso');
Route::get('XYZ/admin/logout', 'AdminController@logout');

// Registration routes...
Route::get('XYZ/admin/register', 'AdminController@registrar');
Route::post('XYZ/admin/register', 'AdminController@registrado');

//Home
Route::get('XYZ/admin/home', 'HomeController@index');
Route::get('XYZ/admin/home/addbook','HomeController@agregar_libro');
Route::post('XYZ/admin/home','HomeController@guardar_libro');

Route::get('XYZ/admin/home/{id}','HomeController@mostrar_libro');
Route::get('XYZ/admin/home/{id}/editar','HomeController@editar_libro');
Route::patch('XYZ/admin/home/{id}','HomeController@modificar_libro');
Route::delete('XYZ/admin/home/{id}','HomeController@borrar_libro');
