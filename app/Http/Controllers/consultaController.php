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
	public function eliminarConsulta($id){
		//dd($id);
		Consulta::find($id)->delete();
		return Redirect('/mostrarConsulta');
	}
	public function modificarConsulta($id){
		$consulta=Consulta::find($id);
		$administradores= Administrador::all();
        $pacientes= Paciente::all();
		return view('modificarConsulta', compact('consulta', 'administradores', 'pacientes'));
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