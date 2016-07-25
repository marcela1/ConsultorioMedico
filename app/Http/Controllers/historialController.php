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
class historialController extends Controller
{
   public function mostrarHistorial(){
	$historial=Historial::all();
	$pacientes=Paciente::all();
		return view('/mostrarHistorial', compact('historial' , 'pacientes'));
	}

	public function seleccionarHistorial(Request $request){
	$historial=Historial::all();
	$pacientes=Paciente::all();
	$consulta=Consulta::all();
	$historial=DB::table('historial')
	->join('consulta' , 'historial.id_consulta' , '=' , 'consulta.id')
	->join('administradores', 'historial.id_administrador' ,'=' , 'administradores.id')
	->select('historial.id','consulta.fecha','consulta.hora', 'consulta.diagnostico','consulta.tratamiento','administradores.nombre as doc', 
			'administradores.apellido_paterno as ap','administradores.apellido_materno as am')
	->orderBy('consulta.fecha', 'asc')
	->orderBy('consulta.hora', 'asc')
	->get();

	return view('seleccionarHistorial', compact('historial','consulta','pacientes'));
	}
}