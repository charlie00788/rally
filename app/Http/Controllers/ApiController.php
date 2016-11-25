<?php

namespace App\Http\Controllers;

use App\Entities\Data;
use App\Entities\Place;
use App\Entities\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function getLogin($user, $pass)
    {
        $usuario = User::where('nickname', $user)->first();
        if (!is_null($usuario)){
            $estado = Hash::check($pass, $usuario->password);
            if (!$estado){
                $respuesta = [
                    'error' => 'Contraseña incorrecta'
                ];
            } else {
                $user_id = $usuario->id;
                $datos = Data::where('user_id', $user_id)->first();
                $lugar = Place::find($datos->nquestion);
                $respuesta = [
                    'success' => 'Exitoso',
                    'lugar'   => $lugar->place
                ];
            }
        } else {
            $respuesta = [
                'error' => 'No existe el usuario'
            ];
        }

        $res[] = $respuesta;
        $resultado = ['respuesta' => $res];
        return $resultado;
    }
}
