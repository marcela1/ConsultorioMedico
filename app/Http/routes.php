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

Route::get('/', function () {
    return view('master');
});
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