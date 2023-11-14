@extends('Layout.App')

@section('titulo')
Personal
@endsection

@section('contenido')
<table class="px-5 mt-10 w-full">
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
                    <form action="" method="POST" class="flex gap-5 justify-center items-center">
                        @csrf
                        <input type="hidden" name="id" value="{{$p->id}}">
                        <button type="submit"><i class="fa-solid fa-trash text-red-500"></i></button>
                        <a href=""><i class="fa-solid fa-pen text-green-500"></i></a>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection