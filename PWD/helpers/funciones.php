<?php
function verificaNumero($num){
        $num=trim($num);
        $verifica=false;
        if(preg_match('/^[0-9]+$/', $num)){
            $verifica=true;
        }
        $respuesta=[
            "verifica"=>$verifica,
            "valor"=>$num
        ];
        return $respuesta;
    }

function verificaTexto($txt){
    $txt=trim($txt);
    $verifica=false;
    if(preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $txt)){
        $verifica=true;
    }
    $respuesta=[
        "verifica"=>$verifica,
        "valor"=>$txt
    ];
    return $respuesta;
}

function verificaCompuesto($cadena){
    $cadena=trim($cadena);
    $regla='/^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9-\s]+$/';
    $verifica=false;
    if(preg_match($regla, $cadena)){
        $verifica=true;
    }
    $respuesta=[
        "verifica"=>$verifica,
        "valor"=>$cadena
    ];
    return $respuesta;
}

function verificaTelefono($tel){
    $tel=trim($tel);
    $verifica=false;
    if(preg_match('/^[0-9-\s]+$/', $tel)){
        $verifica=true;
    }
    $respuesta=[
        "verifica"=>$verifica,
        "valor"=>$tel
    ];
    return $respuesta;
}
?>

