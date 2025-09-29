const formulario=document.querySelector('form');
const nombre=document.getElementById('nombre');
const apellido=document.getElementById('apellido');
const domicilio=document.getElementById('domicilio');
const telefono=document.getElementById('telefono');
const fechaNac=document.getElementById('fechaNac');

const divNombre=document.getElementById('errorNombre');
const divApellido=document.getElementById('errorApellido');
const divDomicilio=document.getElementById('errordomicilio');
const divTelefono=document.getElementById('errorTelefono');
const divFecha=document.getElementById('errorfecha');

function letras(cadena){
    let letras = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
    let verifica=false;
    if(letras.test(cadena)){
        verifica=true;
    }
    return verifica;
}

function numeros(cadena){
    let numeros = /^[0-9-\s]+$/;
    let verifica=false;
    if(numeros.test(cadena)){
        verifica=true;
    }
    return verifica;
}

formulario.addEventListener("submit", (event) => {
    if (!letras(nombre.value.trim()) || nombre.value.trim().length > 50) {
        event.preventDefault();
        nombre.style.border = "2px solid red";
        divNombre.innerHTML = "<p style='color: red;'>Nombre incorrecto</p>";
    } else {
        nombre.style.border = "2px solid green";
        divNombre.innerHTML = "";
    }

    if (!letras(apellido.value.trim()) || apellido.value.trim().length > 50) {
        event.preventDefault();
        apellido.style.border = "2px solid red";
        divApellido.innerHTML = "<p style='color: red;'>Apellido incorrecto</p>";
    } else {
        apellido.style.border = "2px solid green";
        divApellido.innerHTML = "";
    }

    if (domicilio.value.trim().length === 0 || domicilio.value.trim().length > 200) {
        event.preventDefault();
        domicilio.style.border = "2px solid red";
        divDomicilio.innerHTML = "<p style='color: red;'>Domicilio incorrecto</p>";
    } else {
        domicilio.style.border = "2px solid green";
        divDomicilio.innerHTML = "";
    }

    if (!numeros(telefono.value.trim()) || telefono.value.trim().length > 20) {
        event.preventDefault();
        apellido.style.border = "2px solid red";
        divApellido.innerHTML = "<p style='color: red;'>Telefono incorrecto</p>";
    } else {
        apellido.style.border = "2px solid green";
        divApellido.innerHTML = "";
    }
});