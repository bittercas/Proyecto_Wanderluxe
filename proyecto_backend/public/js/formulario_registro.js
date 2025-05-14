const formulario = document.getElementById("formulario");
const nombre = document.getElementById("name-field");
//const apellido = document.getElementById("lastname-field");
const correo = document.getElementById("email-field");
const contrasenya = document.getElementById("password-field");
const contrasenyaConfirmada = document.getElementById("password-field-confirm");
const restriccionNombre = document.getElementById("restriccion-nombre");
//const restriccionApellido = document.getElementById("restriccion-apellido");
const restriccionCorreo = document.getElementById("restriccion-correo");
const restriccionContrasenya = document.getElementById("restriccion-contra");
const verificacionContrasenya = document.getElementById("verificacion-contra");
const creacion = document.getElementById("creacion");

formulario.addEventListener("submit", function(event) {
    event.preventDefault();

    const nombreRegex = /^[A-Za-z\s]{3,}$/;
    //const apellidoRegex = /^[A-Za-z\s]{3,}$/;
    const correoRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const contrasenyaRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!%*?&.]{8,}$/;

    let valido = true;

    if(nombre.value.trim() === "" || !nombreRegex.test(nombre.value)){
        nombre.style.borderColor = "red";
        valido = false;
        restriccionNombre.classList.add("restriccion-nombre");
        restriccionNombre.innerHTML = "Por favor ingresa un nombre correcto";
    }
    else {
        nombre.style.borderColor = "green";
        restriccionNombre.innerHTML = "";
    }

    /*if(apellido.value.trim() === "" || !apellidoRegex.test(apellido.value)){
        apellido.style.borderColor = "red";
        valido = false;
        restriccionApellido.classList.add("restriccion-apellido");
        restriccionApellido.innerHTML = "Por favor ingresa un apellido correcto";
    }*/

    if(!correoRegex.test(correo.value)){
        correo.style.borderColor = "red";
        valido = false;
        restriccionCorreo.classList.add("restriccion-correo");
        restriccionCorreo.innerHTML = "Por favor ingresa un correo válido";
    }
    else {
        correo.style.borderColor = "green";
        restriccionCorreo.innerHTML = "";
    }

    if(!contrasenyaRegex.test(contrasenya.value)){
        contrasenya.style.borderColor = "red";
        valido = false;
        restriccionContrasenya.classList.add("restriccion-contra");
        restriccionContrasenya.innerHTML = "Por favor ingresa una contraseña válida";
    }
    else {
        contrasenya.style.borderColor = "green";
        restriccionContrasenya.innerHTML = "";
    }

    if(contrasenya.value != contrasenyaConfirmada.value){
        contrasenyaConfirmada.style.borderColor = "red";
        valido = false;
        verificacionContrasenya.classList.add("verificacion-contra");
        verificacionContrasenya.innerHTML = "Las contraseñas no coinciciden";
    }
    else {
        contrasenya.style.borderColor = "green";
        restriccionContrasenya.innerHTML = "";
    }

    if(valido) {

        const formData = new FormData(formulario);

        fetch("{{ route('registrar') }}", {
            method: "POST",
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                creacion.classList.add("creacion");  // Agregar clase para estilo
                creacion.innerHTML = data.message;  // Mostrar el mensaje de éxito
                formulario.submit();  // Enviar el formulario si es necesario
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
        /*creacion.classList.add("creacion");
        creacion.innerHTML = "¡Usuario creado con éxito!";*/
        formulario.submit();  // Esto envía el formulario
    }
});