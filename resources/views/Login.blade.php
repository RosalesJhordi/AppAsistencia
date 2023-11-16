<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rosales - Login</title>
    @vite('resources/css/app.css')
    @vite('resources/css/media.css')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
</head>
<body class="w-full h-screen flex justify-center items-center relative" style="background-repeat: no-repeat; background-position: center; background-size: cover; background-image: url({{asset('img/Fondo.jpg')}});">
    <form action="{{ route('Login') }}" method="POST" class="w-1/4 flex gap-5 flex-col p-2 relative form-login" style="height: 70vh; background: rgb(255, 255, 255);">
        @csrf
        <div class="w-full flex justify-center items-center py-10">
            <img src="{{asset('img/Logo.png')}}" alt="Logo Rosales" class="w-60 h-20 logo">
        </div>
        <div class="w-full flex justify-center items-center text-center">
            <p class="w-96 bg-orange-600 p-2 text-white text-base">Ultima actualizacion {{$resultado}}</p>
        </div>
        <div class="w-full h-auto flex justify-center items-center flex-col gap-2">
            <div class="border border-blue-700 w-96 rounded-sm  p-2 flex items-center justify-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
                <i class="fa-solid fa-at text-gray-400"></i>
                <input type="email" name="email" id="email" placeholder="Email" class="h-full outline-none w-96">
            </div>
            @error('email')
                <p class="bg-red-500 text-white rounded-sm text-sm p-2 text-center w-96">{{ $message }}</p>
            @enderror
            <div class="border mt-5 border-blue-700 rounded-sm w-96 p-2 flex justify-center items-center gap-2 focus-within:ring-1 focus-within:ring-blue-500">
                <i class="fa-solid fa-lock text-gray-400"></i>
                <input type="password" name="password" id="password" placeholder="Contraseña" class="h-full outline-none w-96">
            </div>
            @error('password')
                <p class="bg-red-500 text-white rounded-sm text-sm p-2 text-center w-96">{{ $message }}</p>
            @enderror
            <button type="submit" class="w-1/2 mt-10 bg-blue-600 p-2 text-white rounded-sm">Login</button>
            <p class="mt-5 text-black font-semibold text-lg">Olvidaste tu contraseña?<a href="{{route('Restablecer')}}" class="font-bold text-blue-600"> Restablecer</a></p>
        </div>
        <div class="absolute bottom-0 right-2 left-2 flex justify-center items-center py-2 gap-5 border-t border-gray-300 w-auto text-2xl">
            <a href="">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-facebook text-blue-600"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-linkedin text-sky-500"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-x-twitter"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-instagram text-orange-500"></i>
            </a>
        </div>
    </form>
</body>
</html>