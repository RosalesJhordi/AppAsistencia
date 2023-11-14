var map = L.map('map').setView([0, 0], 18);

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

// Ubicación del usuario
navigator.geolocation.getCurrentPosition(function (position) {
    const userLatlng = [position.coords.latitude, position.coords.longitude];

    // Marcador para la ubicación del usuario
    const userMarker = L.marker(userLatlng, { draggable: true }).addTo(map)
        .bindPopup('Latitud: ' + userLatlng[0] + '<br> Longitud: ' + userLatlng[1])
        .openPopup();

    // Arrastrar pin y actuzalizar ubi
    userMarker.on('dragend', function (event) {
        const marker = event.target;
        const latlng = marker.getLatLng();
        document.getElementById("longitud").value = latlng.lat;
        document.getElementById("latitud").value = latlng.lng;

        // Verificar si esta dentro del rango
        const isInsideCircle = circle.getBounds().contains(latlng);
        if(isInsideCircle){
            const succ = "Estas en el rango"
            document.getElementById("veri").value = succ;
        }else{
            const error = "No estas en el rango"
            document.getElementById("veri").value = error;
        }
    });

    // Imagen que saldrá en el pin
    const buildingIcon = L.icon({
        iconUrl: 'img/pin.png',
        iconSize: [5, 5],
    });

    // Agregar marcador para Senati
    L.marker(buildingLatLng, { icon: buildingIcon }).addTo(map)
        .bindPopup('Senati<br> Latitud: ' + buildingLatLng[0] + '<br> Longitud: ' + buildingLatLng[1]).openPopup();

    // Centrar mapa en el pin
    map.setView(userLatlng, 18);

    // Inicializar los valores del formulario
    document.getElementById("longitud").value = userLatlng[0];
    document.getElementById("latitud").value = userLatlng[1];
});