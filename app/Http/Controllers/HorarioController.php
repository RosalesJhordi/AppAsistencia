<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index(){
        return view("Acciones.Adminstrador.EdiatHorario");
    }
    public function us(){
        $horario = Horario::where("user_id", auth()->user()->id)->first();
        return view("Acciones.Profesor.Horario",compact("horario"));
    }
    public function store(Request $request){
        $dni = $request->DNI;
        $user = User::where("dni", $dni)->first();
        Horario::create([
            'dia1' => $request->dia1,
            'entrada1' => $request->entrada1,
            'salida1' => $request->salida1,
            'dia2' => $request->dia2,
            'entrada2' => $request->entrada2,
            'salida2' => $request->salida2,
            'user_id' => $user->id
        ]);

        return view("Acciones.Adminstrador.Agregar");
    }
}
