<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgregarController extends Controller
{
    public function index(){
        return view("Acciones.Adminstrador.Agregar");
    }
    public function store(Request $request){
        User::create([
            "name"=> $request->name,
            "apellido"=> $request->apellido,
            "dni"=> $request->dni,
            "telefono"=> $request->telefono,
            "email"=> $request->email,
            "password"=> Hash::make($request->password),
        ]);

        return back();
    }

    public function edit($id){
        $user = User::find($id);
        return view("Acciones.Adminstrador.Editar", compact("user"));
    }
}
