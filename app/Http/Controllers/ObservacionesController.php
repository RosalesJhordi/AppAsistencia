<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObservacionesController extends Controller
{
    public function index(){
        return view("Acciones.Adminstrador.Observacion");
    }
}
