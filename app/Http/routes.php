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



Route::get('/administrador', 'administradorController@registrarAdministrador');
Route::post('/guardarAdministrador', 'administradorController@guardarAdministrador');

Route::get('/cita', 'citaController@registrarCita');
Route::post('/guardarCita', ['as' => 'save-date',
                           'uses' => 'citaController@guardarCita', 
                            function () {
                                return '';
                            }]);
Route::get('/mostrarCita', 'citaController@mostrarCita');
Route::get('/eliminarCita/{id}', 'citaController@eliminarCita');
Route::get('/modificarCita/{id}','citaController@modificarCita');
Route::post('/actualizarCita/{id}','citaController@actualizarCita');

Route::get('/ ', function () {
    return view('principal');
});


Route::get('/consultarPacientes','ConsultorioController@consultarPacientes');

Route::get('/registrarPaciente', 'ConsultorioController@registrarPaciente');

Route::post('/guardarPaciente','ConsultorioController@guardarPaciente');

Route::get('/eliminarPaciente/{id}','ConsultorioController@eliminarPaciente');

Route::get('/editarPaciente/{id}','ConsultorioController@editarPaciente');

Route::post('/actualizarPaciente/{id}', 'ConsultorioController@actualizarPaciente');


Route::get('/registrarConsulta', 'ConsultorioController@registrarConsulta');
Route::post('/guardarConsulta','ConsultorioController@guardarConsulta');


Route::get('/registrarReceta', 'ConsultorioController@registrarReceta');
Route::post('/guardarReceta','ConsultorioController@guardarReceta');

/*Llamadas al controlador Auth*/
//Route::get('login', 'AuthController@authenticate'); // Mostrar login
//Route::post('login', 'AuthController@postLogin'); // Verificar datos
//Route::get('logout', 'AuthController@logOut'); // Finalizar sesión
 
