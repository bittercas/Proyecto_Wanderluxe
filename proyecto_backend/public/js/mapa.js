document.addEventListener('DOMContentLoaded', function () {
    // Inicializa el mapa centrado en el mundo
    var map = L.map('mapa').setView([20, 0], 2);

    // Añadir la capa base (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Agregar control de búsqueda con Nominatim
    L.Control.geocoder({
        defaultMarkGeocode: true
    }).addTo(map);

    // Evento al hacer clic en el mapa
    map.on('click', function (e) {
        var lat = e.latlng.lat;
        var lon = e.latlng.lng;

        // Obtener dirección textual con Nominatim
        fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`)
            .then(response => response.json())
            .then(data => {
                const ubicacionTexto = data.display_name || 'Ubicación desconocida';

                // Obtener imagen desde Wikipedia
                fetch(`https://en.wikipedia.org/w/api.php?action=query&format=json&origin=*&prop=pageimages&piprop=original&generator=geosearch&ggscoord=${lat}|${lon}&ggsradius=10000&ggslimit=1`)
                    .then(response => response.json())
                    .then(dataWiki => {
                        const pages = dataWiki.query?.pages;
                        if (pages) {
                            const page = Object.values(pages)[0];
                            const imgUrl = page.original?.source;
                            const title = page.title;

                            // Mostrar popup con imagen y ubicación
                            L.popup()
                                .setLatLng([lat, lon])
                                .setContent(`
                                    <strong>${title}</strong><br>
                                    <em>${ubicacionTexto}</em><br>
                                    <img src="${imgUrl}" alt="${title}" style="width:100%; max-height:200px;">
                                `)
                                .openOn(map);
                        } else {
                            // Solo mostrar la ubicación si no hay imagen
                            L.popup()
                                .setLatLng([lat, lon])
                                .setContent(`<strong>Ubicación:</strong><br>${ubicacionTexto}`)
                                .openOn(map);
                        }
                    })
                    .catch(() => {
                        L.popup()
                            .setLatLng([lat, lon])
                            .setContent(`<strong>Ubicación:</strong><br>${ubicacionTexto}<br><em>(No se pudo cargar imagen)</em>`)
                            .openOn(map);
                    });
            })
            .catch(() => {
                L.popup()
                    .setLatLng([lat, lon])
                    .setContent(`No se pudo obtener información del lugar.`)
                    .openOn(map);
            });
    });
});