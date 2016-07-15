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
		
		//dd($request->date);
		$citas= new Cita();
		$citas->id_paciente=$request->input('id_paciente');
		$citas->id_administrador=$request->input('id_administrador');
		$citas->descripcion=$request->input('descripcion');
		$citas->fecha=$request->input('date');
		$citas->hora=$request->input('hora');
		$citas->consultorio=$request->input('consultorio');
		$citas->save();


		
		return Redirect('/');
	}
	public function mostrarCita(){
		$cita=DB::table('cita')
		->join('pacientes' , 'cita.id_paciente' , '=' , 'pacientes.id')
		->select('cita.id','pacientes.nombre','cita.id_administrador', 'descripcion','fecha','hora','consultorio')
		->orderBy('fecha', 'asc')
		->orderBy( 'hora', 'asc')
		->get();
	
		//traer la informacion de la tabla
		//dd($usuarios);
		return view('/mostrarCita', compact('cita' , 'administradores'));

	}
	public function eliminarCita($id){
		//dd($id);
		Cita::find($id)->delete();
		return Redirect('/mostrarCita');

	}
	public function modificarCita($id){
		$cita=Cita::find($id);
		return view('modificarCita', compact('cita'));
	}
	public function actualizarCita( $id ,CitaRequest $request){
		
		//dd($request->date);
		$citas=Cita::find($id);
		$citas->id_paciente=$request->input('id_paciente');
		$citas->id_administrador=$request->input('id_administrador');
		$citas->descripcion=$request->input('descripcion');
		$citas->fecha=$request->input('date');
		$citas->hora=$request->input('hora');
		$citas->consultorio=$request->input('consultorio');
		$citas->save();


		
		return Redirect('/mostrarCita');
	}

}

