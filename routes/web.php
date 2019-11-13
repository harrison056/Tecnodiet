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

Route::resource('/anamnese','AnamneseController')->middleware('auth');

//Route::resource('/dieta','DietaController')->middleware('auth');

Route::resource('/gasto','GastoController')->middleware('auth');

Route::get('paciente/{id}/dieta', 'DietaController@dieta')->middleware('auth');

Route::post('/paciente/busca', 'PacienteController@busca')->middleware('auth');

Route::get('nutricionista/profile', 'NutricionistaController@show')->middleware('auth');

Route::get('/antropometria/{id}/pdf', 'AntropometriaController@gerarPdf')->middleware('auth');

Route::get('/anamnese/{id}/pdf', 'AnamneseController@gerarPdf')->middleware('auth');

Auth::routes();

Route::get('/home', 'NutricionistaController@index')->name('home');
