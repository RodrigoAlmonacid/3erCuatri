const formulario=document.querySelector('form');
const divError=document.getElementById('error');


formulario.addEventListener("submit", (evento)=>{
    const patente=document.getElementById('dominio');
    if(patente.value.trim().length==6 || patente.value.trim().length==7){
        var patente1=patente.value.trim().slice(0, 3);
        const letras=/^[a-zA-Z]+$/;
        const numeros=/^[0-9]+$/;
        if(patente.value.trim().length==6){
            var patente2=patente.value.trim().slice(3, 6);
        }
        else{
            var patente2=patente.value.trim().slice(4, 7);
        }
        if(!(numeros.test(patente2) && letras.test(patente1))){
            evento.preventDefault();
            patente.style.border="2px solid red";
            divError.innerHTML="<p style='color: red;'>La patente debe ser: AAA 123/AAA-123/AAA123</p>";
        }
    }
    else{
        evento.preventDefault();
        patente.style.border="2px solid red";
        divError.innerHTML="<p style='color: red;'>La patente debe ser: AAA 123/AAA-123/AAA123</p>";
    }
});
