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
    return view('principal2');
});

Route::get('/principal ', function () {
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
Route::get('/nuevaReceta', 'ConsultorioController@nuevaReceta');
Route::post('/guardarNuevaReceta','ConsultorioController@guardarNuevaReceta');
Route::get('/PDFReceta/{id}','ConsultorioController@PDFReceta');


Route::get('/mostrarConsulta', 'consultaController@mostrarConsulta');
Route::get('/eliminarConsulta/{id}', 'consultaController@eliminarConsulta');
Route::get('/modificarConsulta/{id}','consultaController@modificarConsulta');
Route::post('/actualizarConsulta/{id}','consultaController@actualizarConsulta');
Route::get('/mostrarHistorial', 'historialController@mostrarHistorial');
Route::post('/seleccionarHistorial','historialController@seleccionarHistorial');



Route::get('/registrarPago', 'pagoController@registrarPago');
Route::post('/guardarPago','pagoController@guardarPago');
Route::get('/mostrarPago', 'pagoController@mostrarPago');
Route::get('/eliminarPago/{id}', 'pagoController@eliminarPago');
Route::get('/modificarPago/{id}','pagoController@modificarPago');
Route::post('/actualizarPago/{id}','pagoController@actualizarPago');



Route::get('/pdfHistorial/{id}','pdfController@pdfHistorial');
Route::get('/pdfPago/{id}','pdfController@pdfPago');




Route::auth();

Route::get('/home', 'HomeController@index');
