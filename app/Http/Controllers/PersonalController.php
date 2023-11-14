<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        $personal = User::where("email","!=","1428060@senati.pe")->get();
        return view("Acciones.Adminstrador.Personal",compact("personal"));
    }
    public function delete(){
        $id = request("id");
        $user = User::find($id);
        $user->delete();
        return back()->with('success', 'Personal eliminado correctamente');
    }
}
