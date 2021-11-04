<?php

function a(){
    return "Dez";
}

function b(){
    return "Nove";
}

// $valor = 10;
// $valor = 9;
$valor = 8;

$num = match($valor){
    10 => a(),
    9 => b(),
    default => "Outro valor"
};

echo $valor;