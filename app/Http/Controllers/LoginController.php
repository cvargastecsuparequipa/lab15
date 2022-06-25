<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {

        $usuario = User::where('usuario', $request->usuario)->where('password', $request->password)->first();
        if ($usuario) {
            return response(
                [
                    'mensaje' => 'Usuario Validado correctamente',
                    'usuario' => $usuario
                ]);
        } else {
            return response([
                'mensaje' => 'Usuario o clave Incorrectos'
            ]);
        }
    }



}
