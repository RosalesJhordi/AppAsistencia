<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class ObservacionesController extends Controller
{
    public function index(){

        $observacion = Horario::where("estado","No Asistio")->get();
        return view("Acciones.Adminstrador.Observacion",compact("observacion"));
    }
}
