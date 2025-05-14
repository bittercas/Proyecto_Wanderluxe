const formulario = document.getElementById("formulario");
/*
const correo = document.getElementById("correo");
const contrasenya = document.getElementById("password-field");
*/
const correo = document.getElementById("correo");
const contrasenya = document.getElementById("password-field");
const verificacionCorreo = document.getElementById("verificar-correo");
const restriccionContrasenya = document.getElementById("verificar-contra");

formulario.addEventListener("submit", function(event) {
    event.preventDefault();

    const correoRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const contrasenyaRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!%*?&.]{8,12}$/;

    let valido = true;

    if(correo.value.trim() === "" || !correoRegex.test(correo.value)){
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

    if(valido){
        formulario.submit();
    }
});

    /*if (valido) {

        fetch("{{ route('iniciar.sesion') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                correo: correo.value,
                contrasenya: contrasenya.value
            })
        })
        .then(response => response.json())  // Se recibe la respuesta en formato JSON
        .then(response => {
            if (response.status === "success") {
                // Si el login es exitoso, redirigimos a la página indicada
                window.location.href = response.redirect;  
            } else {
                // Si el login falla, mostramos un mensaje de error
                alert(response.message);  
            }
        })
        .catch(error => {
            console.error("Error:", error);  // Captura y muestra cualquier error que ocurra
        });
    }
});*/

/*formulario.addEventListener("submit", function(event) {
    event.preventDefault();

    const correoRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const contrasenyaRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!%*?&.]{8,12}$/;

    let valido = true;

    if(correo.value.trim() === "" || !correoRegex.test(correo.value)){
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

    /*if (valido) {

        //const formData = new FormData(formulario);

        fetch("/iniciar-sesion", {
            method: "POST",
            //body: formData,
            /*
            body: {
                correo: "andrea@gmail.com",
                contrasenya: "L0ll1pops.."
            },
            */
            /*headers: {
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                correo: correo.value,
                contrasenya: contrasenya.value
            })
        })
        then(response => response.json())
        .then(response => {
            console.log('Content-Type:', response.headers.get('Content-Type'));
            return response.text();
        })
        /*.then(text => {
            console.log('Respuesta cruda', text);
            console.log('JSON parseado', data)
        })
        */
        /*.then( response =>{
            if (!response.ok) 
                throw new Error('Login fallido, revisalo mostro'); 
            //return response.json();
            window.location.href = response.url;
        })
        
        .then(data => {
            if (data.status === "success") {
                window.location.href = data.redirect; // Redirige si es exitoso
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error("Error:", error);
        });
    }
   /*if(valido){
    formulario.submit();
   }*/
  /*.then(response => {
    if (response.redirected) {
        window.location.href = response.url;
    } else {
        return response.text().then(text => {
            console.error("Error:", text);
        });
    }
})
.catch(error => {
    console.error("Error:", error);
});
});*/