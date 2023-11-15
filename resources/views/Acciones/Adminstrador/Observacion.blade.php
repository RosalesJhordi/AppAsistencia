@extends('Layout.App')

@section('titulo')
Observaciones
@endsection

@section('contenido')
<div class="w-1/2 px-5" id="info">
    <div class="px-5 mr-5 h-14 bg-yellow-500 relative flex rounded-md justify-center items-center gap-5 font-semibold text-lg text-white">
        <i class="fa-solid fa-circle-question text-white text-4xl"></i>
        Aqui se mostraran los dias que falto o llego tarde
        <i class="fa-solid fa-x absolute right-1 top-1 p-2 px-2.5 text-red-600 cursor-pointer bg-white rounded-full" id="close_info"></i>
    </div>
</div>
<div class="px-5 w-full">
    @foreach ($observacion as $us)
        <div class="border p-2 w-80 mt-10 shadow-md">
            <h1>{{$us->dia1}} {{$us->usuario->name}} {{$us->estado}}</h1>
        </div>
    @endforeach 
</div>
@endsection