<?php

use App\Http\Controllers\AgregarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;

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