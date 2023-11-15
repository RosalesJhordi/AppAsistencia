<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RestablecerController extends Controller
{
    public function index(){
        return view("Restablecer");
    }

    public function store(Request $request){
        $email = $request->email;
        $user = User::where("email", $email)->first();
        $user->update([
            "password"=> Hash::make($request->password),
        ]);
        $directorio_git = 'C:\Asistencia\AppAsistencia';
        chdir($directorio_git);
        $timestamp_ultimo_commit = strtotime(shell_exec('git log -1 --format=%cd'));
        $ultimo_commit = Carbon::createFromTimestamp($timestamp_ultimo_commit);
        $resultado = $ultimo_commit->isToday()
            ? 'hoy'
            : ($ultimo_commit->isYesterday()
                ? 'ayer'
                : $ultimo_commit->format('d/m/Y H:i:s'));


        return view('Login',compact('resultado'));
    }
}
