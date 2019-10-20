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

Route::resource('/nutricionista','NutricionistaController')->middleware('auth');

Route::resource('/paciente','PacienteController')->middleware('auth');

Route::resource('/antropometria','AntropometriaController')->middleware('auth');

Route::post('/paciente/busca', 'PacienteController@busca');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');