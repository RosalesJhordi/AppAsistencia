<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Horario;
use Illuminate\Http\Request;

class MarcarController extends Controller
{
    public function store(Request $request){
        if(auth()->user()->email == "1428060@senati.pe"){
            $dni = $request->dni_p;
            $user = User::where('dni', $dni)->first();
            return view('Home',compact('user'));
        }else{
            $lati = $request->latitud;
            $long = $request->longitud;
            $user = User::find(auth()->user()->id);
            $hr = Horario::where("user_id", $user->id)->first();
            if($request->veri == "Estas en el rango"){
                $user->update([
                    'latitud' => $lati,
                    'longitud' => $long
                ]);
                $asis = "Asistio";
                $hr->update([
                    'estado' => $asis
                ]);
                return redirect()->route('Home')->with('success', 'Dentro del rango, Asistencia marcada');
            }else{
                return redirect()->route('Home')->with('mensaje', 'Fuera del rango');
            } 
        }
    }
}
