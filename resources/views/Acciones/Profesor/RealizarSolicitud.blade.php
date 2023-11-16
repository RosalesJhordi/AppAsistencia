@extends('Layout.App')

@section('titulo')
Solicitud
@endsection

@section('contenido')
<div class="flex w-full justify-center items-center realizar">
    <form action="{{route('Solicitud.post')}}" method="POST" class="w-1/3 realizar-form h-1/2 border shadow-md flex justify-center flex-col p-2 items-center">
        @csrf
        @if(session('success'))
            <p class="bg-green-500 text-white w-full my-2 rounded-sm text-sm p-2 text-center">{{ session('success') }}</p>
        @endif
        <h1 class="text-2xl font-semibold py-5">Realizar Solicitud</h1>
        <div class="border mt-2 border-blue-700 w-96 rounded-sm  p-1 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <select id="tipo" name="tipo" class="w-full p-1 cursor-pointer outline-none" value="{{ old('tipo') }}">
                <option disabled selected class="text-gray-400">Selecciona una opcion</option>
                <option value="Cambio de Horario">Cambio de Horario</option>
            </select>
        </div>
        <div class="border mt-2 border-blue-700 w-96 h-20 rounded-sm  p-1 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
            <textarea name="razon" id="razon" placeholder="Explica Motivo" class="w-full h-full outline-none"></textarea> 
        </div>   
        
        <button type="submit" class="w-1/2 bg-green-500 text-white font-semibold p-1 rounded-sm mt-5">
            Realizar
        </button>
    </form>
</div>
@endsection