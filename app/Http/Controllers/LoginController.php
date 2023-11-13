<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function actualizacion()
    {
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
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }
}
