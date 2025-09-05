const botonDias=document.getElementById('bttDias');
const cantDias=document.getElementById('dias');
const divDias=document.getElementById('divDias');
const botonEnvio=document.getElementById('bttEnviar');

botonDias.addEventListener("click", ()=>{
    const cantidad=cantDias.value;
    if(cantidad>0){
        divDias.style.display="block";
        botonEnvio.style.display="block";
        for(let i=0; i<cantidad; i++){
            const label = document.createElement('label');
            label.textContent = `Día ${i}: ingrese las horas (ej: 10-12)`;
            label.htmlFor = `hora${i}`;
            const input = document.createElement('input');
            input.type = 'text';
            input.name = `hora${i}`;
            input.id = `hora${i}`;
            input.required = true;
            divDias.appendChild(label);
            divDias.appendChild(input);
            divDias.appendChild(document.createElement('br'));
        }
    }
});
