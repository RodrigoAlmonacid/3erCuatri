const formulario=document.querySelector('form');
const divError=document.getElementById('errorDni');
const dni=document.getElementById(['dni']);

formulario.addEventListener("submit", (event)=>{
    const numDni=dni.value.trim();
    const regla=/^[0-9]+$/; //mas de un valor numerico
    if(numDni.length>10){
        event.preventDefault();
        patente.style.border="2px solid red";
        divError.innerHTML="<p style='color: red;'>El DNI no debe tener mas de 10 caracteres</p>";
    }
    else if(!regla.test(numDni)){
        event.preventDefault();
        patente.style.border="2px solid red";
        divError.innerHTML="<p style='color: red;'>Ingrese solo valores numericos (ej: 11222333)</p>";
    }
})