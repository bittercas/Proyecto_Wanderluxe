const editar = document.querySelectorAll('.botonEditar');
const eliminar = document.querySelectorAll('.botonEliminar');

eliminar.forEach(boton => {
    boton.addEventListener('click', function (event) {
        event.preventDefault();

        const confirmar = confirm('¿Estás seguro/a de que quieres borrar este viaje?');

        if (confirmar) {
            const form = boton.closest('form');
            const url = form.getAttribute('action');
            const formData = new FormData(form);

            fetch(url, {
                method: "POST", // Laravel requiere POST + _method=DELETE
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => {
                if (response.redirected) {
                    // Si el backend redirige, seguimos la redirección
                    window.location.href = response.url;
                } else {
                    // Si no hay redirección, recargamos igual por seguridad
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

editar.forEach(boton => {
    boton.addEventListener('click', function () {
        const id = this.dataset.id;
        window.location.href = `/editar-viaje/${id}`;
    });
});