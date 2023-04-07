/*
    Autor: Roberto Rico Sandoval.
    Fille: Registro y login con JS
    Date: 01 02/ 2023
*/

document.getElementById("registro").addEventListener("click", registros);
document.getElementById("iniciar_sesion").addEventListener("click", iniciarSesion);

window.addEventListener("resize", anchoPagina);

var contenedor_loggin_registro = document.querySelector(".contenedor_loggin_registro");

var formulario_login = document.querySelector(".formulario_loggin");

var formulario_registro = document.querySelector(".formulario_registro");

var caja_loggin_trasera = document.querySelector(".caja_loggin");

var caja_registro_trasera = document.querySelector(".caja_registro");


function anchoPagina(){

    if(window.innerWidth > 850){
        
        caja_loggin_trasera.style.display = "block";
        caja_registro_trasera.style.display = "block";
    }else{

        caja_registro_trasera.style.display = "block";
        caja_registro_trasera.style.opacity = "1";
        caja_loggin_trasera.style.display = "none";
        formulario_login.style.display = "block";
        formulario_registro.style.display = "none";
        contenedor_loggin_registro.style.left = "0px";
    }
}

anchoPagina();

function iniciarSesion(){

    if(window.innerWidth > 850){

        formulario_registro.style.display = "none";
        contenedor_loggin_registro.style.left = "10px";
        formulario_login.style.display = "block";
        caja_registro_trasera.style.opacity = "1";
        caja_loggin_trasera.style.opacity = "0";
    }
    else{

        formulario_registro.style.display = "none";
        contenedor_loggin_registro.style.left = "0px";
        formulario_login.style.display = "block";
        caja_registro_trasera.style.display = "block";
        caja_loggin_trasera.style.display = "none";
    }
}


function registros(){

    if(window.innerWidth > 850){

        formulario_registro.style.display = "block";
        contenedor_loggin_registro.style.left = "410px";
        formulario_login.style.display = "none";
        caja_registro_trasera.style.opacity = "0";
        caja_loggin_trasera.style.opacity = "1";
    }
    else{

        formulario_registro.style.display = "block";
        contenedor_loggin_registro.style.left = "0px";
        formulario_login.style.display = "none";
        caja_registro_trasera.style.display = "none";
        caja_loggin_trasera.style.display = "block";
        caja_loggin_trasera.style.opacity = "1";
    }
}

