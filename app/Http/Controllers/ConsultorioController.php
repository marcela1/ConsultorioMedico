<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Paciente;


class ConsultorioController extends Controller
{
     public function consultarPacientes(){
      $pacientes=Paciente::all();
      return view('consultarPacientes',compact('pacientes'));
    }

    public function registrarPaciente(){
      return view('registrarPaciente');
    }

    public function guardarPaciente(Request $request){
      $pacientes=Paciente::all();
      $pacientes = new Paciente();
      $pacientes ->fecha_registro = $request->input('FechaRegistro');
      $pacientes ->nombre= $request -> input('Nombre');
      $pacientes ->apellido_paterno = $request->input('ApellidoPat');
      $pacientes ->apellido_materno= $request -> input('ApellidoMat');
      $pacientes ->fecha_nacimiento = $request->input('FechaNacimiento');
      $pacientes ->sexo= $request -> input('Sexo');
      $pacientes ->estado_civil = $request->input('EstadoCivil');
      $pacientes ->lugar_nacimiento= $request -> input('LugarNacimiento');
      $pacientes ->ocupacion = $request->input('Ocupacion');
      $pacientes ->tipo_sangre= $request -> input('TipoSangre');
      $pacientes ->seguro_medico = $request->input('SeguroMedico');
      $pacientes ->curp= $request -> input('CURP');
      $pacientes ->calle = $request->input('Calle');
      $pacientes ->colonia= $request -> input('Colonia');
      $pacientes ->ciudad = $request->input('Ciudad');
      $pacientes ->codigo_postal= $request -> input('CP');
      $pacientes ->telefono = $request->input('Telefono');
      $pacientes ->correo= $request -> input('Correo');
      $pacientes ->numero_casa = $request->input('NumeroExterior_Interior');
      $pacientes ->municipio= $request -> input('Municipio');
      $pacientes ->estado = $request->input('Estado');
      $pacientes ->pais= $request -> input('Pais');
      $pacientes ->celular= $request -> input('Celular');
      $pacientes->save();
      return Redirect('/consultarPacientes');
    }


    public function eliminarPaciente($id){
      Paciente::find($id)->delete();
      return Redirect('/consultarPacientes');
    }

     public function editarPaciente($id){
      $pacientes=Paciente::find($id);

      return view('editarPaciente', compact('pacientes'));
   

 }
  public function actualizarPaciente(Request $request,$id){
      $pacientes = Paciente::find($id);
      $pacientes ->fecha_registro = $request->input('FechaRegistro');
      $pacientes ->nombre= $request -> input('Nombre');
      $pacientes ->apellido_paterno = $request->input('ApellidoPat');
      $pacientes ->apellido_materno= $request -> input('ApellidoMat');
      $pacientes ->fecha_nacimiento = $request->input('FechaNacimiento');
      $pacientes ->sexo= $request -> input('Sexo');
      $pacientes ->estado_civil = $request->input('EstadoCivil');
      $pacientes ->lugar_nacimiento= $request -> input('LugarNacimiento');
      $pacientes ->ocupacion = $request->input('Ocupacion');
      $pacientes ->tipo_sangre= $request -> input('TipoSangre');
      $pacientes ->seguro_medico = $request->input('SeguroMedico');
      $pacientes ->curp= $request -> input('CURP');
      $pacientes ->calle = $request->input('Calle');
      $pacientes ->colonia= $request -> input('Colonia');
      $pacientes ->ciudad = $request->input('Ciudad');
      $pacientes ->codigo_postal= $request -> input('CP');
      $pacientes ->telefono = $request->input('Telefono');
      $pacientes ->correo= $request -> input('Correo');
      $pacientes ->numero_casa = $request->input('NumeroExterior_Interior');
      $pacientes ->municipio= $request -> input('Municipio');
      $pacientes ->estado = $request->input('Estado');
      $pacientes ->pais= $request -> input('Pais');
      $pacientes ->celular= $request -> input('Celular');
      $pacientes->save();
      return Redirect('/consultarPacientes');
    }
}
