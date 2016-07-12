<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdministradorRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'especialidad' => 'required',
            'cedula' => 'required',
            'usuario' => 'required|Unique:administradores',
            'contraseña' => 'required|min:5|confirmed',
            'contraseña_confirmation' => 'required|min:5',
            'direccion' => 'required',
            'estado' => 'required',
            'telefono' => 'required',
            'celular' => 'required',
            'correo' => 'required|Email|Unique:administradores',
        ];
    }
}
