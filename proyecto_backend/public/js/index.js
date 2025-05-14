const destinos = document.getElementById("destinos");
const inicioSesion = document.getElementById("inicioSesion");
const destinosFooter = document.getElementById("destinos_footer");
const america = document.getElementById("america");
const europa = document.getElementById("europa");
const registrar = document.getElementById("registrar");

 destinos.addEventListener("click", function(){
    window.location.href = "destinos.html";
 });

 america.addEventListener("click", function(){
    window.location.href = "america.html";
 });

 europa.addEventListener("click", function(){
    window.location.href = "europa.html";
 });

 inicioSesion.addEventListener("click", function(){
    window.location.href = "MIS_PROYECTOS/PROYECTO_FINAL/login-form-20/login-form-20";
 });

 destinosFooter.addEventListener("click", function(){
    window.location.href = "destinos.html";
 });

 registrar.addEventListener("click", function(){
    window.location.href = "registro.html";
 });