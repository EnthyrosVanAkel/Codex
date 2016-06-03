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
Route::get('/acuerdo', 'StaticController@acuerdo');
Route::get('/terminos', 'StaticController@terminos');


// Authentication routes...
Route::get('xyz/admin/login', 'LoginController@login');
Route::post('xyz/admin/login', 'LoginController@acceso');
Route::get('xyz/admin/logout', 'LoginController@logout');

// Registration routes...
Route::get('xyz/admin/register', 'LoginController@registrar');
Route::post('xyz/admin/register', 'LoginController@registrado');

//Home
Route::get('xyz/admin/home', 'AdminController@index');
Route::get('xyz/admin/home/addbook','AdminController@agregar_libro');
Route::post('xyz/admin/home','AdminController@guardar_libro');

Route::get('xyz/admin/home/{id}','AdminController@mostrar_libro');
Route::get('xyz/admin/home/{id}/editar','AdminController@editar_libro');
Route::patch('xyz/admin/home/{id}','AdminController@modificar_libro');
Route::delete('xyz/admin/home/{id}','AdminController@borrar_libro');



// ################ API ################

//LIBROS

Route::get('xyz/api/libros_list','APIController@lista_libros');
Route::get('xyz/api/lectores_list','APIController@lista_lectores');
//LECTORES
Route::post('xyz/api/create_reader','APIController@crear_lector');
Route::put('xyz/api/modify_reader','APIController@modificar_lector');
Route::put('xyz/api/modify_password','APIController@change_password');
Route::post('xyz/api/login_lector','APIController@login_lector');
