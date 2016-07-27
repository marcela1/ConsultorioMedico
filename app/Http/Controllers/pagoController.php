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
use App\Pago;
class pagoController extends Controller
{
    public function registrarPago(){
        $pacientes =Paciente::all();
      return view('registrarPago', compact('pacientes'));
    }

    public function guardarPago(Request $request){
      $pago=Pago::all();
      $pago = new Pago();
      $pago ->fecha = $request->input('fecha');
      $pago ->hora= $request -> input('hora');
      $pago ->id_paciente = $request->input('nombre');
      $pago ->pago= $request -> input('pago');
      $pago ->id_administrador = $request->input('Doctor');
      $pago->save();
     return Redirect('/mostrarPago');
    }

      public function mostrarPago(){
		$pago=DB::table('pago')
		->join('pacientes' , 'pago.id_paciente' , '=' , 'pacientes.id')
		->join('administradores', 'pago.id_administrador' ,'=' , 'administradores.id')
		->select('pago.id','pacientes.nombre','pacientes.apellido_paterno','pacientes.apellido_materno','administradores.nombre as doc', 
			'administradores.apellido_paterno as ap','administradores.apellido_materno as am','pago.fecha','pago.hora','pago.pago')
		->orderBy('pago.fecha', 'asc')
		->orderBy( 'pago.hora', 'asc')
		->get();
	
		//traer la informacion de la tabla
		//dd($usuarios);
		return view('/mostrarPago', compact('pago' ));
	}
	public function eliminarPago($id){
		//dd($id);
		Pago::find($id)->delete();
		return Redirect('/mostrarPago');
	}
	public function modificarPago($id){
		  $pacientes =Paciente::all();
		$pago=DB::table('pago')
		->join('pacientes' , 'pago.id_paciente' , '=' , 'pacientes.id')
		->join('administradores', 'pago.id_administrador' ,'=' , 'administradores.id')
		->select('pacientes.nombre','administradores.nombre as doc')
		->get();
        $pago=Pago::find($id);
		return view('modificarPago', compact('pago' ,'pacientes'));
	}
		public function actualizarPago( $id ,Request $request){
		

	  $pago=Pago::find($id);

     
      $pago ->fecha = $request->input('fecha');
      $pago ->hora= $request -> input('hora');
      $pago ->id_paciente = $request->input('nombre');
      $pago ->pago= $request -> input('pago');
      $pago ->id_administrador = $request->input('Doctor');
      $pago->save();
     return Redirect('/mostrarPago');
     
	}
}
