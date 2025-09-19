const formulario=document.querySelector('form');

formulario.addEventListener("submit", (evento)=>{
    const patente=document.getElementById('dominio').value.trim();
    if(patente.length==6 || patente.length==7){
        var patente1=patente.slice(0, 3);
        const letras=/^[a-zA-Z]+$/;
        const numeros=/^[0-9]+$/;
        if(patente.length==6){
            var patente2=patente.slice(3, 6);
        }
        else{
            var patente2=patente.slice(4, 7);
        }
        if(!(numeros.test(patente2) && letras.test(patente1))){
            evento.preventDefault();
            alert('La patente debe ser: AAA 123/AAA-123/AAA123');
        }
    }
    else{
        evento.preventDefault();
        alert('La patente debe ser: AAA 123/AAA-123/AAA123');
    }
});
