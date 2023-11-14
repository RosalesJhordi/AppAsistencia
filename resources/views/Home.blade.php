@extends('Layout.App')

@section('titulo')
    Home
@endsection

@section('contenido')
<div class="flex px-5">
   <div id="map" class="w-1/2" style="height: 70vh;"></div>
    <form action="" class="w/2 flex flex-col">
        <input type="text" name="latitud" id="latitud" readonly class="border">
        <input type="text" name="longitud" id="longitud" readonly class="border">
        <input type="text" id="veri" placeholder="Dentro del rango" class="border"> 
    </form>
</div>
@endsection