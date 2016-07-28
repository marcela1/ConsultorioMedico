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

	$pacientes=Paciente::all();
		return view('/mostrarHistorial', compact( 'pacientes'));
	}

	public function seleccionarHistorial(Request $request){
	//$historial=Historial::all();
	$pacientes=Paciente::all();
	$consulta=Consulta::all();
	$id=$request->input('pacientes');
		//dd($id);
		
		
	$consulta=DB::table('consulta')
	//->join('consulta' , 'historial.id_consulta' , '=' , 'consulta.id')
	->join('administradores', 'consulta.id_administrador' ,'=' , 'administradores.id')
	->join('pacientes', 'consulta.id_paciente', '=', 'pacientes.id')
	->select('consulta.id','pacientes.nombre as np','consulta.fecha','consulta.hora', 'consulta.diagnostico','consulta.tratamiento','administradores.nombre as doc', 
			'administradores.apellido_paterno as ap','administradores.apellido_materno as am','pacientes.id as pid')
	->where('id_paciente', '=', $id)
	->orderBy('consulta.fecha', 'asc')
	->orderBy('consulta.hora', 'asc')
	->get();

	return view('seleccionarHistorial', compact('consulta','pacientes' ));
	}
}