@extends('Layout.App')

@section('titulo')
    Home
@endsection

@section('contenido')
<header class="w-full p-2 px-5">
    <h1 class="text-xl">Hola: {{ auth()->user()->name }}</h1>
</header>
<div class="w-full">
    <div id="map"></div>
</div>
@endsection