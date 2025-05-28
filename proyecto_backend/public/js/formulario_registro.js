//Creación de variables traídas del DOM para el registro de usuario
const formulario = document.getElementById("formulario");
const nombre = document.getElementById("name-field");
const correo = document.getElementById("email-field");
const contrasenya = document.getElementById("password-field");
const contrasenyaConfirmada = document.getElementById("password-field-confirm");
const restriccionNombre = document.getElementById("restriccion-nombre");
const restriccionCorreo = document.getElementById("restriccion-correo");
const restriccionContrasenya = document.getElementById("restriccion-contra");
const verificacionContrasenya = document.getElementById("verificacion-contra");
const creacion = document.getElementById("creacion");

//Evento para controlar el registro de usuario y validar los campos
formulario.addEventListener("submit", function(event) {
    event.preventDefault();

    /*
    Expresiones regulares para validar los campos de registro:
    nombreExpresion valida que el nombre solo contenga letras y espacios y que tenga mínimo 3 caracteres.
    correoExpresion valida un correo con estructura general correcta.
    contrasenyaExpresion valida que la contraseña tenga al menos 8 caracteres y deba 
    contener al menos una letra mayúscula, una minúscula, un número y un símbolo especial (@$!%*?&.).
    */
    const nombreExpresion = /^[A-Za-z\s]{3,}$/;
    const correoExpresion = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const contrasenyaExpresion = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!%*?&.]{8,}$/;

    let valido = true;

    //Validación del nombre
    if(nombre.value.trim() === "" || !nombreExpresion.test(nombre.value)) {
        nombre.style.borderColor = "red";
        valido = false;
        restriccionNombre.classList.add("restriccion-nombre");
        restriccionNombre.innerHTML = "Por favor ingresa un nombre correcto de mínimo tres caracteres";
    } else {
        nombre.style.borderColor = "green";
        restriccionNombre.innerHTML = "";
    }

    //Validación del correo
    if(!correoExpresion.test(correo.value)) {
        correo.style.borderColor = "red";
        valido = false;
        restriccionCorreo.classList.add("restriccion-correo");
        restriccionCorreo.innerHTML = "Por favor ingresa un correo válido";
    } else {
        correo.style.borderColor = "green";
        restriccionCorreo.innerHTML = "";
    }

    //Validación de la contraseña
    if(!contrasenyaExpresion.test(contrasenya.value)) {
        contrasenya.style.borderColor = "red";
        valido = false;
        restriccionContrasenya.classList.add("restriccion-contra");
        restriccionContrasenya.innerHTML = "Por favor ingresa una contraseña válida";
    } else {
        contrasenya.style.borderColor = "green";
        restriccionContrasenya.innerHTML = "";
    }

    //Verificación de que las contraseñas coincidan
    if(contrasenya.value != contrasenyaConfirmada.value) {
        contrasenyaConfirmada.style.borderColor = "red";
        valido = false;
        verificacionContrasenya.classList.add("verificacion-contra");
        verificacionContrasenya.innerHTML = "Las contraseñas no coinciden";
    } else {
        contrasenyaConfirmada.style.borderColor = "green";
        verificacionContrasenya.innerHTML = "";
    }

    //Si todas las validaciones son correctas, se permite el envío del formulario
    if(valido) {
        formulario.submit();
    }
});
