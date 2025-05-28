//Creación de variables para mostrar los viajes del usuario
const editar = document.querySelectorAll('.botonEditar');
const eliminar = document.querySelectorAll('.botonEliminar');

//Evento para el manejo del borrado de viajes
eliminar.forEach(boton => {
    boton.addEventListener('click', function (event) {
        event.preventDefault();

        const confirmar = confirm('¿Estás seguro/a de que quieres borrar este viaje?');

        if (confirmar) {
            const form = boton.closest('form');
            const url = form.getAttribute('action');
            const formData = new FormData(form);

            //Se envía la solicitud POST mediante fetch
            fetch(url, {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => {
                //Si la respuesta incluye redirección, pues se redirige automáticamente
                if (response.redirected) {
                    window.location.href = response.url;
                } else {
                    alert('El viaje ha sido eliminado.');
                    window.location.reload();
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });
});

//Evento para el manejo de la edición de viajes
editar.forEach(boton => {
    boton.addEventListener('click', function () {
        const id = this.dataset.id;
        window.location.href = `/editar-viaje/${id}`;
    });
});
