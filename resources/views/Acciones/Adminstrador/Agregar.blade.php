@extends('Layout.App')

@section('titulo')
Agregar
@endsection

@section('contenido')
<div class="w-full px-10 mt-10">
    <form action="{{route('Agregar')}}" method="POST" class="w-1/2 flex gap-10 flex-wrap">
        @csrf
        <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <i class="fa-solid fa-at text-gray-400"></i>
            <input type="text" name="name" id="name" placeholder="Nombres" class="h-full outline-none w-96">
        </div>
        <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <i class="fa-solid fa-at text-gray-400"></i>
            <input type="text" name="apellido" id="apellido" placeholder="Apellidos" class="h-full outline-none w-96">
        </div>
        <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <i class="fa-solid fa-at text-gray-400"></i>
            <input type="text" name="dni" id="dni" placeholder="DNI" class="h-full outline-none w-96">
        </div>
        <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <i class="fa-solid fa-at text-gray-400"></i>
            <input type="text" name="telefono" id="telefono" placeholder="Telefono" class="h-full outline-none w-96">
        </div>
        <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <i class="fa-solid fa-at text-gray-400"></i>
            <input type="email" name="email" id="email" placeholder="Email" class="h-full outline-none w-96">
        </div>
        <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <i class="fa-solid fa-at text-gray-400"></i>
            <input type="password" name="password" id="password" placeholder="Contraseña" class="h-full outline-none w-96">
        </div>
        <button type="submit" class="bg-blue-500 p-2 text-white">Agregar</button>
    </form>
</div>

@endsection