<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            $user->update([
                'latitud' => $lati,
                'longitud' => $long
            ]);
            if($request->veri == "Estas en el rango"){
                return back()->with('success','Dentro del rango');
            }else{
                return back()->with('mensaje','Fuera del rango');
            } 
        }
        
    }
}
