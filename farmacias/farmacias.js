function initMap() {
    const map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 40.7128, lng: -74.0060 }, // Coordenadas de Nueva York por defecto
        zoom: 12
    });

    const searchInput = document.getElementById('searchInput');
    const searchBox = new google.maps.places.SearchBox(searchInput);

    map.addListener('bounds_changed', function () {
        searchBox.setBounds(map.getBounds());
    });

    let markers = [];

    searchBox.addListener('places_changed', function () {
        const places = searchBox.getPlaces();

        if (places.length === 0) {
            return;
        }

        // Limpiar marcadores anteriores
        markers.forEach(function (marker) {
            marker.setMap(null);
        });
        markers = [];

        // Por cada lugar, añadir un marcador
        places.forEach(function (place) {
            if (!place.geometry) {
                console.log("El lugar devuelto no tiene geometría");
                return;
            }

            markers.push(new google.maps.Marker({
                map: map,
                title: place.name,
                position: place.geometry.location
            }));

            map.panTo(place.geometry.location);
        });
    });
}