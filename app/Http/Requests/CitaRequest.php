<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CitaRequest extends Request
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
            'id_paciente' => 'required',
            'id_administrador' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required|date_format:y/m/d',
            'hora' => 'required',       
            'consultorio' => 'required',    
             ];
    }
}
