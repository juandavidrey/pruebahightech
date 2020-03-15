<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::resource('clientes', 'ClientesController')->names(
    ['registrar' => 'clientes.create'],
    ['index' => 'clientes']);*/

//mostrará la tabla con todos los clientes y acciones crud
Route::get('/clientes/consultar', 'ClientesController@index')->name('clientes.consultar');

//registrar, formulario de un nuevo cliente
Route::get('/clientes/registrar', 'ClientesController@create')->name('clientes.registrar');

//acción para guardar un cliente
Route::post('/clientes/registrar','ClientesController@store')->name('clientes.registrar');

//editar, formulario de editar un cliente
Route::get('/clientes/editar/{id}', 'ClientesController@edit')->name('clientes.editar');

//acción para actualizar un cliente
Route::put('/clientes/actualizar/{id}', 'ClientesController@update')->name('clientes.actualizar');

//eliminar un cliente
Route::delete('/clientes/eliminar/{id}', 'ClientesController@destroy')->name('clientes.eliminar');

//buscar un cliente
Route::get('/clientes/buscar', 'ClientesController@buscar')->name('clientes.buscar');

//mostrar un cliente
Route::get('/clientes/mostrar', 'ClientesController@show')->name('clientes.mostrar');

//Route::resource('/clientes', 'ClientesController');

