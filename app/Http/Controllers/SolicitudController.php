<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function index(){
        $solicitud = Solicitud::where("user_id",auth()->user()->id)->get();
        return view("Acciones.Profesor.Solicitud",compact("solicitud"));
    }

    public function adsoli(){
        $solicitud = Solicitud::all();
        return view("Acciones.Adminstrador.Solicitudes",compact("solicitud"));
    }
    public function update(Request $request){
        $id = $request->uid;
        $solicitud = Solicitud::where("user_id", $id)->first();
        $acp = "Aceptado";
        $solicitud->update([
            'estado' => $acp,
        ]);

        return back();
    }
    public function realizar(){
        return view("Acciones.Profesor.RealizarSolicitud");
    }

    public function store(Request $request){
        Solicitud::create([
            "tipo" => $request->tipo,
            "motivo" => $request->razon,
            "user_id" => $request->user()->id
        ]);
        return back()->with("success","Solictud enviada");
    }
}
