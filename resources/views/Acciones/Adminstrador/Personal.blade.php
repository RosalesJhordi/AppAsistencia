@extends('Layout.App')

@section('titulo')
Personal
@endsection

@section('contenido')
<div class="w-1/2 px-5" id="info">
    <div class="px-5 mr-5 h-14 bg-yellow-500 relative flex rounded-md justify-center items-center gap-5 font-semibold text-lg text-white">
        <i class="fa-solid fa-circle-question text-white text-4xl"></i>
        Aqui se mostraran todo el personal y usted puede eliminar o editar
        <i class="fa-solid fa-x absolute right-1 top-1 p-2 px-2.5 text-red-600 cursor-pointer bg-white rounded-full" id="close_info"></i>
    </div>
</div>


<div class="w-full flex justify-center">
    @if(session('success'))
        <p class="bg-green-500 text-white w-1/2 rounded-sm text-sm p-2 text-center">{{ session('success') }}</p>
    @endif
</div>

<table class="px-5 mt-5 w-full">
    <thead class="bg-blue-500">
        <tr>
            <th class="border border-white text-white p-2">Nombre</th>
            <th class="border border-white text-white p-2">Apellido</th>
            <th class="border border-white text-white p-2">DNI</th>
            <th class="border border-white text-white p-2">Telefono</th>
            <th class="border border-white text-white p-2">Email</th>
            <th class="border border-white text-white p-2">Fecha de ingreso</th>
            <th class="border border-white text-white p-2"></th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($personal as $p)
            <tr class="bg-gray-200">
                <td class="border border-white p-2">{{ $p->name }}</td>
                <td class="border border-white p-2">{{ $p->apellido }}</td>
                <td class="border border-white p-2">{{ $p->dni }}</td>
                <td class="border border-white p-2">{{ $p->telefono }}</td>
                <td class="border border-white p-2">{{ $p->email }}</td>
                <td class="border border-white p-2">{{ $p->created_at->diffForHumans() }}</td>
                <td class="border border-white p-2 text-xl">
                    <form action="{{ route('Delete') }}" method="POST" class="flex gap-5 justify-center items-center">
                        @csrf
                        <input type="hidden" name="id" value="{{$p->id}}">
                        <button type="submit"><i class="fa-solid fa-trash text-red-500"></i></button>
                        <a href="{{route('Editar',$p->id)}}"><i class="fa-solid fa-pen text-green-500"></i></a>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection