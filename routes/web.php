<?php

use App\Http\Controllers\SolicitudController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\MarcarController;
use App\Http\Controllers\AgregarController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ObservacionesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Rutas Login
Route::get('/',[LoginController::class,'actualizacion']);
Route::post('Login',[LoginController::class,'login'])->name('Login');
Route::get('Home',[LoginController::class,'index'])->name('Home');

//Cerrar sesion
Route::post('LogOut',[LogOutController::class,'logout'])->name('LogOut');
//Rutas Administrador

Route::get('Agregar',[AgregarController::class,'index'])->name('Agregar');
Route::post('Agregar',[AgregarController::class,'store']);


//Personal

Route::get('Personal',[PersonalController::class,'index'])->name('Personal');

//Eliminar Personal
Route::post('Delete',[PersonalController::class,'delete'])->name('Delete');


//Observaciones
Route::get('Observaciones',[ObservacionesController::class,'index'])->name('Observaciones');

//Editar Horario
Route::get('EditarHorario',[HorarioController::class,'index'])->name('EditarHorario');

Route::post('Horario',[HorarioController::class,'store'])->name('Horario.post');

//Horario User

Route::get('Horario',[HorarioController::class,'us'])->name('Horario');

//Marcar
Route::post('Marcar',[MarcarController::class,'store'])->name('Marcar');
Route::get('Solicitud',[SolicitudController::class,'index'])->name('Solictud');
Route::get('Realizar',[SolicitudController::class,'realizar'])->name('Solicitud.realizar');
Route::post('Realizar',[SolicitudController::class,'store'])->name('Solicitud.post');
Route::get('Solicitudes',[SolicitudController::class,'adsoli'])->name('Soli.Admin');
Route::post('Aceptar',[SolicitudController::class,'update'])->name('Aceptar');
Route::get('Editar/{id}',[AgregarController::class,'edit'])->name('Editar');
// Route::get('Solicitud',[SolicitudController::class,'realizar'])->name('Solictud.realizar');