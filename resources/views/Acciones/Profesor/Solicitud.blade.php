@extends('Layout.App')

@section('titulo')
Solicitud
@endsection

@section('contenido')
<div class="w-full px-5 flex gap-10 flex-wrap conte-sols">
    @foreach ($solicitud as $soli)
        <div class="w-80 h-32 flex justify-center flex-col border p-2 sols">
            <h1 class="font-semibold p-1 flex justify-between">{{$soli->tipo}} <span class="text-green-500 font-medium">{{$soli->created_at->diffForHumans()}}</span> </h1>
            <p class="p-1 flex-wrap">{{$soli->motivo}}</p>
            @if ($soli->estado=="Aceptado")
                <span class="p-1 text-green-500 font-semibold">Aceptado</span>
            @else
                <span class="p-1 text-red-500 font-semibold">Aun No hay respuesta</span>
            @endif
        </div>
    @endforeach
</div>
@endsection