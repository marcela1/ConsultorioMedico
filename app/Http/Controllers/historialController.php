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
		return view('/mostrarHistorial', compact('historial' ));
	}
}