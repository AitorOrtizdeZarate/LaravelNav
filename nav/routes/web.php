<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('empleados', function(){
	return view('empleados/index');
});
Route::get('proyectos', function(){
	return view('proyectos/index');
});
Route::get('departamentos', 'listarController@departamentos')->name('departamentos.index');
Route::get('empleados', 'listarController@empleados')->name('empleados.index');
Route::get('proyectos', 'listarController@proyectos')->name('proyectos.index');

Route::get('personaEmpleado/{id}', 'listarController@show')->name('persona.empleado');

//Route::resource('/empleados', 'listarController');
 