//Código JavaScript para utilizar la librería Leaflet y mostrar un mapa del mundo
document.addEventListener('DOMContentLoaded', function () {

    //Esto inicializa el mapa en coordenadas
    var mapaSesion = L.map('mapa').setView([20, 0], 2);

    //Aquí se cargan las capas del mapa usando OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(mapaSesion);

    // Variables de botón e input de búsqueda 
    const botonDeBusqueda = document.getElementById('boton_busqueda');
    const inputDeBusqueda = document.getElementById('busqueda');

    //Evento al hacer clic en el botón de búsqueda
    botonDeBusqueda.addEventListener('click', function () {
        const query = inputDeBusqueda.value.trim();
        if (!query) return;
        //Acá se llama a la API de Nominatim y se busca la dirección ingresada
        fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                if (data && data.length > 0) {
                    const latitud = parseFloat(data[0].lat);
                    const longitud = parseFloat(data[0].lon);
                    mapaSesion.setView([latitud, longitud], 13);
                    L.marker([latitud, longitud]).addTo(mapaSesion);
                }
                else {
                    alert('No se encontró la ubicación.');
                }
            });
    });

    inputDeBusqueda.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            botonDeBusqueda.click();
        }
    });

    mapaSesion.on('click', function (e) {
        var latitud2 = e.latlng.lat;
        var longitud2 = e.latlng.lng;

        //Llama a Nominatim para obtener una descripción textual de esas coordenadas
        fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`)
            .then(response => response.json())
            .then(data => {
                const ubicacionTexto = data.display_name || 'Ubicación desconocida';
                //Llama a la API de Wikipedia y se obtiene una imagen relacionada con esa ubicación
                fetch(`https://en.wikipedia.org/w/api.php?action=query&format=json&origin=*&prop=pageimages&piprop=original&generator=geosearch&ggscoord=${lat}|${lon}&ggsradius=10000&ggslimit=1`)
                    .then(response => response.json())
                    .then(dataWiki => {
                        const paginas = dataWiki.query?.pages;
                        if (paginas) {
                            const pagina = Object.values(paginas)[0];
                            const urlImagen = pagina.original?.source;
                            const titulo = pagina.title;
                            //Crea un popup con el título, dirección textual e imagen
                            L.popup()
                                .setLatLng([latitud2, longitud2])
                                .setContent(`
                                    <strong>${titulo}</strong><br>
                                    <em>${ubicacionTexto}</em><br>
                                    <img src="${urlImagen}" alt="${titulo}" style="width:100%; max-height:200px;">
                                `)
                                .openOn(mapaSesion);
                        }
                        else {
                            L.popup()
                                .setLatLng([latitud2, longitud2])
                                .setContent(`<strong>Ubicación:</strong><br>${ubicacionTexto}`)
                                .openOn(mapaSesion);
                        }
                    })
                    .catch(() => {
                        L.popup()
                            .setLatLng([latitud2, longitud2])
                            .setContent(`<strong>Ubicación:</strong><br>${ubicacionTexto}<br><em>(No se pudo cargar imagen)</em>`)
                            .openOn(mapaSesion);
                    });
            })
            .catch(() => {
                L.popup()
                    .setLatLng([latitud2, longitud2])
                    .setContent(`No se pudo obtener información del lugar.`)
                    .openOn(mapaSesion);
            });
    });
});
