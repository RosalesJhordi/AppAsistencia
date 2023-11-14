@extends('Layout.App')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

@section('titulo')
    Home
@endsection

@section('contenido')
<div class="w-full flex justify-center items-center gap-5" style="height: 70vh;">
    <div id="map" class="w-1/2" style="height: 70vh;"></div>
    <form action="{{route('Marcar')}}" method="POST" class="w-96 p-2 flex flex-col gap-2">
        @csrf
        @if(session('mensaje'))
            <p class="bg-red-500 text-white w-full my-2 rounded-sm text-sm p-2 text-center">{{ session('mensaje') }}</p>
        @endif
        @if(session('success'))
            <p class="bg-green-500 text-white w-full my-2 rounded-sm text-sm p-2 text-center">{{ session('success') }}</p>
        @endif
        @if(isset($user))
            <div class="flex justify-between">
                <p class="text-xl font-thin">Nombre: {{ $user->name }}</p>
                <a href="" class="bg-green-600 p-1 px-5 rounded-sm text-white">Estado: Puntual</a>
            </div>
            <a href="" class="bg-blue-500 p-2 text-white w-1/2 text-center text-sm rounded-sm">Horario de {{ $user->name }}</a>
            <a href="" class="bg-green-500 p-2 text-white w-1/2 text-center text-sm rounded-sm">Solicitudes de {{ $user->name }}</a>
        @else
            <p>Busca un usuario</p>
        @endif
        <input type="text" name="latitud" id="latitud" readonly placeholder="Aqui se mostrara latitud" class="border-2 border-green-600 rounded-sm p-2" {{ isset($user) ? 'value=' . $user->latitud : '' }}>
        <input type="text" name="longitud" id="longitud" readonly placeholder="Aqui se mostrara longitud" class="border-2 border-green-600 rounded-sm p-2" {{ isset($user) ? 'value=' . $user->longitud : '' }}>
        @if (auth()->user()->email == "1428060@senati.pe")
            <div class="flex justify-between border-2 border-blue-600 mt-10 rounded-sm p-2">
                <input type="text" name="dni_p" placeholder="Buscar por dni" class="w-96 h-full outline-none ">
                <button type="submit"><i class="fa-solid fa-magnifying-glass text-2xl"></i></button>
            </div>
        @else
            <input type="text" id="veri" name="veri" readonly value="Entra al rango reuqerido para marcar tu asistencia">
            <button type="submit" class="bg-blue-500 p-2 text-white">Marcar Asistencia</button>
        @endif
    </form>
</div>

@if (auth()->user()->email == "1428060@senati.pe")
<script>
    var map = L.map('map').setView([-9.9306, -76.2422], 14); // Ajustar el nivel de zoom y la ubicación inicial

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Definir el círculo azul
    const buildingLatLng = [-9.91744, -76.23109];
    const circle = L.circle(buildingLatLng, {
        color: 'blue',
        fillColor: 'skyblue',
        fillOpacity: 0.2,
        radius: 50
    }).addTo(map);

    // Imagen que saldrá en el pin
    const buildingIcon = L.icon({
        iconUrl: 'img/pin.png',
        iconSize: [5, 5],
    });

    // Agregar marcador para Senati
    L.marker(buildingLatLng, { icon: buildingIcon }).addTo(map)
        .bindPopup('Senati<br> Latitud: ' + buildingLatLng[0] + '<br> Longitud: ' + buildingLatLng[1]).openPopup();

    @if(isset($user))
        const ubicacion = [{{$user->latitud}}, {{$user->longitud}}];  // [latitud, longitud]
        L.marker(ubicacion).addTo(map)
        .bindPopup('Ubicación de {{$user->name}} <br> Latitud: ' + ubicacion[0] + '<br> Longitud: ' + ubicacion[1]).openPopup();
    @endif
    
</script>
@else
@vite('resources/js/mapa.js')
@endif

@endsection