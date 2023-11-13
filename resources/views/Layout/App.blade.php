<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rosales - @yield('titulo')</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
</head>
<body class="flex justify-between">
    <aside style="width: 15%;" class="h-screen bg-gray-900"> 
        <img src="{{asset('img/Logo-modified.png')}}" alt="Logo" class="py-5 w-80">
        <div class="flex flex-col text-white mt-20 gap-10 relative" style="height: 80vh;">
            <div class="px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 flex justify-between items-center font-bold text-xl">
                <i class="fa-solid fa-bars-progress"></i>
                <a href="">Seguimiento</a>
            </div>
            <div class="px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 flex justify-between items-center font-bold text-xl">
                <i class="fa-solid fa-user-plus"></i>
                <a href="">Agregar</a>
            </div>
            <div class="px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 flex justify-between items-center font-bold text-xl">
                <i class="fa-solid fa-trash"></i>
                <a href="">Eliminar</a>
            </div>
            <div class="px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 flex justify-between items-center font-bold text-xl">
                <i class="fa-solid fa-calendar"></i>
                <a href="">Establecer Horario</a>
            </div>
            <div class="px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 flex justify-between items-center font-bold text-xl">
                <i class="fa-solid fa-users"></i>
                <a href="">Personal</a>
            </div>
            <div class="flex justify-between items-center absolute w-full bottom-0 px-5 p-2 border-l-8 cursor-pointer border-orange-600 hover:bg-orange-600 font-bold text-xl">
                <i class="fa-solid fa-power-off"></i>
                <a href="">Cerrar sesion</a>
            </div>
        </div>
    </aside>
    <main style="width: 85%;">
        @yield('contenido')
    </main>
</body>
</html>