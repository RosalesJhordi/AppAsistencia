<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rosales - @yield('titulo')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/menu.js')
    @vite('resources/css/media.css')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

</head>
<body class="flex justify-between relative">
    <aside class="h-screen bg-gray-900 fixed aside" id="aside"> 
        <i class="fa-solid fa-x text-red-500 text-2xl float-right p-2" id="close-menu"></i>
        <center>
           <img src="{{asset('img/Logo-modified.png')}}" alt="Logo" class="py-5 w-80"> 
        </center>
        <div class="flex flex-col text-white mt-20 gap-10 relative opciones" style="height: 80vh;">
            @if (auth()->user()->email == "1428060@senati.pe")
                <a href="{{ route('Home') }}"><div class="px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 flex justify-between items-center font-bold text-xl ops">
                    <i class="fa-solid fa-bars-progress"></i>
                    Seguimiento
                </div></a>
                <a href="{{ route('Agregar') }}"><div class="px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 flex justify-between items-center font-bold text-xl ops">
                    <i class="fa-solid fa-user-plus"></i>
                    Agregar
                </div></a>
                <a href="{{route('EditarHorario')}}"><div class="px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 flex justify-between items-center font-bold text-xl ops">
                    <i class="fa-solid fa-calendar"></i>
                    Editar Horario
                </div></a>
                <a href="{{route('Personal')}}"><div class="px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 flex justify-between items-center font-bold text-xl ops">
                    <i class="fa-solid fa-users"></i>
                    Personal
                </div></a>
            @else
                <a href="{{route('Home')}}"><div class="px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 flex justify-between items-center font-bold text-xl ops">
                    <i class="fa-solid fa-calendar"></i>
                    Marcar Asistencia
                </div></a>
                <a href="{{route('Horario')}}"><div class="px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 flex justify-between items-center font-bold text-xl ops">
                    <i class="fa-regular fa-calendar-days"></i>
                    Horario
                </div></a>
                <a href="{{route('Solictud')}}"><div class="px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 flex justify-between items-center font-bold text-xl ops">
                    <i class="fa-solid fa-list"></i>
                    Estado de Solicitud
                </div></a>
            @endif
                <a href="">
                <form action="{{ route('LogOut') }}" method="POST">
                    @csrf          
                    <div id="logout" class="flex justify-between items-center absolute w-full bottom-0 px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 font-bold text-xl ops">
                        <button type="submit" class="w-full flex justify-between items-center">
                            <i class="fa-solid fa-power-off"></i>
                            Cerrar sesión
                        </button>
                    </div>
                </form></a>
        </div>
    </aside>
    <main class="absolute right-0 main">
        <h1 class="px-5 py-5 text-xl font-medium flex justify-between">
            <span class="flex justify-center items-center gap-5">
                <i class="fa-solid fa-bars" id="menu"></i>
                @yield('titulo')   
            </span>
            <span>Hola: {{ auth()->user()->name }}</span>
        </h1>
        
        <div class="w-full h-auto flex gap-5 my-5 px-5 pb-5 border-b-2 border-gray-200 conte-dash">
            @if (auth()->user()->email == "1428060@senati.pe")
            <a href="{{route('Personal')}}" class="hover:scale-105">
                <div class="w-80 dash h-32 bg-green-600 flex rounded-md justify-center items-center gap-5 font-bold text-xl text-white">
                    <div class="i p-2 text-4xl rounded-full w-16 h-16 bg-white text-black flex justify-center items-center">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    Personal
                </div>
            </a>
            <a href="{{route('Observaciones')}}" class="hover:scale-105">
                <div class="dash w-80 h-32 bg-orange-600 flex rounded-md justify-center items-center gap-5 font-bold text-xl text-white">
                    <div class="p-2 i text-4xl rounded-full w-16 h-16 bg-white text-red-600 flex justify-center items-center">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    En Observacion
                </div>
            </a>
            <a href="{{route('Soli.Admin')}}" class="hover:scale-105">
                <div class=" dash w-80 h-32 bg-blue-600 flex rounded-md justify-center items-center gap-5 font-bold text-xl text-white">
                    <div class="p-2 i text-4xl rounded-full w-16 h-16 bg-white text-black flex justify-center items-center">
                        <i class="fa-solid fa-rotate-right"></i>
                    </div>
                    Solicitud de Cambios
                </div>
            </a>
            @else
            <a href="{{route('Solicitud.realizar')}}" class="hover:scale-105">
                <div class="w-80 dash h-32 bg-blue-600 flex rounded-md justify-center items-center gap-5 font-bold text-xl text-white">
                    <div class="p-2 i text-4xl rounded-full w-16 h-16 bg-white text-black flex justify-center items-center">
                        <i class="fa-solid fa-rotate-right"></i>
                    </div>
                    Realizar Solicitud
                </div>
            </a>
            @endif
        </div>
        
        @yield('contenido')
    </main>
</body>
</html>