<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
class AuthController extends Controller
{
       public function authenticate()
    {
        if (Administrador::attempt(['usuario' => $usuario, 'contraseña' => $contraseña]))
        {
            return redirect()->intended('dashboard');
        }
    }
}
