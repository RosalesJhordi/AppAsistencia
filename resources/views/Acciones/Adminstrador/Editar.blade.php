@extends('Layout.App')

@section('titulo')
Editar
@endsection

@section('contenido')
<div class="flex justify-center items-center edit-form">
    <form action="{{route('Agregar')}}" method="POST" class="py-5 form shadow-md flex-col border w-1/3 justify-center items-center p-2 flex gap-10 flex-wrap">
        @csrf
        <h1 class="text-xl font-semibold">Editar Personal</h1>
        <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <i class="fa-solid fa-at text-gray-400"></i>
            <input type="text" name="name" id="name" placeholder="Nombres" value="{{$user->name}}" class="h-full outline-none w-96">
        </div>
        <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <i class="fa-solid fa-at text-gray-400"></i>
            <input type="text" name="apellido" id="apellido" placeholder="Apellidos" value="{{$user->apellido}}" class="h-full outline-none w-96">
        </div>
        <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <i class="fa-solid fa-at text-gray-400"></i>
            <input type="text" name="dni" id="dni" placeholder="DNI" value="{{$user->dni}}" class="h-full outline-none w-96">
        </div>
        <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <i class="fa-solid fa-at text-gray-400"></i>
            <input type="text" name="telefono" id="telefono" placeholder="Telefono" value="{{$user->telefono}}" class="h-full outline-none w-96">
        </div>
        <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <i class="fa-solid fa-at text-gray-400"></i>
            <input type="email" name="email" id="email" placeholder="Email" value="{{$user->email}}" class="h-full outline-none w-96">
        </div>
        <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <i class="fa-solid fa-at text-gray-400"></i>
            <input type="password" name="password" id="password" placeholder="Contraseña" class="h-full outline-none w-96">
        </div>
        <button type="submit" class="bg-blue-500 w-1/2 rounded-md p-2 text-white">Agregar</button>
    </form>
</div>
@endsection