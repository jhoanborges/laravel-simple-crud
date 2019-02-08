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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');


Route::get('/clientes/', 'ClientesController@index')->name('clientes.index')->middleware('auth');
Route::get('/editar/{id}', 'ClientesController@edit')->name('editar')->middleware('auth');
Route::delete('/delete/{id}', 'ClientesController@destroy')->name('delete.cliente')->middleware('auth');
Route::post('/add.cliente', 'ClientesController@store')->name('add.cliente')->middleware('auth');
Route::post('/edit.cliente', 'ClientesController@update')->name('edit.cliente')->middleware('auth');
