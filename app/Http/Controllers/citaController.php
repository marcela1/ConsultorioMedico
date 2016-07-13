<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Administrador;
use App\Cita;
use App\Paciente;
use App\Http\Requests\CitaRequest;
class citaController extends Controller
{
    public function registrarCita(){
		return view('registrarCita');
	}

	public function guardarCita(CitaRequest $request){
	
		$citas= new Cita();
		$citas->id_paciente=$request->input('id_paciente');
		$citas->id_administrador=$request->input('id_administrador');
		$citas->descripcion=$request->input('descripcion');
		$citas->fecha=$request->input('fecha');
		$citas->hora=$request->input('hora');
		$citas->consultorio=$request->input('consultorio');
		$citas->save();


		
		return Redirect('/');
	}
}

