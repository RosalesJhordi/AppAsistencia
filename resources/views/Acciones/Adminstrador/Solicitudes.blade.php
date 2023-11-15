@extends('Layout.App')

@section('titulo')
Solicitudes
@endsection

@section('contenido')
<div class="w-full px-10 flex gap-10 flex-wrap">
    @foreach ($solicitud as $soli)
        <div class="w-80 flex justify-center flex-col border p-5">
            <h1>Nombre: {{ $soli->usuario->name }}</h1>
            <h1 class="font-semibold p-1 flex justify-between">{{ $soli->tipo }} <span class="text-green-500 font-medium">{{ $soli->created_at->diffForHumans() }}</span> </h1>
            <p class="p-1 flex-wrap">{{ $soli->motivo }}</p>
            <form action="{{route('Aceptar')}}" method="POST">
                @csrf
                <input type="hidden" name="uid" value="{{$soli->user_id}}">
                <button type="submit" class="bg-green-500 p-1 w-1/3 text-white font-semibold rounded-md mt-2">Aceptar</button>
            </form>
        </div>
    @endforeach
</div>
@endsection
