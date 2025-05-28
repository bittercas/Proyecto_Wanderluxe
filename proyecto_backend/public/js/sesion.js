//Creación de variable traidas del DOM para el inicio de sesión
const formulario = document.getElementById("formulario");
const correo = document.getElementById("correo");
const contrasenya = document.getElementById("password-field");
const verificacionCorreo = document.getElementById("verificar-correo");
const restriccionContrasenya = document.getElementById("verificar-contra");

//Evento para controlar el inicio de sesión y validar los campos
formulario.addEventListener("submit", function(event) {
    event.preventDefault();

    /*
    Expresiones regulares para validar los campos de inicio de sesión:
    correoExpresion valida un correo con estructura general correcta.
    contrasenyaExpresion valida que la contraseña tenga al menos 8 caracteres y deba 
    contener al menos una letra mayúscula, una minúscula, un número y un símbolo especial (@$!%*?&.).
    */
    const correoExpresion = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const contrasenyaRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!%*?&.]{8,12}$/;

    let valido = true;

    //Se valida que todos los campos estén correctos
    if(correo.value.trim() === "" || !correoExpresion.test(correo.value)){
        correo.style.borderColor = "red";
        valido = false;
        verificacionCorreo.classList.add("verificar-correo");
        verificacionCorreo.innerHTML = "Por favor ingresa un correo correcto";
    }
    else {
        correo.style.borderColor = "green";
        verificacionCorreo.innerHTML = "";
    }

    if(contrasenya.value.trim() === "" || !contrasenyaRegex.test(contrasenya.value)){
        contrasenya.style.borderColor = "red";
        valido = false;
        restriccionContrasenya.classList.add("verificar-contra");
        restriccionContrasenya.innerHTML = "Por favor ingresa una contraseña correcta";
    }
    else {
        contrasenya.style.borderColor = "green";
        restriccionContrasenya.innerHTML = "";
    }

    /*
    Si es válido, el formulario se envía y Laravel maneja el inicio de sesión
    y se redirecciona al usuario a la sesión privada
    */
    if(valido){
        correo.style.borderColor = "green";
        contrasenya.style.borderColor ="green";
        formulario.submit();
    }
});