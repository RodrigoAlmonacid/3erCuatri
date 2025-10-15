const divQR=document.getElementById('divQR');
const bttOcultar=document.getElementById('bttOcultar');
const bttMostrar=document.getElementById('bttMostrar');

bttMostrar.addEventListener('click', ()=>{
    divQR.style.display="block";
    bttMostrar.style.display="none";
    bttOcultar.style.display="flex"
})

bttOcultar.addEventListener('click', ()=>{
    divQR.style.display="none";
    bttMostrar.style.display="flex";
    bttOcultar.style.display="none"
})