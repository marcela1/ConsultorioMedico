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

Route::get('/ ', function () {
    return view('principal');
});



Route::get('/consultarPacientes','ConsultorioController@consultarPacientes');

Route::get('/registrarPaciente', 'ConsultorioController@registrarPaciente');

Route::post('/guardarPaciente','ConsultorioController@guardarPaciente');

Route::get('/eliminarPaciente/{id}','ConsultorioController@eliminarPaciente');

Route::get('/editarPaciente/{id}','ConsultorioController@editarPaciente');

Route::post('/actualizarPaciente/{id}', 'ConsultorioController@actualizarPaciente');

