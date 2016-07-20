<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Administrador;
use App\Cita;
use App\Paciente;
use App\Http\Requests\CitaRequest;
use App\Historial;
use App\Receta;
use App\Consulta;

class consultaController extends Controller
{
    public function mostrarConsulta(){
		$consulta=DB::table('consulta')
		->join('pacientes' , 'consulta.id_paciente' , '=' , 'pacientes.id')
		->join('administradores', 'consulta.id_administrador' ,'=' , 'administradores.id')
		->select('consulta.id','pacientes.nombre','pacientes.apellido_paterno','pacientes.apellido_materno','administradores.nombre as doc', 
			'administradores.apellido_paterno as ap','administradores.apellido_materno as am','consulta.fecha','consulta.hora')
		->orderBy('consulta.fecha', 'asc')
		->orderBy( 'consulta.hora', 'asc')
		->get();
	
		//traer la informacion de la tabla
		//dd($usuarios);
		return view('/mostrarConsulta', compact('consulta' ));

	}

	public function eliminarCita($id){
		//dd($id);
		Consulta::find($id)->delete();
		return Redirect('/mostrarConsulta');

	}
	public function modificarConsulta($id){
		$consulta=Consulta::find($id);
		return view('modificarConsulta', compact('consulta'));
	}
		public function actualizarConsulta( $id ,Request $request){
		
		//dd($request->date);
		$consulta=Consulta::find($id);
		$citas->id_paciente=$request->input('id_paciente');
		$citas->id_administrador=$request->input('id_administrador');
		$citas->descripcion=$request->input('descripcion');
		$citas->fecha=$request->input('date');
		$citas->hora=$request->input('hora');
		$citas->consultorio=$request->input('consultorio');
		$citas->save();


		
		return Redirect('/mostrarConsulta');
	}
}
