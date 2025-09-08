const botonDias=document.getElementById('bttDias');
const cantDias=document.getElementById('dias');
const divDias=document.getElementById('divDias');
const botonEnvio=document.getElementById('bttEnviar');

botonDias.addEventListener("click", ()=>{
    const cantidad=cantDias.value;
    if(cantidad>0){
        divDias.style.display="block";
        botonEnvio.style.display="block";
        divDias.replaceChildren();
        for(let i=0; i<cantidad; i++){
            const label = document.createElement('label');
            label.textContent = `Día ${i+1}: ingrese las horas (ej: 2)`;
            label.htmlFor = `hora${i}`;
            const input = document.createElement('input');
            input.type = 'number';
            input.min='0';
            input.max='23'
            input.name = `hora${i}`;
            input.id = `hora${i}`;
            input.required = true;
            const label2 = document.createElement('label');
            label2.textContent = `Ingrese los minutos (ej: 30)`;
            label2.htmlFor = `minuto${i}`;
            const input2 = document.createElement('input');
            input2.type = 'number';
            input2.min='0';
            input2.max='59'
            input2.name = `minuto${i}`;
            input2.id = `minuto${i}`;
            input2.required = true;
            divDias.appendChild(label);
            divDias.appendChild(document.createElement('br'));
            divDias.appendChild(input);
            divDias.appendChild(document.createElement('br'));
            divDias.appendChild(label2);
            divDias.appendChild(document.createElement('br'));
            divDias.appendChild(input2);
            divDias.appendChild(document.createElement('br'));
        }
    }
});


