<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcarController extends Controller
{
    public function store(Request $request){
        if($request->veri == "Estas en el rango"){
            return back()->with('success','Dentro del rango');
        }else{
            return back()->with('mensaje','Fuera del rango');
        }
    }
}
