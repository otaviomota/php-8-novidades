<?php


// $valor = 1;

try {

    echo $valor ?? throw new Exception('Mensagem de erro');
    
    // php 7
    // if(!isset($valor)){
    //     throw new Exception('Mensagem de erro');
    // }

    // echo $valor;

} catch (Exception $e) {
    echo $e->getMessage();
}