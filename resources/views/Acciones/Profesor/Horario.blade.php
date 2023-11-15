@extends('Layout.App')

@section('titulo')
Horario
@endsection

@section('contenido')
<div class=" w-full flex justify-center items-center">
<table class="px-5 mt-5 w-1/2">
    <thead class="bg-blue-500">
        <tr>
            <th class="border border-white text-white p-2">DIA</th>
            <th class="border border-white text-white p-2">HORA ENTRADA</th>
            <th class="border border-white text-white p-2">HORA SALIDA</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <tr class="bg-gray-200">
            <td class="border border-white p-2">{{ $horario->dia1 }}</td>
            <td class="border border-white p-2">{{ $horario->entrada1 }}</td>
            <td class="border border-white p-2">{{ $horario->salida1 }}</td>
        </tr>
        <tr class="bg-gray-200">
            <td class="border border-white p-2">{{ $horario->dia2 }}</td>
            <td class="border border-white p-2">{{ $horario->entrada2 }}</td>
            <td class="border border-white p-2">{{ $horario->salida2}}</td>
        </tr>
    </tbody>
</table>
</div>
@endsection