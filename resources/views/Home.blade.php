@extends('Layout.App')

@section('titulo')
    Home
@endsection

@section('contenido')
<div class="w-full flex justify-center items-center gap-5" style="height: 70vh;">
    <div id="map" class="w-1/2" style="height: 70vh;"></div>
    <form action="{{route('Marcar')}}" method="POST" class="w-96 p-2 flex flex-col gap-2">
        @csrf
        @if(session('mensaje'))
            <p class="bg-red-500 text-white w-full my-2 rounded-sm text-sm p-2 text-center">{{ session('mensaje') }}</p>
        @endif
        @if(session('success'))
            <p class="bg-green-500 text-white w-full my-2 rounded-sm text-sm p-2 text-center">{{ session('success') }}</p>
        @endif
        <input type="text" name="latitud" id="latitud" readonly class="border-2 border-green-600 rounded-sm p-2">
        <input type="text" name="longitud" id="longitud" readonly class="border-2 border-green-600 rounded-sm p-2">
        <input type="text" id="veri" name="veri" readonly value="Entra al rango reuqerido para marcar tu asistencia">
        <button type="submit" class="bg-blue-500 p-2 text-white">Marcar Asistencia</button>
    </form>
</div>
@endsection