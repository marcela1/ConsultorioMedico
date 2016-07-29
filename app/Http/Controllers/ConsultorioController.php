<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Paciente;
use App\Administrador;
use App\Receta;
use App\Consulta;
use App\Historial;
use App\consulta_receta;
use PDF;

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

    public function registrarConsulta(){
      $administradores= Administrador::all();
      $pacientes= Paciente::all();
      return view('registrarConsulta', compact('administradores', 'pacientes'));
    }

     public function guardarConsulta(Request $request){
      $consultas=Consulta::all();
      $consultas = new Consulta(); 
      
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
    

     return Redirect('/registrarReceta');
    }

    public function registrarReceta(){
   $prueba=Consulta::all()->last();
   $consulta=DB::table('consulta as c')
    ->where('c.id','=', $prueba->id)   
    ->join('pacientes as p' , 'c.id_paciente' , '=' , 'p.id')
    ->join('administradores as a', 'c.id_administrador' ,'=' , 'a.id')
    ->select('c.id','c.id_paciente','c.id_administrador','p.nombre','a.nombre as doc','c.fecha','c.hora','c.peso','c.tratamiento')
    ->first();
    return view('registrarReceta', compact('consulta'));
    }

    public function guardarReceta(Request $request){
      $recetas=Receta::all();
      $recetas = new Receta();
      $recetas ->fecha = $request->input('Fecha');
      $recetas ->hora= $request -> input('Hora');
      $recetas ->id_paciente = $request->input('Nombre');
      $recetas ->peso= $request -> input('Peso');
      $recetas ->tratamiento= $request -> input('Tratamiento');
      $recetas ->id_administrador = $request->input('Doctor');
      $recetas->save();
     return Redirect('/mostrarConsulta');
    }

     public function nuevaReceta(){
      $administradores= Administrador::all();
      $pacientes= Paciente::all();
      
    return view('nuevaReceta', compact('pacientes','administradores'));
    }

    public function guardarNuevaReceta(Request $request){
      $recetas=Receta::all();
      $recetas = new Receta();
      $recetas ->fecha = $request->input('Fecha');
      $recetas ->hora= $request -> input('Hora');
      $recetas ->id_paciente = $request->input('Nombre');
      $recetas ->peso= $request -> input('Peso');
      $recetas ->tratamiento= $request -> input('Tratamiento');
      $recetas ->id_administrador = $request->input('Doctor');
      $recetas->save();
     return Redirect('/mostrarConsulta');
    }

     public function PDFReceta($id){
      $pacientes=Paciente::all();
    $recetas=DB::table('receta as r')
    ->join('administradores as a', 'r.id_administrador' ,'=' , 'a.id')
    ->join('pacientes as p', 'r.id_paciente', '=', 'p.id')
    ->select('r.id','p.nombre','r.peso','r.fecha','r.hora','r.tratamiento','a.nombre as doc')
    ->where('id_paciente', '=', $id)
    ->orderBy('r.id', 'asc')
    ->get();

      $vista=view('PDFReceta', compact('recetas','pacientes'));
      $dompdf=\App::make('dompdf.wrapper');
      $dompdf->loadHTML($vista);
      return $dompdf->stream();
      
    }
}
