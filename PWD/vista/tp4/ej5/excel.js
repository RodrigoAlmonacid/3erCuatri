const boton=document.getElementById('boton');
const div=document.getElementById('excel');

boton.addEventListener('click', ()=>{
    div.innerHTML="<?php echo descargaExcel($arregloExport); ?>";
});