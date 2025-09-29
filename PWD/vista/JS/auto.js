const formulario=document.querySelector('form');
const divErrorModelo=document.getElementById('errorModelo');
const divErrorMarca=document.getElementById('errorMarca');
const marca=document.getElementById('marca');
const modelo=document.getElementById('modelo');

formulario.addEventListener("submit", (event)=>{
    const letras=/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ-\s]+$/
    const numeros=/^[0-9]+$/; //mas de un valor numerico
    if(marca.value.trim().length>50 || !letras.test(marca.value.trim())){
        event.preventDefault();
        patente.style.border="2px solid red";
        divErrorMarca.innerHTML="<p style='color: red;'>Datos incorrectos</p>";
    }
    else{
        patente.style.border="2px solid green";
        divErrorMarca.innerHTML="";
    }
    if(modelo.value.trim().length>11 || !numeros.test(modelo.value.trim())){
        event.preventDefault();
        modelo.style.border="2px solid red";
        divErrorModelo.innerHTML="<p style='color: red;'>Ingrese solo valores numericos (ej: 2015)</p>";
    }
    else{
        modelo.style.border="2px solid green";
        divErrorModelo.innerHTML="";
    }
})