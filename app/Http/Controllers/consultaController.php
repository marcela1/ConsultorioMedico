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
    	$pacientes = Paciente::all();
		$consulta=DB::table('consulta')
		->join('pacientes' , 'consulta.id_paciente' , '=' , 'pacientes.id')
		->join('administradores', 'consulta.id_administrador' ,'=' , 'administradores.id')
		->select('consulta.id','consulta.id_paciente','pacientes.nombre','pacientes.apellido_paterno','pacientes.apellido_materno','administradores.nombre as doc', 
			'administradores.apellido_paterno as ap','administradores.apellido_materno as am','consulta.fecha','consulta.hora')
		->orderBy('consulta.fecha', 'asc')
		->orderBy( 'consulta.hora', 'asc')
		->get();
		
		//traer la informacion de la tabla
		//dd($usuarios);
		return view('/mostrarConsulta', compact('pacientes','consulta'));
	}
	public function eliminarConsulta($id){
		//dd($id);
		Consulta::find($id)->delete();
		return Redirect('/mostrarConsulta');
	}
	public function modificarConsulta($id){
		$pacientes = Paciente::all();
		$consulta=DB::table('consulta as c')
		->where('c.id','=',$id)
		->join('pacientes as p' , 'c.id_paciente' , '=' , 'p.id')
		->join('administradores as a', 'c.id_administrador' ,'=' , 'a.id')
		->select('c.id','c.id_paciente','c.id_administrador','p.nombre','a.nombre as doc','c.fecha','c.hora','c.peso','c.altura','c.IMC','c.temperatura_corporal','c.presion','c.frecuencia_respiratoria','c.frecuencia_cardiaca','c.antecedentes_familiares','c.padecimientos','c.clasificacion','c.diagnostico','c.tratamiento')
		->first();
		return view('modificarConsulta', compact('consulta','pacientes'));
	}
		public function actualizarConsulta( $id ,Request $request){
		

	  $consultas=Consulta::find($id);

      $consultas ->fecha = $request->input('FechaConsulta');
      $consultas ->hora= $request -> input('Hora');
      $consultas ->id_paciente = $request->input('Nombre');
      $consultas ->id_administrador = $request->input('Doctor');
      $consultas ->peso= $request -> input('Peso');
      $consultas ->altura = $request->input('Altura');
      $consultas ->IMC =$request -> input('IMC');
      $consultas ->temperatura_corporal = $request->input('Temperatura');
      $consultas ->presion= $request -> input('Presion');
      $consultas ->frecuencia_respiratoria = $request->input('FrecuenciaRespiratoria');
      $consultas ->frecuencia_cardiaca = $request->input('FrecuenciaCardiaca');
      $consultas ->antecedentes_familiares= $request -> input('AntecedentesFamiliares');
      $consultas ->padecimientos = $request->input('Padecimiento');
      $consultas ->clasificacion= $request -> input('Enfermedad');
      $consultas ->diagnostico = $request->input('Diagnostico');
      $consultas ->tratamiento= $request -> input('Tratamiento');
      $consultas->save();
     return Redirect('/mostrarConsulta');
	}
}