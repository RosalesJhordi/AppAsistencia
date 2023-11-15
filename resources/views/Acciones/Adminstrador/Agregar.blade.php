@extends('Layout.App')

@section('titulo')
Agregar
@endsection

@section('contenido')
<div class="w-full px-10 mt-10 flex justify-center">
    <form action="{{route('Agregar')}}" method="POST" class="py-5 shadow-md flex-col border w-1/3 justify-center items-center p-2 flex gap-10 flex-wrap">
        @csrf
        <h1 class="text-xl font-semibold">Agregar Personal</h1>
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
        <button type="submit" class="bg-blue-500 w-1/2 rounded-md p-2 text-white">Agregar</button>
    </form>
    <div class="w-1/3 border shadow-md">
        <form action="{{route('Horario.post')}}" method="POST" class="w-full h-full  py-5 flex-col border items-center p-2 flex gap-10 flex-wrap">
            @csrf
            <h1 class="text-xl font-semibold">Establecer Horario</h1>
            <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
                <i class="fa-solid fa-at text-gray-400"></i>
                <input type="text" name="DNI" id="DNI" placeholder="DNI" class="h-full outline-none w-96">
            </div>
            <div class="flex flex-col justify-center w-full px-10">
                <div class="w-full h-20">
                    <h1 class="px-1 text-lg font-semibold">Clase 1</h1>
                    <input type="text" name="dia1" id="dia1" class="border p-1 w-full border-blue-700 focus-within:ring-1 focus-within:ring-blue-500" placeholder="Lunes - Viernes">
                    <div class="flex gap-5">
                        <div class="border mt-2 border-blue-700 w-full rounded-sm  p-1 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
                            Hora Entrada
                            <input type="time" name="entrada1" id="entrada1" class="h-full outline-none">
                        </div>
                        <div class="border mt-2 border-blue-700 w-full rounded-sm  p-1 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
                            Hora Salida
                            <input type="time" name="salida1" id="salida1" class="h-full outline-none">
                        </div>
                    </div>
                </div>

                <div class="w-full h-20 mt-10">
                    <h1 class="px-1 text-lg font-semibold">Clase 2</h1>
                    <input type="text" name="dia2" id="dia2" class="border p-1 w-full border-blue-700 focus-within:ring-1 focus-within:ring-blue-500" placeholder="Lunes - Viernes">
                    <div class="flex gap-5">
                        <div class="border mt-2 border-blue-700 w-full rounded-sm  p-1 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
                            Hora Entrada
                            <input type="time" name="entrada2" id="entrada2" class="h-full outline-none">
                        </div>
                        <div class="border mt-2 border-blue-700 w-full rounded-sm  p-1 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
                            Hora Salida
                            <input type="time" name="salida2" id="salida2" class="h-full outline-none">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="w-1/2 bg-blue-600 text-white p-2 rounded-md">Establecer</button>
        </form>
    </div>
</div>

@endsection