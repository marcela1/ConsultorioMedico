<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Administrador;
use App\Http\Requests\AdministradorRequest;
class administradorController extends Controller
{
    public function registrarAdministrador(){
		return view('registrarAdministrador');
	}

	public function guardarAdministrador(AdministradorRequest $request){
	
		//dd($request);
		$administrador= new Administrador();
		$administrador->nombre=$request->input('nombre');
		$administrador->apellido_paterno=$request->input('apellido_paterno');
		$administrador->apellido_materno=$request->input('apellido_materno');
		$administrador->especialidad=$request->input('especialidad');
		$administrador->cedula=$request->input('cedula');
		$administrador->usuario=$request->input('usuario');
		$administrador->contraseña=$request->input('contraseña');
		$administrador->direccion=$request->input('direccion');
		$administrador->estado=$request->input('estado');
		$administrador->telefono=$request->input('telefono');
		$administrador->celular=$request->input('celular');
		$administrador->correo=$request->input('correo');


		$administrador->save();
		return Redirect('/');
		//dd($nombre. " ".$edad. " ".$correo);

	}
}
