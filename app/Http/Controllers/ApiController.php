<?php

namespace App\Http\Controllers;

use App\Entities\Answer;
use App\Entities\Data;
use App\Entities\Place;
use App\Entities\Question;
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

    public function getQuestion($numero)
    {
        $preguntas = Question::where('number', $numero)
            ->get();
        $num = $preguntas->count() - 1;
        $aleatorio = rand(0, $num);
        $respuestas = Answer::where('question_id', $numero)
            ->select('answer', 'ans')
            ->get();
        $respuesta = [
            'pregunta'  => $preguntas[$aleatorio]->question,
        ];

        foreach ($respuestas as $res){
            $respuesta[$res->answer] = $res->ans;
        }

        $devolver[] = $respuesta;
        $resultado = ['respuesta' => $devolver];
        return $resultado;
    }
}
