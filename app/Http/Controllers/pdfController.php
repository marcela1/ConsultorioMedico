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
class pdfController extends Controller
{
 
 public function pdfHistorial($id){
	$pacientes=Paciente::all();
	$consulta=Consulta::all();
	//$id=$request->input('pacientes');
		//dd($id);	
	$consulta=DB::table('consulta')
		//$paciente=Paciente::find($id);
		->join('administradores', 'consulta.id_administrador' ,'=' , 'administradores.id')
		->join('pacientes', 'consulta.id_paciente', '=', 'pacientes.id')
		->select('consulta.id','pacientes.nombre as np','consulta.fecha','consulta.hora', 'consulta.diagnostico','consulta.tratamiento','administradores.nombre as doc', 
			'administradores.apellido_paterno as ap','administradores.apellido_materno as am')
		->where('id_paciente', '=', $id)
		->orderBy('consulta.fecha', 'asc')
		->orderBy('consulta.hora', 'asc')
		->get();

		$vista=view('pdfHistorial', compact('pacientes', 'consulta'));
		$dompdf=\App::make('dompdf.wrapper');
		$dompdf->loadHTML($vista);
		return $dompdf->stream();
	
	}
}
