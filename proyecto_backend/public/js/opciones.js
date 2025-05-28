// Creación de variable del botón del DOM
const acceder = document.querySelectorAll('.boton');


//Función para acceder a la sección correspondiente a su botón
acceder.forEach(boton => {
    boton.addEventListener('click', function () {
        const id = this.dataset.id;

        switch(id) {
            case '1':
                window.location.href = rutas.europa;
                break;
            case '2':
                window.location.href = rutas.ciudades;
                break;
            case '3':
                window.location.href = rutas.aventuras;
                break;
            default:
                console.log('Ruta no definida para este id');
                break;
        }
    });
});